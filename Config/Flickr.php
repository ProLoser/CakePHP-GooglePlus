<?php
/**
 * A Vimeo API Method Map
 *
 * Refer to the apis plugin for how to build a method map
 * https://github.com/ProLoser/CakePHP-Api-Datasources
 *
 */
$config['Apis']['Vimeo']['hosts'] = array(
	'oauth' => 'www.flickr.com/services/oauth',
	'rest' => 'vimeo.com/api/rest/v2',
);
$config['Apis']['Vimeo']['oauth'] = array(
	'version' => '1.0',
	'scheme' => 'http',
	// https://developer.vimeo.com/apis/advanced#oauth
	'login' => '?api_key=:login&perms=:permissions&api_sig=:token',
	'request' => 'request_token',
	'authorize' => 'authorize',
	'access' => 'access_token',
);
$config['Apis']['Vimeo']['read'] = array(
	// field
	'people' => array(
		// api url
		'vimeo.people.getInfo' => array(
			// required conditions
			'user_id',
			// optional conditions the api call can take
			'optional' => array(),
		),
		//Not spelled out in the doc, not sure if it will return anything
		//'vimeo.people.findByUsername' => array(
		//	'username',
		//),
		'vimeo.people.findByEmail' => array(
			'find_email',
		),
		//Not in the API doc either
		//'vimeo.photos.people.getList' => array(
		//	'photo_id',
		//),
		'vimeo.test.login' => array(),
	),
	'albums' => array(
		'vimeo.albums.getVideos' => array(
			'album_id',
		),
		//I don't think we want anything else
		/*
		'flickr.photosets.getContext' => array(
			'photoset_id',
			'photo_id',
		),
		'flickr.photosets.getList' => array(
			'optional' => array(
				'user_id',
			),
		),
		https://developer.vimeo.com/apis/advanced/methods#vimeo-albums
		*/
	),
	'videos' => array(
		'vimeo.videos.getInfo' => array(
			'video_id',
		),
		'flickr.photos.getCollections' => array(
			'video_id',
		),
	),
	'video.comments' => array(
		'vimeo.videos.comments.getList' => array(
			'video_id',
		),
	),
);

$config['Apis']['Vimeo']['write'] = array(
);

$config['Apis']['Vimeo']['update'] = array(
);

$config['Apis']['Vimeo']['delete'] = array(
);