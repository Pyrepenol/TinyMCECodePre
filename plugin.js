
( function() {
    tinymce.PluginManager.add( 'fb_test', function( editor, url ) {
				 editor.addButton('code-pre', {
				 text: 'Insert',
				 icon: 'code',
				 context: 'tools',
				 onclick: function() {
				 ed.windowManager.open({
				 title: 'Insert Code',
				 width: 300,
				 height: 80,
				 body: [
				 {type: 'listbox', name: 'type', label: '','values': [
				 {text: 'Apache', value: 'language-apache'},
				 {text: 'AsciiDoc', value: 'language-asciidoc'},
				 {text: 'bash', value: 'language-bash'},
				 {text: 'HTML', value: 'language-html'},
				 {text: 'HTTP', value: 'language-http'},
				 {text: 'INI', value: 'language-ini'},
				 {text: 'css', value: 'language-css'},
				 {text: 'Markdown', value: 'language-markdown'},
				 {text: 'Makefile', value: 'language-makefile'},
				 {text: 'HTML', value: 'language-html'},
				 // {text: 'Ruby', value: 'ruby'},
				 {text: 'PHP', value: 'lanuage-php'},
				 {text: 'JS', value: 'language-javascript'}
				 ]}
				 ],
				 onsubmit: function(e) {
				 editor.insertContent('<pre><code class="'+e.data.type+'">'+editor.selection.getContent()+'</code></pre>');
				  }
				});
				}
				});		
    }
);
} )();
