$(function(){
  tinymce.init({
    selector:'.editable',
        menubar : false,
        inline: true,

        plugins: "link image fullscreen contextmenu colorpicker textcolor code charmap visualchars media visualblocks",
        contextmenu: "link image inserttable | cell row column deletetable",
        toolbar:[
          "styleselect | bold italic underline | sub sup | alignleft aligncenter alignright | charmap | link unlink image | fullscreen | forecolor backcolor | removeformat | "   
        ],
        content_css: "/placeauxcartons/styles/typographie.css",
        language : 'fr_FR',

        // fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",

        style_formats: [
          {title: 'Petite importance', inline: 'strong'},
          {title: 'Importance relative', inline: 'em'},
          
          {title: 'Texte normal', block: 'p', classes: 'normal-text'},
          
          {title: "Titre 1", block: 'h1', classes:'ft_Bebas_Neue'},
          {title: "Titre 2", block: 'h2', classes:'ft_Bebas_Neue'},
          {title: "Titre 3", block: 'h3', classes:'ft_Bebas_Neue'},
          {title: "Titre 4", block: 'h4', classes:'ft_Bebas_Neue'},

          {title: "Paragraphe d'accroche", block: 'p', classes: 'ft_Archivo_Narrow lead'},
          {title: "Citation", block: 'blockquote'}
          
      
         
       
          
         

        ],
        statusbar : false

  });
});