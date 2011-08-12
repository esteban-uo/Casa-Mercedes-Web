<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
       <title>
           <?php __('Casa Mercedes - '); ?>
           <?php echo $title_for_layout; ?>
       </title>
		<?php
           echo $this->Html->meta('icon');

           echo $scripts_for_layout;

       ?>
	   
	   <style>
		@font-face {
				font-family: 'QuicksandLight';
				src: url('../fonts/Quicksand_Light-webfont.eot');
				src: url('../fonts/Quicksand_Light-webfont.eot?#iefix') format('embedded-opentype'),
					 url('../fonts/Quicksand_Light-webfont.woff') format('woff'),
					 url('../fonts/Quicksand_Light-webfont.ttf') format('truetype'),
					 url('../fonts/Quicksand_Light-webfont.svg#QuicksandLight') format('svg');
				font-weight: normal;
				font-style: normal;

			}

			@font-face {
				font-family: 'QuicksandBook';
				src: url('../fonts/Quicksand_Book-webfont.eot');
				src: url('../fonts/Quicksand_Book-webfont.eot?#iefix') format('embedded-opentype'),
					 url('../fonts/Quicksand_Book-webfont.woff') format('woff'),
					 url('../fonts/Quicksand_Book-webfont.ttf') format('truetype'),
					 url('../fonts/Quicksand_Book-webfont.svg#QuicksandBook') format('svg');
				font-weight: normal;
				font-style: normal;

			}

			@font-face {
				font-family: 'QuicksandBold';
				src: url('../fonts/Quicksand_Bold-webfont.eot');
				src: url('../fonts/Quicksand_Bold-webfont.eot?#iefix') format('embedded-opentype'),
					 url('../fonts/Quicksand_Bold-webfont.woff') format('woff'),
					 url('../fonts/Quicksand_Bold-webfont.ttf') format('truetype'),
					 url('../fonts/Quicksand_Bold-webfont.svg#QuicksandBold') format('svg');
				font-weight: normal;
				font-style: normal;

			}

			* {
				margin:0;
				padding:0;
			}

			/** General Style Info **/

			body {
				background:#a1c5ab;
				font-size:90%;
				margin: 0;
				font-family:QuicksandLight;
			}
			a {
				color: #003d4c;
				text-decoration: underline;
				font-weight: bold;
			}
			a:hover {
				color: #367889;
				text-decoration:none;
			}
			a img {
				border:none;
			}
			h1, h2, h3, h4 {
				font-weight: normal;
				margin-bottom:0.5em;
			}
			.title_alt{
				margin: 40px 0px 20px 0px;
				padding: 5px;
				background: url('../img/trans1.png');
				-moz-box-shadow: 0 0 5px #000;
				-webkit-box-shadow: 0 0 5px #000;
				box-shadow: 0 0 5px #000;
				behavior: url(../css/PIE.htc);
				
			}
			h1.title_alt{
				padding-left: 40px;
				font-size: 70px;
				color: #fff;
				text-shadow: #000 0em 0em 0.2em;
			}

			h2 {
				font-size: 190%;
			}
			h3 {
				font-size: 165%;
			}
			h4 {
				font-weight: normal;
			}
			ul, li {
				margin: 0 12px;
				list-style:none;
			}

			/*botones especiales*/
			.alt{
				position: fixed;
				top: 3px;
				right: 80px;
				background:#4f2468;
			}

			.teal{
			background:#00cdde;
			position: fixed;
			top: 3px;
			right: 15px;
			}

			.button_generic a{
				text-decoration: none;	
				color: #fff;
			}
			.button_generic {

				padding: 10px;
				font-family: QuicksandBold;
				-moz-border-radius: 10px 10px 10px 10px;
				-webkit-border-radius: 10px 10px 10px 0px;
				border-radius: 10px 10px 10px 0px;
				-moz-box-shadow: 0 0 8px #493443;
				-webkit-box-shadow: 0 0 8px #493443;
				box-shadow: 0 0 8px #000;
				behavior: url(../css/PIE.htc);

			}
			.button_generic:hover{
					text-shadow: #000 0.1em 0.1em 0.2em;
				-moz-box-shadow: inset 0 0 5px #000;
				-webkit-box-shadow: inset 0 0 5px#000;
				box-shadow: inner 0 0 5px #000;

			}


			/** Layout **/

			::-webkit-input-placeholder {
			   color: #eee;
			}

			:-moz-placeholder {
			   color: #eee;
			}

			#container {
				text-align: left;
			}

			#header{
				padding: 10px 20px;
			}
			#header h1 {
				line-height:20px;
				background: #003d4c url('../img/cake.icon.png') no-repeat left;
				color: #fff;
				padding: 0px 30px;
			}
			#header h1 a {
				color: #fff;
				background: #003d4c;
				font-weight: normal;
				text-decoration: none;
			}
			#header h1 a:hover {
				color: #fff;
				background: #003d4c;
				text-decoration: underline;
			}
			#content{
				border-top:solid 1px #98a59b;
				border-bottom:solid 1px #98a59b;
				background:rgba(255,255,255,0.5);
				clear: both;
				color: #333;
				padding: 10px 20px 40px 20px;
				overflow: auto;
			}
			#footer {
				clear: both;
				padding: 6px 5px;
				text-align: right;
			}

			/** containers **/
			div.form,
			div.index,
			div.view {
				float:right;
				width:76%;
				border-left:1px solid #98a59b;
				;
				padding:10px 2%;
			}
			div.actions {
				float:left;
				width:16%;
				padding:10px 1.5%;
			}
			div.actions h3 {
				padding-top:0;
				color:#777;
			}


			/** Tables **/
			table {
				background: #fff;
				border-right:0;
				clear: both;
				color: #333;
				margin-bottom: 10px;
				width: 100%;
			}
			th {
				border:0;
				border-bottom:2px solid #555;
				text-align: left;
				padding:4px;
			}
			th a {
				display: block;
				padding: 2px 4px;
				text-decoration: none;
			}
			th a.asc:after {
				content: ' ⇣';
			}
			th a.desc:after {
				content: ' ⇡';
			}
			table tr td {
				background: #fff;
				padding: 6px;
				text-align: left;
				vertical-align: top;
				border-bottom:1px solid #ddd;
			}
			table tr:nth-child(2n) td {
				background: #f5f5f5;
			}
			table .altrow td {
				background: #f5f5f5;
			}
			td.actions {
				text-align: center;
				white-space: nowrap;
			}
			table td.actions a {
				margin: 0px 6px;
				padding:2px 5px;
			}
			.cake-sql-log table {
				background: #f4f4f4;
			}
			.cake-sql-log td {
				padding: 4px 8px;
				text-align: left;
			}
			.cake-sql-log caption {
				color:#fff;
			}

			/** Paging **/
			div.paging {
				color: #333;
				margin-top: 1em;
				clear:both;
			}
			div.paging span.disabled {
				color: #999;
				display: inline;
			}
			div.paging span.current {
				color: #c73e14;
			}
			div.paging span a {
			}

			/** Scaffold View **/
			dl {
				line-height: 2em;
				margin: 0em 0em;
				width: 60%;
			}
			dl .altrow {
				background: #f4f4f4;
			}
			dt {
				font-weight: bold;
				padding-left: 4px;
				vertical-align: top;
			}
			dd {
				margin-left: 10em;
				margin-top: -2em;
				vertical-align: top;
			}

			/** Forms **/
			form {
				clear: both;
				margin-right: 20px;
				padding: 0;
				width: 95%;
			}
			fieldset {
				border: 1px solid #98a59b;
				
				margin-bottom: 1em;
				padding: 16px 20px;
			}
			fieldset legend {
				color: #333;
				font-size: 160%;
				font-weight: bold;
			}
			fieldset fieldset {
				margin-top: 0px;
				margin-bottom: 20px;
				padding: 16px 10px;
			}
			fieldset fieldset legend {
				font-size: 120%;
				font-weight: normal;
			}
			fieldset fieldset div {
				clear: left;
				margin: 0 20px;
			}
			form div {
				margin-bottom: 1em;
				padding: .5em;
				vertical-align: text-top;
			}
			form .input {
				color: #fff;
			}
			form .required {
				font-weight: bold;
			}
			form .required label:after {
				color: #e32;
				content: '*';
				display:inline;
			}
			form div.submit {
				border: 0;
				clear: both;
				margin-top: 10px;
			}
			label {
				display: block;
				font-size: 110%;
				margin-bottom:3px;
			}
			input, textarea {
				clear: both;
				font-size: 140%;
				padding: 5px 10px;
				width:98%;
			}

			div.input input{
					border:none;
					color:#fff;
					background: rgba(82,98,84,1);
					clear: both;
					padding: 5px 10px;
					font-size: 140%;
					width:98%;
					border-radius: 10px 10px 10px 0px;
					-moz-box-shadow: inset 0 0 5px #000;
					-webkit-box-shadow: inset 0 0 5px#000;
					box-shadow: inner 0 0 5px #000;
			}
			.input_buscar{
				border:none;
				background: rgba(82,98,84,1);
				border-radius: 10px 10px 10px 0px;
				-moz-box-shadow: inset 0 0 5px #000;
				-webkit-box-shadow: inset 0 0 5px#000;
				box-shadow: inner 0 0 5px #000;
				color:#fff;
			}

			/* ACP */

			#contenido_acp_index ul{
				margin-left:30px;
			}
			img.imagen_perfil_box{
				margin:0 20px 5px 0;
				padding: 5px;
				background:#ccc;
			}
			img.imagen_infograma_box{
				margin:0 20px 0 0;
				padding: 5px;
				background:#ccc;
			}

			div.box_info_acp {
				position:relative;
				border-bottom:solid 1px #fff;
				padding:5px 5px 28px 5px;
				margin:10px 0 10px 0;
				width:100%;
				background:#493443;
				color:#fff;
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				border-radius: 10px;
				-moz-box-shadow: 0 0 8px #000;
				-webkit-box-shadow: 0 0 8px #000;
				box-shadow: 0 0 8px #000;
			}

			div.box_info_acp:hover{
					background:#fff;
					color:#493443;
					
			}	
			div.box_info_extra_acp{
				background:#000;
				padding:5px;
				margin:20px 0 0 0;
			}

			.box_info_extra_acp ul li{
				margin-bottom:5px;
			}

			.box_info_extra_acp ul li a{
				color:#333;
				text-decoration:none;
				font-size:15px;	
			}

			div.box_info_acp h2{
				margin-bottom:10px;
			}

			div.box_new_info_acp{
			background:#444;
			}

			.actions_a{
				margin-left:20%;
			}
			.actions_a li{
				float:left;
				margin:10px 5px;
			}


			div.actions ul li a:hover {
				text-decoration: underline;
			}

			.actions_a ul li a{
				font-weight:normal;
				padding: 4px 8px;
				background:#af6fd4;
				background: -webkit-gradient(linear, left top, left bottom, from(#af6fd4), to(#4f2468));
				background-image: -moz-linear-gradient(top, #af6fd4, #4f2468);
				color:#fff;
				border:1px solid #444;
				-webkit-border-radius:8px;
				-moz-border-radius:8px;
				border-radius:8px;
				text-decoration:none;
				text-shadow: #fff 0px 1px 0px;
				min-width: 0;
			}

			div.actions_a ul li a:hover{

				background: #bf7fe4;
				background: -webkit-gradient(linear, left top, left bottom, from(#bf7fe4), to(#5f3478));
					background-image: -moz-linear-gradient(top, #af6fd4, #4f2468);
				
			}
			.action_info_acp{
				right:0;
				bottom:0;
				position: absolute;

			}
			.action_info_acp ul li{
					list-style:none;
					float:left;
					
			}
			.action_info_acp ul li a{
					display:block;
					color:transparent;
					width:27px;
					height:27px;
			}

			#acp_info_extra{
				background:#a1c5ab;
				border-radius: 10px 10px 10px 0;
				padding:10px;

			}
			#acp_info_extra a:hover{
				color:#495963;
			}

			#acp_info_extra a{
				color:#fff;
			}

			.boton_acp_modificar{
				background:url('../img/img_edit.png') no-repeat;
				
			}
			.boton_acp_eliminar{
				background:url('../img/img_delete.png') no-repeat;
			}
			.boton_acp_info{
				background:url('../img/img_info.png') no-repeat;
			}
			.boton_acp_ultimousuario{
				background:url('../img/img_lastuser.png') no-repeat;
			}

			.boton_acp_crear{
				background:url('../img/img_add.png') no-repeat;
			}
			div.input label{
				color:#333;
				font-size: 15px;
				
			}

			.formateotxt_strong{
				font-weight:bold;
			}

			select {
				clear: both;
				font-size: 120%;
				vertical-align: text-bottom;
			}
			select[multiple=multiple] {
				width: 100%;
			}
			option {
				font-size: 120%;
				padding: 0 3px;
			}
			input[type=checkbox] {
				clear: left;
				float: left;
				margin: 0px 6px 7px 2px;
				width: auto;
			}
			div.checkbox label {
				display: inline;
			}
			input[type=radio] {
				float:left;
				width:auto;
				margin: 0 3px 7px 0;
			}
			div.radio label {
				margin: 0 0 6px 20px;
			}
			input[type=submit] {
				display: inline;
				font-size: 110%;
				width: auto;
			}
			form .submit input[type=submit] {
				background:#62af56;
				background: -webkit-gradient(linear, left top, left bottom, from(#a8ea9c), to(#62af56));
				background-image: -moz-linear-gradient(top, #a8ea9c, #62af56);
				border-color: #2d6324;
				color: #000;
				text-shadow: #8cee7c 0px 1px 0px;
			}
			form .submit input[type=submit]:hover {
				background:#4ca83d;
				background: -webkit-gradient(linear, left top, left bottom, from(#85e573), to(#4ca83d));
				background-image: -moz-linear-gradient(top, #85e573, #4ca83d);
			}

			/** Notices and Errors **/
			div.message {
				clear: both;
				color: #fff;
				font-size: 140%;
				font-weight: bold;
				margin: 0 0 1em 0;
				background: #c73e14;
				padding: 5px;
			}
			div.error-message {
				clear: both;
				color: #fff;
				font-weight: bold;
				background: #c73e14;
			}
			p.error {
				background-color: #e32;
				color: #fff;
				font-family: Courier, monospace;
				font-size: 120%;
				line-height: 140%;
				padding: 0.8em;
				margin: 1em 0;
			}
			p.error em {
				color: #000;
				font-weight: normal;
				line-height: 140%;
			}
			.notice {
				background: #ffcc00;
				color: #000;
				display: block;
				font-family: Courier, monospace;
				font-size: 120%;
				line-height: 140%;
				padding: 0.8em;
				margin: 1em 0;
			}
			.success {
				background: green;
				color: #fff;
			}

			/**  Actions  **/
			div.actions ul {
				margin: 0;
				padding: 0;
			}
			div.actions li {
				margin:0 0 0.5em 0;
				list-style-type: none;
				white-space: nowrap;
				padding: 0;
			}
			div.actions ul li a {
				font-weight: normal;
				display: block;
				clear: both;
			}
			div.actions ul li a:hover {
				text-decoration: underline;
			}

			input[type=submit],
			div.actions ul li a,
			td.actions a {
				font-weight:normal;
				padding: 4px 8px;
				background:#af6fd4;
				background: -webkit-gradient(linear, left top, left bottom, from(#af6fd4), to(#4f2468));
				background-image: -moz-linear-gradient(top, #af6fd4, #4f2468);
				color:#fff;
				border:1px solid #444;
				-webkit-border-radius:8px;
				-moz-border-radius:8px;
				border-radius:8px;
				text-decoration:none;
				text-shadow: #fff 0px 1px 0px;
				min-width: 0;
			}
			input[type=submit]:hover,
			div.actions ul li a:hover,
			td.actions a:hover {
				background: #bf7fe4;
				background: -webkit-gradient(linear, left top, left bottom, from(#bf7fe4), to(#5f3478));
					background-image: -moz-linear-gradient(top, #af6fd4, #4f2468);
				
			}

			/** Related **/
			div.related {
				clear: both;
				display: block;
			}

			/** Debugging **/
			pre {
				color: #000;
				background: #f0f0f0;
				padding: 1em;
			}
			pre.cake-debug {
				background: #ffcc00;
				font-size: 120%;
				line-height: 140%;
				margin-top: 1em;
				overflow: auto;
				position: relative;
			}
			div.cake-stack-trace {
				background: #fff;
				color: #333;
				margin: 0px;
				padding: 6px;
				font-size: 120%;
				line-height: 140%;
				overflow: auto;
				position: relative;
			}
			div.cake-code-dump pre {
				position: relative;
				overflow: auto;
			}
			div.cake-stack-trace pre, div.cake-code-dump pre {
				color: #000;
				background-color: #F0F0F0;
				margin: 0px;
				padding: 1em;
				overflow: auto;
			}
			div.cake-code-dump pre, div.cake-code-dump pre code {
				clear: both;
				font-size: 12px;
				line-height: 15px;
				margin: 4px 2px;
				padding: 4px;
				overflow: auto;
			}
			div.cake-code-dump span.code-highlight {
				background-color: #ff0;
				padding: 4px;
			}
			div.code-coverage-results div.code-line {
				padding-left:5px;
				display:block;
				margin-left:10px;
			}
			div.code-coverage-results div.uncovered span.content {
				background:#ecc;
			}
			div.code-coverage-results div.covered span.content {
				background:#cec;
			}
			div.code-coverage-results div.ignored span.content {
				color:#aaa;
			}
			div.code-coverage-results span.line-num {
				color:#666;
				display:block;
				float:left;
				width:20px;
				text-align:right;
				margin-right:5px;
			}
			div.code-coverage-results span.line-num strong {
				color:#666;
			}
			div.code-coverage-results div.start {
				border:1px solid #aaa;
				border-width:1px 1px 0px 1px;
				margin-top:30px;
				padding-top:5px;
			}
			div.code-coverage-results div.end {
				border:1px solid #aaa;
				border-width:0px 1px 1px 1px;
				margin-bottom:30px;
				padding-bottom:5px;
			}
			div.code-coverage-results div.realstart {
				margin-top:0px;
			}
			div.code-coverage-results p.note {
				color:#bbb;
				padding:5px;
				margin:5px 0 10px;
				font-size:10px;
			}
			div.code-coverage-results span.result-bad {
				color: #a00;
			}
			div.code-coverage-results span.result-ok {
				color: #fa0;
			}
			div.code-coverage-results span.result-good {
				color: #0a0;
			}

			/** Elements **/
			#url-rewriting-warning {
				display: none;
			}

			/* Añado a Panel de control */

			#acp_pagina_principal{
				float: left;
				width: 57%;
				margin-top:15px;
			}
			.busqueda_acp{
				float:left;
				width: 76%;
				margin-right: 14px;
			}
			.fl{
				float:left;
			}
			.fr{
				float:right;
			}
			.cb{
				clear:both;
			}
			.cl{
				clear:left;
			}
				   
	   </style>
</head>
       <body>
	   <h1>Reportes</h1>
	<div id="content">
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<?php echo $this->element('sql_dump'); ?>
   </body>
</html>