/* Sitewide options for the the Cite toolbar button:
* All options should be specified
*
* "date format" sets the date format used for the function to insert the current date
* Current available options:
* date - the day of the month
* zdate - day of the month, zero padded to 2 digits
* monthname - The month name
* month - The numberic month (1-12)
* zmonth - numeric month, zero padded to 2 digits
* year - The full year (4 digits)
*
* "autodate fields" is a list of template fields that should have a button to insert the current date
* 
* "months" is a list of localized month names
*
* "modal" - if true, the dialogs will be modal windows, blocking access to the rest of the window.
* See http://en.wikipedia.org/wiki/Modal_window
* All dialogs in the toolbar are modal by default
*
* "autoparse" - if true, previewing a ref will automatically trigger a preview of the parsed wikitext.
* It is not recommended to set this to true as a global setting as it may slow the script down for
* people with slow connections.
*
* "expandtemplates" - if true, templates and parser functions will be expanded when getting page text
* (templates inside of ref tags will not be expanded). This will allow references inside of templates or
* references using {{#tag:ref}} to be listed in the named refs dialog and searched by error checks.
* This may slow loading the named refs and error check dialogs.
*/

CiteTB.Options = {
"date format" : "<date> <monthname> <year>",
"autodate fields" : ['accessdate'],
"months" : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
"modal" : true,
"autoparse" : true,
"expandtemplates" : false
};

// Cite template definitions
new citeTemplate('cite web', 'web',
[ // Basic fields
{"field": "last<N>", "autofillprop":"last-incr", 'increment_group':'author'},
{"field": "first<N>", "autofillprop":"first-incr", 'increment_group':'author', 'increment_button':true}, 
{"field": "title", "autofillprop":"title"},
{"field": "url", "autofillid":"url"},
{"field": "website", "autofillprop":"journal"},
{"field": "publisher", "autofillprop":"publisher"},
{"field": "accessdate"},
{"field": "ref", "tooltip":"cite-ref-tooltip"}
],
[ // Expanded fields
{"field": "author<N>", 'increment_group':'author_alt', 'increment_button':true},
{"field": "authorlink<N>", "tooltip":"cite-authorlink-tooltip", 'increment_group':'authorlink', 'increment_button':true},
{"field": "archiveurl"},
{"field": "archivedate"},
{"field": "location"},
{"field": "page", "tooltip":"cite-page-tooltip"},
{"field": "pages", "autofillprop":"pages", "tooltip":"cite-pages-tooltip"},
{"field": "language", "autofillprop":"language"},
{"field": "format"},
{"field": "doi", "autofillid":"doi", "autofillprop":"doi"},
{"field": "date", "autofillprop":"date"},
{"field": "quote"},
{"field": "url-status", "tooltip":"cite-urlstatus-tooltip"}
]);

new citeTemplate('cite news', 'news',
[ // Basic fields
{"field": "last<N>", "autofillprop":"last-incr", 'increment_group':'author'},
{"field": "first<N>", "autofillprop":"first-incr", 'increment_group':'author', 'increment_button':true}, 
{"field": "title", "autofillprop":"title"},
{"field": "url", "autofillid":"url"},
{"field": "accessdate"},
{"field": "work", "tooltip":"cite-work-tooltip", "autofillprop":"journal"},
{"field": "agency"},
{"field": "issue"},
{"field": "publisher", "autofillprop":"publisher"},
{"field": "date", "autofillprop":"date"},
{"field": "ref", "tooltip":"cite-ref-tooltip"}
],
[ // Expanded fields
{"field": "author<N>", 'increment_group':'author_alt', 'increment_button':true},
{"field": "authorlink<N>", "tooltip":"cite-authorlink-tooltip", 'increment_group':'authorlink', 'increment_button':true},
{"field": "archiveurl"},
{"field": "archivedate"},
{"field": "location"},
{"field": "page", "tooltip":"cite-page-tooltip"},
{"field": "pages", "autofillprop":"pages", "tooltip":"cite-pages-tooltip"},
{"field": "language", "autofillprop":"language"},
{"field": "format"},
{"field": "doi", "autofillid":"doi", "autofillprop":"doi"},
{"field": "quote"}
]);

new citeTemplate('cite book', 'book',
[ // Basic fields
{"field": "last<N>", "autofillprop":"last-incr", 'increment_group':'author'},
{"field": "first<N>", "autofillprop":"first-incr", 'increment_group':'author', 'increment_button':true}, 
{"field": "title", "autofillprop":"title"},
{"field": "date", "autofillprop":"year"},
{"field": "publisher", "autofillprop":"publisher"},
{"field": "location", "autofillprop":"location"},
{"field": "isbn", "autofillid":"isbn", "autofillprop":"isbn"},
{"field": "page", "tooltip":"cite-page-tooltip"},
{"field": "pages", "autofillprop":"pages", "tooltip":"cite-pages-tooltip"},
{"field": "edition", "autofillprop":"edition"},
{"field": "url", "autofillid":"url"},
{"field": "accessdate"},
{"field": "ref", "tooltip":"cite-ref-tooltip"}

],
[ // Expanded fields
{"field": "author<N>", 'increment_group':'author_alt', 'increment_button':true},
{"field": "authorlink<N>", "tooltip":"cite-authorlink-tooltip", 'increment_group':'authorlink', 'increment_button':true},
{"field": "editor<N>-last", "increment_group":"editor"},
{"field": "editor<N>-first", "increment_group":"editor", "increment_button":true},
{"field": "editor<N>-link", 'increment_group':'editorlink', 'increment_button':true},
{"field": "archiveurl"},
{"field": "archivedate"},
{"field": "language", "autofillprop":"language"},
{"field": "format"},
{"field": "chapter", "autofillprop":"chapter"},
{"field": "quote"}
]);

new citeTemplate('cite journal', 'journal',
[ // Basic fields
{"field": "last<N>", "autofillprop":"last-incr", 'increment_group':'author'},
{"field": "first<N>", "autofillprop":"first-incr", 'increment_group':'author', 'increment_button':true}, 
{"field": "title", "autofillprop":"title"},
{"field": "journal", "autofillprop":"journal"},
{"field": "date", "autofillprop":"date"},
{"field": "volume", "autofillprop":"volume"},
{"field": "issue", "autofillprop":"issue"},
{"field": "page", "tooltip":"cite-page-tooltip"},
{"field": "pages", "autofillprop":"pages", "tooltip":"cite-pages-tooltip"},
{"field": "doi", "autofillid":"doi", "autofillprop":"doi"},
{"field": "pmid", "autofillid":"pmid"},
{"field": "url", "autofillid":"url"},
{"field": "accessdate"},
{"field": "ref", "tooltip":"cite-ref-tooltip"},
],
[ // Expanded fields
{"field": "author<N>", 'increment_group':'author_alt', 'increment_button':true},
{"field": "authorlink<N>", "tooltip":"cite-authorlink-tooltip", 'increment_group':'authorlink', 'increment_button':true},
{"field": "editor<N>-last", "increment_group":"editor"},
{"field": "editor<N>-first", "increment_group":"editor", "increment_button":true},
{"field": "editor<N>-link", 'increment_group':'editorlink', 'increment_button':true},
{"field": "series"},
{"field": "at", "tooltip":"cite-at-tooltip"},
{"field": "trans-title"},
{"field": "publisher", "autofillprop":"publisher"},
{"field": "location"},
{"field": "language", "autofillprop":"language"},
{"field": "format"},
{"field": "issn", "autofillprop":"issn"},
{"field": "pmc"},
{"field": "oclc"},
{"field": "bibcode"},
{"field": "id"},
{"field": "quote"},
{"field": "postscript", "tooltip":"cite-postscript-tooltip"}
]);

new citeErrorCheck({'type':'reflist', 'testname':'samecontent', 'desc': 'cite-samecontent-desc',
'func': function(reflist) {
  var errors = [];
  var refs2 = [];
  for(var i=0; i<reflist.length; i++) {
    if (!reflist[i].shorttag) {
      if ($.inArray(reflist[i].content, refs2) != -1) {
        if ($.inArray(reflist[i].content, errors) == -1) {
          errors.push(reflist[i].content);
        }
      } else {
        refs2.push(reflist[i].content);
      }
    }
  }
  ret = [];
  for(var j=0; j<errors.length; j++) {
    ret.push({'msg':'cite-samecontent-error', 'err':errors[j]});
  }
  return ret;
}}
);

new citeErrorCheck({'type':'reflist', 'testname':'repeated', 'desc':'cite-repeated-desc',
'func': function(reflist) {
  var errors = [];
  var refs2 = [];
  for(var i=0; i<reflist.length; i++) {
    if (!reflist[i].shorttag && reflist[i].refname) {
      if ($.inArray(reflist[i].refname, refs2) != -1) {
        if ($.inArray(reflist[i].refname, errors) == -1) {
          errors.push(reflist[i].refname);
        }
      } else {
        refs2.push(reflist[i].refname);
      }
    }
  }
  ret = [];
  for(var j=0; j<errors.length; j++) {
    ret.push({'msg':'cite-repeated-error', 'err':errors[j]});
  }
  return ret;
}}
);

new citeErrorCheck({'type':'reflist', 'testname':'undefined', 'desc':'cite-undefined-desc',
'func': function(reflist) {
  var errors = [];
  var longrefs = [];
  for(var i=0; i<reflist.length; i++) {
    if (!reflist[i].shorttag && reflist[i].refname) {
      longrefs.push(reflist[i].refname);
    }
  }
  for(var j=0; i<reflist.length; j++) {
    if (reflist[i].shorttag && $.inArray(reflist[i].refname, errors) == -1 && $.inArray(reflist[i].refname, longrefs) == -1) {
      errors.push(reflist[i].refname);
    }
  }
  ret = [];
  for(var j=0; j<errors.length; j++) {
    ret.push({'msg':'cite-undefined-error', 'err':errors[j]});
  }
  return ret;
}}
);

CiteTB.init();