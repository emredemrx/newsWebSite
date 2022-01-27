<!DOCTYPE html>

<html lang="en" dir="ltr">
	<head>
		<title>CKEditor 5 BalloonEditor build</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="https://c.cksource.com/a/1/logos/ckeditor5.png">
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body data-editor="BalloonEditor" data-collaboration="false">
		
		<main>
			<div class="message">
				<div class="centered">
					<h2>CKEditor 5 online builder demo - BalloonEditor build</h2>
				</div>
			</div>
			<div class="centered">
				<div class="row row-editor">
					<div class="editor-container">
						<div class="editor">
							
						</div>
					</div>
				</div>
			</div>
		</main>
		
		<script src="../build/ckeditor.js"></script>
		<script>BalloonEditor
				.create( document.querySelector( '.editor' ), {
					
				toolbar: {
					items: [
						'heading',
						'|',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'|',
						'outdent',
						'indent',
						'|',
						'imageUpload',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'undo',
						'redo'
					]
				},
				language: 'tr',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:inline',
						'imageStyle:block',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells'
					]
				},
					licenseKey: '',
					
					
					
				} )
				.then( editor => {
					window.editor = editor;
			
					
					
					
				} )
				.catch( error => {
					console.error( 'Oops, something went wrong!' );
					console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
					console.warn( 'Build id: xou02sai81vc-nohdljl880ze' );
					console.error( error );
				} );
		</script>
	</body>
</html>