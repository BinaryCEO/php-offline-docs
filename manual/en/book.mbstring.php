<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Multibyte String - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/book.mbstring.php">
 <link rel="shorturl" href="https://www.php.net/mbstring">
 <link rel="alternate" href="https://www.php.net/mbstring" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.international.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.intl-is-failure.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.mbstring.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.mbstring.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.mbstring.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.mbstring.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.mbstring.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.mbstring.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.mbstring.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.mbstring.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.mbstring.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.mbstring.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.mbstring.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.mbstring.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Multibyte String" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Multibyte String - Manual" />
<meta name="twitter:description" content="Multibyte String" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Multibyte String - Manual" />
<meta itemprop="description" content="Multibyte String" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Multibyte String" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="intro.mbstring.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.intl-is-failure.php">
          &laquo; intl_is_failure        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/book.mbstring.php' selected="selected">English</option>
            <option value='de/book.mbstring.php'>German</option>
            <option value='es/book.mbstring.php'>Spanish</option>
            <option value='fr/book.mbstring.php'>French</option>
            <option value='it/book.mbstring.php'>Italian</option>
            <option value='ja/book.mbstring.php'>Japanese</option>
            <option value='pt_BR/book.mbstring.php'>Brazilian Portuguese</option>
            <option value='ru/book.mbstring.php'>Russian</option>
            <option value='tr/book.mbstring.php'>Turkish</option>
            <option value='uk/book.mbstring.php'>Ukrainian</option>
            <option value='zh/book.mbstring.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.mbstring" class="book">
 
 <h1 class="title">Multibyte String</h1> 
 
 
 
 
 
 







 




 

 



 






 







 





 







 







 


 





<ul class="chunklist chunklist_book"><li><a href="intro.mbstring.php">Introduction</a></li><li><a href="mbstring.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="mbstring.installation.php">Installation</a></li><li><a href="mbstring.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="mbstring.constants.php">Predefined Constants</a></li><li><a href="mbstring.encodings.php">Summaries of supported encodings</a></li><li><a href="mbstring.ja-basic.php">Basics of Japanese multi-byte encodings</a></li><li><a href="mbstring.http.php">HTTP Input and Output</a></li><li><a href="mbstring.supported-encodings.php">Supported Character Encodings</a></li><li><a href="mbstring.overload.php">Function Overloading Feature</a></li><li><a href="mbstring.php4.req.php">PHP Character Encoding Requirements</a></li><li><a href="ref.mbstring.php">Multibyte String Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.mb-check-encoding.php">mb_check_encoding</a> — Check if strings are valid for the specified encoding</li><li><a href="function.mb-chr.php">mb_chr</a> — Return character by Unicode code point value</li><li><a href="function.mb-convert-case.php">mb_convert_case</a> — Perform case folding on a string</li><li><a href="function.mb-convert-encoding.php">mb_convert_encoding</a> — Convert a string from one character encoding to another</li><li><a href="function.mb-convert-kana.php">mb_convert_kana</a> — Convert &quot;kana&quot; one from another (&quot;zen-kaku&quot;, &quot;han-kaku&quot; and more)</li><li><a href="function.mb-convert-variables.php">mb_convert_variables</a> — Convert character code in variable(s)</li><li><a href="function.mb-decode-mimeheader.php">mb_decode_mimeheader</a> — Decode string in MIME header field</li><li><a href="function.mb-decode-numericentity.php">mb_decode_numericentity</a> — Decode HTML numeric string reference to character</li><li><a href="function.mb-detect-encoding.php">mb_detect_encoding</a> — Detect character encoding</li><li><a href="function.mb-detect-order.php">mb_detect_order</a> — Set/Get character encoding detection order</li><li><a href="function.mb-encode-mimeheader.php">mb_encode_mimeheader</a> — Encode string for MIME header</li><li><a href="function.mb-encode-numericentity.php">mb_encode_numericentity</a> — Encode character to HTML numeric string reference</li><li><a href="function.mb-encoding-aliases.php">mb_encoding_aliases</a> — Get aliases of a known encoding type</li><li><a href="function.mb-ereg.php">mb_ereg</a> — Regular expression match with multibyte support</li><li><a href="function.mb-ereg-match.php">mb_ereg_match</a> — Regular expression match for multibyte string</li><li><a href="function.mb-ereg-replace.php">mb_ereg_replace</a> — Replace regular expression with multibyte support</li><li><a href="function.mb-ereg-replace-callback.php">mb_ereg_replace_callback</a> — Perform a regular expression search and replace with multibyte support using a callback</li><li><a href="function.mb-ereg-search.php">mb_ereg_search</a> — Multibyte regular expression match for predefined multibyte string</li><li><a href="function.mb-ereg-search-getpos.php">mb_ereg_search_getpos</a> — Returns start point for next regular expression match</li><li><a href="function.mb-ereg-search-getregs.php">mb_ereg_search_getregs</a> — Retrieve the result from the last multibyte regular expression match</li><li><a href="function.mb-ereg-search-init.php">mb_ereg_search_init</a> — Setup string and regular expression for a multibyte regular expression match</li><li><a href="function.mb-ereg-search-pos.php">mb_ereg_search_pos</a> — Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string</li><li><a href="function.mb-ereg-search-regs.php">mb_ereg_search_regs</a> — Returns the matched part of a multibyte regular expression</li><li><a href="function.mb-ereg-search-setpos.php">mb_ereg_search_setpos</a> — Set start point of next regular expression match</li><li><a href="function.mb-eregi.php">mb_eregi</a> — Regular expression match ignoring case with multibyte support</li><li><a href="function.mb-eregi-replace.php">mb_eregi_replace</a> — Replace regular expression with multibyte support ignoring case</li><li><a href="function.mb-get-info.php">mb_get_info</a> — Get internal settings of mbstring</li><li><a href="function.mb-http-input.php">mb_http_input</a> — Detect HTTP input character encoding</li><li><a href="function.mb-http-output.php">mb_http_output</a> — Set/Get HTTP output character encoding</li><li><a href="function.mb-internal-encoding.php">mb_internal_encoding</a> — Set/Get internal character encoding</li><li><a href="function.mb-language.php">mb_language</a> — Set/Get current language</li><li><a href="function.mb-lcfirst.php">mb_lcfirst</a> — Make a string's first character lowercase</li><li><a href="function.mb-list-encodings.php">mb_list_encodings</a> — Returns an array of all supported encodings</li><li><a href="function.mb-ltrim.php">mb_ltrim</a> — Strip whitespace (or other characters) from the beginning of a string</li><li><a href="function.mb-ord.php">mb_ord</a> — Get Unicode code point of character</li><li><a href="function.mb-output-handler.php">mb_output_handler</a> — Callback function converts character encoding in output buffer</li><li><a href="function.mb-parse-str.php">mb_parse_str</a> — Parse GET/POST/COOKIE data and set global variable</li><li><a href="function.mb-preferred-mime-name.php">mb_preferred_mime_name</a> — Get MIME charset string</li><li><a href="function.mb-regex-encoding.php">mb_regex_encoding</a> — Set/Get character encoding for multibyte regex</li><li><a href="function.mb-regex-set-options.php">mb_regex_set_options</a> — Set/Get the default options for mbregex functions</li><li><a href="function.mb-rtrim.php">mb_rtrim</a> — Strip whitespace (or other characters) from the end of a string</li><li><a href="function.mb-scrub.php">mb_scrub</a> — Replace ill-formed byte sequences with the substitute character</li><li><a href="function.mb-send-mail.php">mb_send_mail</a> — Send encoded mail</li><li><a href="function.mb-split.php">mb_split</a> — Split multibyte string using regular expression</li><li><a href="function.mb-str-pad.php">mb_str_pad</a> — Pad a multibyte string to a certain length with another multibyte string</li><li><a href="function.mb-str-split.php">mb_str_split</a> — Given a multibyte string, return an array of its characters</li><li><a href="function.mb-strcut.php">mb_strcut</a> — Get part of string</li><li><a href="function.mb-strimwidth.php">mb_strimwidth</a> — Get truncated string with specified width</li><li><a href="function.mb-stripos.php">mb_stripos</a> — Finds position of first occurrence of a string within another, case insensitive</li><li><a href="function.mb-stristr.php">mb_stristr</a> — Finds first occurrence of a string within another, case insensitive</li><li><a href="function.mb-strlen.php">mb_strlen</a> — Get string length</li><li><a href="function.mb-strpos.php">mb_strpos</a> — Find position of first occurrence of string in a string</li><li><a href="function.mb-strrchr.php">mb_strrchr</a> — Finds the last occurrence of a character in a string within another</li><li><a href="function.mb-strrichr.php">mb_strrichr</a> — Finds the last occurrence of a character in a string within another, case insensitive</li><li><a href="function.mb-strripos.php">mb_strripos</a> — Finds position of last occurrence of a string within another, case insensitive</li><li><a href="function.mb-strrpos.php">mb_strrpos</a> — Find position of last occurrence of a string in a string</li><li><a href="function.mb-strstr.php">mb_strstr</a> — Finds first occurrence of a string within another</li><li><a href="function.mb-strtolower.php">mb_strtolower</a> — Make a string lowercase</li><li><a href="function.mb-strtoupper.php">mb_strtoupper</a> — Make a string uppercase</li><li><a href="function.mb-strwidth.php">mb_strwidth</a> — Return width of string</li><li><a href="function.mb-substitute-character.php">mb_substitute_character</a> — Set/Get substitution character</li><li><a href="function.mb-substr.php">mb_substr</a> — Get part of string</li><li><a href="function.mb-substr-count.php">mb_substr_count</a> — Count the number of substring occurrences</li><li><a href="function.mb-trim.php">mb_trim</a> — Strip whitespace (or other characters) from the beginning and end of a string</li><li><a href="function.mb-ucfirst.php">mb_ucfirst</a> — Make a string's first character uppercase</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.mbstring%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.mbstring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.mbstring.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.international.php">Human Language and Character Encoding Support</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.enchant.php" title="Enchant">Enchant</a>
                        </li>
                                                <li class="">
                            <a href="book.gender.php" title="Gender">Gender</a>
                        </li>
                                                <li class="">
                            <a href="book.gettext.php" title="Gettext">Gettext</a>
                        </li>
                                                <li class="">
                            <a href="book.iconv.php" title="iconv">iconv</a>
                        </li>
                                                <li class="">
                            <a href="book.intl.php" title="intl">intl</a>
                        </li>
                                                <li class="current">
                            <a href="book.mbstring.php" title="Multibyte String">Multibyte String</a>
                        </li>
                                                <li class="">
                            <a href="book.pspell.php" title="Pspell">Pspell</a>
                        </li>
                                                <li class="">
                            <a href="book.recode.php" title="Recode">Recode</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
