<?php
/**
 *  File: core/modules/calibracion/modules_calibracion.php
 *  Description: Modelo PDF para el módulo Calibracion de Dolibarr
 */

require_once DOL_DOCUMENT_ROOT . '/core/modules/pdf/modules_pdf.php';

if (!class_exists('ModelePDFCalibracion')) {
    class ModelePDFCalibracion extends ModelePDF
    {
        public $name = 'calibraciondefault';
        public $description = 'Modelo PDF por defecto para calibración';
        public $type = 'calibracion';
        public $version = 'dolibarr';

        /**
         * Constructor
         */
        public function __construct($db)
        {
            global $langs;
            $this->db = $db;
            $langs->load('calibracion@calibracion');
        }

        /**
         * Escribe el archivo PDF en disco
         *
         * @param   Object  $object         Objeto calibracion
         * @param   Translate $outputlangs  Idiomas
         * @param   string  $srctemplatepath Plantilla
         * @param   int     $hidedetails    Ocultar detalles
         * @param   int     $hidedesc       Ocultar descripción
         * @param   int     $hideref        Ocultar referencia
         * @return  int                     1 si OK, <0 si KO
         */
        public function write_file($object, $outputlangs, $srctemplatepath = '', $hidedetails = 0, $hidedesc = 0, $hideref = 0)
        {
            global $conf, $langs, $user;

            // Aquí pones la lógica de generación de PDF, por ahora solo crea un archivo vacío de ejemplo
            $pdf_path = $this->_getFileName($object);
            $handle = fopen($pdf_path, 'w');
            if ($handle) {
                fwrite($handle, "PDF generación de calibración (placeholder)\n");
                fclose($handle);
                return 1;
            } else {
                $this->error = 'No se pudo crear el archivo PDF en ' . $pdf_path;
                return -1;
            }
        }

        /**
         * Devuelve el nombre completo de archivo para el PDF generado
         *
         * @param   Object $object
         * @return  string
         */
        private function _getFileName($object)
        {
            global $conf;
            $dir = $conf->calibracion->dir_output . "/calibracion";
            if (!file_exists($dir)) {
                dol_mkdir($dir);
            }
            return $dir . "/calibracion_" . $object->ref . ".pdf";
        }
    }
}
?>
