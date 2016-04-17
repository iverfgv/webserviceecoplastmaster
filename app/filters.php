<?php

	Route::filter('csrfInHeader', function($route, $request) {

	    if (Session::token() !== (string) $request->header('X-CSRF-TOKEN') ) {

	        throw new Illuminate\Session\TokenMismatchException;

	    }
	});

?>