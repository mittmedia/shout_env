<?php
/*
Plugin Name: Shout Environment
Plugin URI: https://github.com/fredriksundstrom/shout_env
Description: It shouts it out loud if it's in the development environment.
Version: 1.0.0
Author: Fredrik Sundström
Author URI: https://github.com/fredriksundstrom
License: MIT
*/

/*
Copyright (c) 2012 Fredrik Sundström

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
*/

add_action( 'init', 'shout_env_show_env' );
function shout_env_show_env()
{
  if ( APPLICATION_ENV == 'development' ) {
    $html = <<<SQL
      <style type="text/css">
        #environment {
          display: block;
          width: 200px;
          height: 200px;
          position: absolute;
          top: -100px;
          right: -100px;
          -webkit-transform: rotate(45deg);
          -moz-transform: rotate(45deg);
          -o-transform: rotate(45deg);
          background-color: red;
          z-index: 1000000;
          text-align: center;
          opacity: .5;
        }
      </style>
      <div id="environment">
        <h3 style="color: white; font-size: 1em; margin-top: 170px;">Development</h3>
      </div>
SQL;
  } else if ( APPLICATION_ENV == 'stage' ) {
    $html = <<<SQL
      <style type="text/css">
        #environment {
          display: block;
          width: 200px;
          height: 200px;
          position: absolute;
          top: -100px;
          right: -100px;
          -webkit-transform: rotate(45deg);
          -moz-transform: rotate(45deg);
          -o-transform: rotate(45deg);
          background-color: blue;
          z-index: 1000000;
          text-align: center;
          opacity: .5;
        }
      </style>
      <div id="environment">
        <h3 style="color: white; font-size: 1em; margin-top: 170px;">You are in the stage environment!</h3>
      </div>
SQL;
  }

  echo $html;
}
