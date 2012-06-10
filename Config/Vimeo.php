<?php
/**
 * A Vimeo API Method Map
 *
 * Refer to the apis plugin for how to build a method map
 * https://github.com/ProLoser/CakePHP-Api-Datasources
 *
 */
$config['Apis']['Vimeo']['hosts'] = array(
	'oauth' => 'vimeo.com/oauth',
	'rest' => 'vimeo.com/api/rest/v2',
);
// http://vimeo.com/api/docs/advanced-api
$config['Apis']['Vimeo']['oauth'] = array(
	'version' => '1.0',
	'scheme' => 'https',
	'login' => 'authenticate', //Exactly like authorize, just auto-redirects
	'request' => 'request_token',
	'authorize' => 'authorize',
	'access' => 'access_token',
);
$config['Apis']['Vimeo']['read'] = array(
	// field
	'people' => array(
		'vimeo.people.findByEmail' => array(
			'email',
		),
		// api url
		'vimeo.people.getInfo' => array( // See 'test' section below for lighter response
			// optional conditions the api call can take
			'optional' => array(
				'user_id',
			),
		),
	),
	'albums' => array(
		'vimeo.albums.getAll' => array(
			'optional' => array(
				'user_id',
				'sort', // Method to sort by: newest, oldest, most_played, most_commented, or most_liked.
				'page', // The page number to show.
				'per_page', // Number of items to show on each page. Max 50.
			),
		),
	),
	'videos' => array(
		'vimeo.albums.getVideos' => array(
			'album_id',
		),
		'vimeo.videos.getInfo' => array(
			'video_id',
		),
		'vimeo.videos.getAll' => array(
			'optional' => array(
				'user_id',
				'sort',
				'page',
				'per_page',
				'summary_response',
				'full_response',
			),
		),
	),
	'video.comments' => array(
		'vimeo.videos.comments.getList' => array(
			'video_id',
		),
	),
	'test' => array(
		'vimeo.test.login' => array(), // Just returns id + username if logged in
	),
);

$config['Apis']['Vimeo']['write'] = array(
);

$config['Apis']['Vimeo']['update'] = array(
);

$config['Apis']['Vimeo']['delete'] = array(
);