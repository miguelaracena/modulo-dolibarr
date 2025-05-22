-- Copyright (C) 2025 SuperAdmin
--
-- This program is free software: you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation, either version 3 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program.  If not, see https://www.gnu.org/licenses/.


-- BEGIN MODULEBUILDER INDEXES
-- END MODULEBUILDER INDEXES

--ALTER TABLE llx_calibracion_calibracion ADD UNIQUE INDEX uk_calibracion_calibracion_fieldxy(fieldx, fieldy);

--ALTER TABLE llx_calibracion_calibracion ADD CONSTRAINT llx_calibracion_calibracion_fk_field FOREIGN KEY (fk_field) REFERENCES llx_calibracion_myotherobject(rowid);

