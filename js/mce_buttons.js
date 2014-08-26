(function() {
   tinymce.create('tinymce.plugins.doc_list', {
      init : function(ed, url) {
         ed.addButton('doc_list', {
            title : 'Document List',
            image : url+'/../images/document_add.png',
            onclick : function() {
				ed.execCommand('mceInsertContent', false, '[doc_list cat_name="ENTER CATEGORY HERE"]');
					 
            }
         });
      },
      createControl : function(n, cm) {
         return null;
      },
      getInfo : function() {
         return {
            longname : "Doucment List",
            author : 'Based on Konstantinos Kouratoras',
            version : "1.0"
         };
      }
   });
   tinymce.PluginManager.add('doc_list', tinymce.plugins.doc_list);
})();