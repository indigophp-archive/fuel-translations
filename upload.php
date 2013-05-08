<?php

return array(
	\Upload::UPLOAD_ERR_OK						=> 'A fájlfeltöltés sikeres',
	\Upload::UPLOAD_ERR_INI_SIZE				=> 'A fájl mérete túl nagy.',
	\Upload::UPLOAD_ERR_FORM_SIZE				=> 'A fájl mérete túl nagy!',
	\Upload::UPLOAD_ERR_PARTIAL					=> 'A fájl csak részben került feltöltésre',
	\Upload::UPLOAD_ERR_NO_FILE					=> 'Nem volt feltöltött fájl',
	\Upload::UPLOAD_ERR_NO_TMP_DIR				=> 'A beállított átmeneti feltöltési könyvtár hiányzik',
	\Upload::UPLOAD_ERR_CANT_WRITE				=> 'A feltöltött fájlt nem sikerült a lemezre írni',
	\Upload::UPLOAD_ERR_EXTENSION				=> 'A feltöltést blokkolta egy PHP kiegészítő',
	\Upload::UPLOAD_ERR_MAX_SIZE				=> 'A fájl mérete túl nagy',
	\Upload::UPLOAD_ERR_EXT_BLACKLISTED			=> 'Ez a kiterjesztés nem engedélyezett',
	\Upload::UPLOAD_ERR_EXT_NOT_WHITELISTED		=> 'Ez a kiterjesztés nem engedélyezett',
	\Upload::UPLOAD_ERR_TYPE_BLACKLISTED		=> 'Ez a fájltípus nem engedélyezett',
	\Upload::UPLOAD_ERR_TYPE_NOT_WHITELISTED	=> 'Ez a fájltípus nem engedélyezett',
	\Upload::UPLOAD_ERR_MIME_BLACKLISTED		=> 'Ez a mime típus nem engedélyezett',
	\Upload::UPLOAD_ERR_MIME_NOT_WHITELISTED	=> 'Ez a mime típus nem engedélyezett',
	\Upload::UPLOAD_ERR_MAX_FILENAME_LENGTH		=> 'A feltöltött fájl neve túl hosszú',
	\Upload::UPLOAD_ERR_MOVE_FAILED				=> 'A feltöltött fájlt nem lehet a végleges helyére áthelyezni',
	\Upload::UPLOAD_ERR_DUPLICATE_FILE 			=> 'A feltöltött fájt nevével egyező nevű fájl már szerepel a könyvtárban',
	\Upload::UPLOAD_ERR_MKDIR_FAILED			=> 'Nem lehet létrehozni a fájl cél könyvtárát',
);
