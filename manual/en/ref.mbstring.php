<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Multibyte String Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.mbstring.php">
 <link rel="shorturl" href="https://www.php.net/mbstring">
 <link rel="alternate" href="https://www.php.net/mbstring" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/mbstring.php4.req.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mb-check-encoding.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.mbstring.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.mbstring.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.mbstring.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.mbstring.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.mbstring.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.mbstring.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.mbstring.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.mbstring.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.mbstring.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.mbstring.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.mbstring.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Multibyte String Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Multibyte String Functions - Manual" />
<meta name="twitter:description" content="Multibyte String Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Multibyte String Functions - Manual" />
<meta itemprop="description" content="Multibyte String Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Multibyte String Functions" />

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
        <a href="function.mb-check-encoding.php">
          mb_check_encoding &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mbstring.php4.req.php">
          &laquo; PHP Character Encoding Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.mbstring.php'>Multibyte String</a></li>      </ul>
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
            <option value='en/ref.mbstring.php' selected="selected">English</option>
            <option value='de/ref.mbstring.php'>German</option>
            <option value='es/ref.mbstring.php'>Spanish</option>
            <option value='fr/ref.mbstring.php'>French</option>
            <option value='it/ref.mbstring.php'>Italian</option>
            <option value='ja/ref.mbstring.php'>Japanese</option>
            <option value='pt_BR/ref.mbstring.php'>Brazilian Portuguese</option>
            <option value='ru/ref.mbstring.php'>Russian</option>
            <option value='tr/ref.mbstring.php'>Turkish</option>
            <option value='uk/ref.mbstring.php'>Ukrainian</option>
            <option value='zh/ref.mbstring.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.mbstring" class="reference">
  <h1 class="title">Multibyte String Functions</h1> 

  <div class="partintro">
    <h1 class="title">References</h1>
    <p class="para">
     Multibyte character encoding schemes and their related issues are
     fairly complicated, and are beyond the scope of this documentation.
     Please refer to the following URLs and other resources for further
     information regarding these topics.
     <ul class="itemizedlist">
      <li class="listitem">
       <p class="para">
        Unicode materials
       </p>
       <p class="para">
        <a href="http://www.unicode.org/" class="link external">&raquo;&nbsp;http://www.unicode.org/</a>
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        Japanese/Korean/Chinese character information
       </p>
       <p class="para">
        <a href="https://resources.oreilly.com/examples/9781565922242/blob/master/doc/cjk.inf" class="link external">&raquo;&nbsp;https://resources.oreilly.com/examples/9781565922242/blob/master/doc/cjk.inf</a>
       </p>
      </li>
     </ul>
    </p>
  </div>

 


































































































































































 







































































































































































 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.mb-check-encoding.php">mb_check_encoding</a> — Check if strings are valid for the specified encoding</li><li><a href="function.mb-chr.php">mb_chr</a> — Return character by Unicode code point value</li><li><a href="function.mb-convert-case.php">mb_convert_case</a> — Perform case folding on a string</li><li><a href="function.mb-convert-encoding.php">mb_convert_encoding</a> — Convert a string from one character encoding to another</li><li><a href="function.mb-convert-kana.php">mb_convert_kana</a> — Convert &quot;kana&quot; one from another (&quot;zen-kaku&quot;, &quot;han-kaku&quot; and more)</li><li><a href="function.mb-convert-variables.php">mb_convert_variables</a> — Convert character code in variable(s)</li><li><a href="function.mb-decode-mimeheader.php">mb_decode_mimeheader</a> — Decode string in MIME header field</li><li><a href="function.mb-decode-numericentity.php">mb_decode_numericentity</a> — Decode HTML numeric string reference to character</li><li><a href="function.mb-detect-encoding.php">mb_detect_encoding</a> — Detect character encoding</li><li><a href="function.mb-detect-order.php">mb_detect_order</a> — Set/Get character encoding detection order</li><li><a href="function.mb-encode-mimeheader.php">mb_encode_mimeheader</a> — Encode string for MIME header</li><li><a href="function.mb-encode-numericentity.php">mb_encode_numericentity</a> — Encode character to HTML numeric string reference</li><li><a href="function.mb-encoding-aliases.php">mb_encoding_aliases</a> — Get aliases of a known encoding type</li><li><a href="function.mb-ereg.php">mb_ereg</a> — Regular expression match with multibyte support</li><li><a href="function.mb-ereg-match.php">mb_ereg_match</a> — Regular expression match for multibyte string</li><li><a href="function.mb-ereg-replace.php">mb_ereg_replace</a> — Replace regular expression with multibyte support</li><li><a href="function.mb-ereg-replace-callback.php">mb_ereg_replace_callback</a> — Perform a regular expression search and replace with multibyte support using a callback</li><li><a href="function.mb-ereg-search.php">mb_ereg_search</a> — Multibyte regular expression match for predefined multibyte string</li><li><a href="function.mb-ereg-search-getpos.php">mb_ereg_search_getpos</a> — Returns start point for next regular expression match</li><li><a href="function.mb-ereg-search-getregs.php">mb_ereg_search_getregs</a> — Retrieve the result from the last multibyte regular expression match</li><li><a href="function.mb-ereg-search-init.php">mb_ereg_search_init</a> — Setup string and regular expression for a multibyte regular expression match</li><li><a href="function.mb-ereg-search-pos.php">mb_ereg_search_pos</a> — Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string</li><li><a href="function.mb-ereg-search-regs.php">mb_ereg_search_regs</a> — Returns the matched part of a multibyte regular expression</li><li><a href="function.mb-ereg-search-setpos.php">mb_ereg_search_setpos</a> — Set start point of next regular expression match</li><li><a href="function.mb-eregi.php">mb_eregi</a> — Regular expression match ignoring case with multibyte support</li><li><a href="function.mb-eregi-replace.php">mb_eregi_replace</a> — Replace regular expression with multibyte support ignoring case</li><li><a href="function.mb-get-info.php">mb_get_info</a> — Get internal settings of mbstring</li><li><a href="function.mb-http-input.php">mb_http_input</a> — Detect HTTP input character encoding</li><li><a href="function.mb-http-output.php">mb_http_output</a> — Set/Get HTTP output character encoding</li><li><a href="function.mb-internal-encoding.php">mb_internal_encoding</a> — Set/Get internal character encoding</li><li><a href="function.mb-language.php">mb_language</a> — Set/Get current language</li><li><a href="function.mb-lcfirst.php">mb_lcfirst</a> — Make a string's first character lowercase</li><li><a href="function.mb-list-encodings.php">mb_list_encodings</a> — Returns an array of all supported encodings</li><li><a href="function.mb-ltrim.php">mb_ltrim</a> — Strip whitespace (or other characters) from the beginning of a string</li><li><a href="function.mb-ord.php">mb_ord</a> — Get Unicode code point of character</li><li><a href="function.mb-output-handler.php">mb_output_handler</a> — Callback function converts character encoding in output buffer</li><li><a href="function.mb-parse-str.php">mb_parse_str</a> — Parse GET/POST/COOKIE data and set global variable</li><li><a href="function.mb-preferred-mime-name.php">mb_preferred_mime_name</a> — Get MIME charset string</li><li><a href="function.mb-regex-encoding.php">mb_regex_encoding</a> — Set/Get character encoding for multibyte regex</li><li><a href="function.mb-regex-set-options.php">mb_regex_set_options</a> — Set/Get the default options for mbregex functions</li><li><a href="function.mb-rtrim.php">mb_rtrim</a> — Strip whitespace (or other characters) from the end of a string</li><li><a href="function.mb-scrub.php">mb_scrub</a> — Replace ill-formed byte sequences with the substitute character</li><li><a href="function.mb-send-mail.php">mb_send_mail</a> — Send encoded mail</li><li><a href="function.mb-split.php">mb_split</a> — Split multibyte string using regular expression</li><li><a href="function.mb-str-pad.php">mb_str_pad</a> — Pad a multibyte string to a certain length with another multibyte string</li><li><a href="function.mb-str-split.php">mb_str_split</a> — Given a multibyte string, return an array of its characters</li><li><a href="function.mb-strcut.php">mb_strcut</a> — Get part of string</li><li><a href="function.mb-strimwidth.php">mb_strimwidth</a> — Get truncated string with specified width</li><li><a href="function.mb-stripos.php">mb_stripos</a> — Finds position of first occurrence of a string within another, case insensitive</li><li><a href="function.mb-stristr.php">mb_stristr</a> — Finds first occurrence of a string within another, case insensitive</li><li><a href="function.mb-strlen.php">mb_strlen</a> — Get string length</li><li><a href="function.mb-strpos.php">mb_strpos</a> — Find position of first occurrence of string in a string</li><li><a href="function.mb-strrchr.php">mb_strrchr</a> — Finds the last occurrence of a character in a string within another</li><li><a href="function.mb-strrichr.php">mb_strrichr</a> — Finds the last occurrence of a character in a string within another, case insensitive</li><li><a href="function.mb-strripos.php">mb_strripos</a> — Finds position of last occurrence of a string within another, case insensitive</li><li><a href="function.mb-strrpos.php">mb_strrpos</a> — Find position of last occurrence of a string in a string</li><li><a href="function.mb-strstr.php">mb_strstr</a> — Finds first occurrence of a string within another</li><li><a href="function.mb-strtolower.php">mb_strtolower</a> — Make a string lowercase</li><li><a href="function.mb-strtoupper.php">mb_strtoupper</a> — Make a string uppercase</li><li><a href="function.mb-strwidth.php">mb_strwidth</a> — Return width of string</li><li><a href="function.mb-substitute-character.php">mb_substitute_character</a> — Set/Get substitution character</li><li><a href="function.mb-substr.php">mb_substr</a> — Get part of string</li><li><a href="function.mb-substr-count.php">mb_substr_count</a> — Count the number of substring occurrences</li><li><a href="function.mb-trim.php">mb_trim</a> — Strip whitespace (or other characters) from the beginning and end of a string</li><li><a href="function.mb-ucfirst.php">mb_ucfirst</a> — Make a string's first character uppercase</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.mbstring%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.mbstring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.mbstring.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109937">  <div class="votes">
    <div id="Vu109937">
    <a href="/manual/vote-note.php?id=109937&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109937">
    <a href="/manual/vote-note.php?id=109937&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109937" title="68% like this...">
    69
    </div>
  </div>
  <a href="#109937" class="name">
  <strong class="user"><em>deceze at gmail dot com</em></strong></a><a class="genanchor" href="#109937"> &para;</a><div class="date" title="2012-09-04 10:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109937">
<div class="phpcode"><code><span class="html">Please note that all the discussion about mb_str_replace in the comments is pretty pointless. str_replace works just fine with multibyte strings:<br /><br /><span class="default">&lt;?php<br /><br />$string  </span><span class="keyword">= </span><span class="string">'漢字はユニコード'</span><span class="keyword">;<br /></span><span class="default">$needle  </span><span class="keyword">= </span><span class="string">'は'</span><span class="keyword">;<br /></span><span class="default">$replace </span><span class="keyword">= </span><span class="string">'Foo'</span><span class="keyword">;<br /><br />echo </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br /></span><span class="comment">// outputs: 漢字Fooユニコード<br /><br /></span><span class="default">?&gt;<br /></span><br />The usual problem is that the string is evaluated as binary string, meaning PHP is not aware of encodings at all. Problems arise if you are getting a value "from outside" somewhere (database, POST request) and the encoding of the needle and the haystack is not the same. That typically means the source code is not saved in the same encoding as you are receiving "from outside". Therefore the binary representations don't match and nothing happens.</span></code></div>
  </div>
 </div>
  <div class="note" id="50298">  <div class="votes">
    <div id="Vu50298">
    <a href="/manual/vote-note.php?id=50298&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50298">
    <a href="/manual/vote-note.php?id=50298&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50298" title="82% like this...">
    19
    </div>
  </div>
  <a href="#50298" class="name">
  <strong class="user"><em>Eugene Murai</em></strong></a><a class="genanchor" href="#50298"> &para;</a><div class="date" title="2005-02-23 10:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50298">
<div class="phpcode"><code><span class="html">PHP can input and output Unicode, but a little different from what Microsoft means: when Microsoft says "Unicode", it unexplicitly means little-endian UTF-16 with BOM(FF FE = chr(255).chr(254)), whereas PHP's "UTF-16" means big-endian with BOM. For this reason, PHP does not seem to be able to output Unicode CSV file for Microsoft Excel. Solving this problem is quite simple: just put BOM infront of UTF-16LE string.<br /><br />Example:<br /><br />$unicode_str_for_Excel = chr(255).chr(254).mb_convert_encoding( $utf8_str, 'UTF-16LE', 'UTF-8');</span></code></div>
  </div>
 </div>
  <div class="note" id="73889">  <div class="votes">
    <div id="Vu73889">
    <a href="/manual/vote-note.php?id=73889&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73889">
    <a href="/manual/vote-note.php?id=73889&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73889" title="80% like this...">
    15
    </div>
  </div>
  <a href="#73889" class="name">
  <strong class="user"><em>mdoocy at u dot washington dot edu</em></strong></a><a class="genanchor" href="#73889"> &para;</a><div class="date" title="2007-03-14 10:30"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73889">
<div class="phpcode"><code><span class="html">Note that some of the multi-byte functions run in O(n) time, rather than constant time as is the case for their single-byte equivalents. This includes any functionality requiring access at a specific index, since random access is not possible in a string whose number of bytes will not necessarily match the number of characters. Affected functions include: mb_substr(), mb_strstr(), mb_strcut(), mb_strpos(), etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="90611">  <div class="votes">
    <div id="Vu90611">
    <a href="/manual/vote-note.php?id=90611&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90611">
    <a href="/manual/vote-note.php?id=90611&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90611" title="76% like this...">
    9
    </div>
  </div>
  <a href="#90611" class="name">
  <strong class="user"><em>mitgath at gmail dot com</em></strong></a><a class="genanchor" href="#90611"> &para;</a><div class="date" title="2009-04-30 06:26"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90611">
<div class="phpcode"><code><span class="html">according to:
<br /><a href="http://bugs.php.net/bug.php?id=21317" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=21317</a>
<br />here's missing function
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">mb_str_pad </span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$pad_length</span><span class="keyword">, </span><span class="default">$pad_string</span><span class="keyword">, </span><span class="default">$pad_style</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">=</span><span class="string">"UTF-8"</span><span class="keyword">) {
<br />   return </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,
<br /></span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)-</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">$encoding</span><span class="keyword">)+</span><span class="default">$pad_length</span><span class="keyword">, </span><span class="default">$pad_string</span><span class="keyword">, </span><span class="default">$pad_style</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113569">  <div class="votes">
    <div id="Vu113569">
    <a href="/manual/vote-note.php?id=113569&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113569">
    <a href="/manual/vote-note.php?id=113569&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113569" title="71% like this...">
    12
    </div>
  </div>
  <a href="#113569" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#113569"> &para;</a><div class="date" title="2013-10-30 11:16"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113569">
<div class="phpcode"><code><span class="html">Yet another single-line mb_trim() function<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mb_trim</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$trim_chars </span><span class="keyword">= </span><span class="string">'\s'</span><span class="keyword">){<br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/^['</span><span class="keyword">.</span><span class="default">$trim_chars</span><span class="keyword">.</span><span class="string">']*(?U)(.*)['</span><span class="keyword">.</span><span class="default">$trim_chars</span><span class="keyword">.</span><span class="string">']*$/u'</span><span class="keyword">, </span><span class="string">'\\1'</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">);<br />}<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">'           "some text."      '</span><span class="keyword">;<br />echo </span><span class="default">mb_trim</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'\s".'</span><span class="keyword">);<br /></span><span class="comment">//some text<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115050">  <div class="votes">
    <div id="Vu115050">
    <a href="/manual/vote-note.php?id=115050&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115050">
    <a href="/manual/vote-note.php?id=115050&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115050" title="75% like this...">
    4
    </div>
  </div>
  <a href="#115050" class="name">
  <strong class="user"><em>mattr at telebody dot com</em></strong></a><a class="genanchor" href="#115050"> &para;</a><div class="date" title="2014-05-19 07:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115050">
<div class="phpcode"><code><span class="html">A brief note on Daniel Rhodes' mb_punctuation_trim().<br />The regular expression modifier u does not mean ungreedy, rather it means the pattern is in UTF-8 encoding. Instead the U modifier should be used to get ungreedy behavior. (I have not otherwise tested his code.)<br />See <a href="http://php.net/manual/en/reference.pcre.pattern.modifiers.php" rel="nofollow" target="_blank">http://php.net/manual/en/reference.pcre.pattern.modifiers.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="122872">  <div class="votes">
    <div id="Vu122872">
    <a href="/manual/vote-note.php?id=122872&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122872">
    <a href="/manual/vote-note.php?id=122872&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122872" title="72% like this...">
    5
    </div>
  </div>
  <a href="#122872" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#122872"> &para;</a><div class="date" title="2018-06-23 01:06"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122872">
<div class="phpcode"><code><span class="html">SOME multibyte encodings can safely be used in str_replace() and the like, others cannot. It's not enough to ensure that all the strings involved use the same encoding: obviously they have to, but it's not enough. It has to be the right sort of encoding.<br /><br />UTF-8 is one of the safe ones, because it was designed to be unambiguous about where each encoded character begins and ends in the string of bytes that makes up the encoded text. Some encodings are not safe: the last bytes of one character in a text followed by the first bytes of the next character may together make a valid character. str_replace() knows nothing about "characters", "character encodings" or "encoded text". It only knows about the string of bytes. To str_replace(), two adjacent characters with two-byte encodings just looks like a sequence of four bytes and it's not going to know it shouldn't try to match the middle two bytes.<br /><br />While real-world examples can be found of str_replace() mangling text, it can be illustrated by using the HTML-ENTITIES encoding. It's not one of the safe ones. All of the strings being passed to str_replace() are valid HTML-ENTITIES-encoded text so the "all inputs use the same encoding" rule is satisfied.<br /><br />The text is "x&lt;y". It is represented by the byte string [78 26 6c 74 3b 79]. Note that the text has three characters, but the string has six bytes.<br /><br /><span class="default">&lt;?php<br /><br />$string </span><span class="keyword">= </span><span class="string">'x&amp;lt;y'</span><span class="keyword">;<br /></span><span class="default">mb_internal_encoding</span><span class="keyword">(</span><span class="string">'HTML-ENTITIES'</span><span class="keyword">);<br /><br />echo </span><span class="string">"Text length: "</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">), </span><span class="string">"\tString length: "</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">), </span><span class="string">" ... "</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// Three characters, six bytes; the text reads "x&lt;y".<br /><br /></span><span class="default">$newstring </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'l'</span><span class="keyword">, </span><span class="string">'g'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />echo </span><span class="string">"Text length: "</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$newstring</span><span class="keyword">), </span><span class="string">"\tString length: "</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$newstring</span><span class="keyword">), </span><span class="string">" ... "</span><span class="keyword">, </span><span class="default">$newstring</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// Three characters, six bytes, but now the text reads "x&gt;y"; the wrong characters have changed.<br /><br /></span><span class="default">$newstring </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">';'</span><span class="keyword">, </span><span class="string">':'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />echo </span><span class="string">"Text length: "</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$newstring</span><span class="keyword">), </span><span class="string">"\tString length: "</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$newstring</span><span class="keyword">), </span><span class="string">" ... "</span><span class="keyword">, </span><span class="default">$newstring</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// Now even the length of the text is wrong and the text is trashed.<br /><br /></span><span class="default">?&gt;<br /></span><br />Even though neither 'l' nor ';' appear in the text "x&lt;y", str_replace() still found and changed bytes. In one case, it changed the text to "x&gt;y" and in the other it broke the encoding completely.<br /><br />One more reason to use UTF-8 if you can, I guess.</span></code></div>
  </div>
 </div>
  <div class="note" id="94220">  <div class="votes">
    <div id="Vu94220">
    <a href="/manual/vote-note.php?id=94220&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94220">
    <a href="/manual/vote-note.php?id=94220&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94220" title="69% like this...">
    9
    </div>
  </div>
  <a href="#94220" class="name">
  <strong class="user"><em>roydukkey at roydukkey dot com</em></strong></a><a class="genanchor" href="#94220"> &para;</a><div class="date" title="2009-10-22 09:31"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94220">
<div class="phpcode"><code><span class="html">This would be one way to create a multibyte substr_replace function
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">mb_substr_replace</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$posOpen</span><span class="keyword">, </span><span class="default">$posClose</span><span class="keyword">) {
<br />        return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$posOpen</span><span class="keyword">).</span><span class="default">$replace</span><span class="keyword">.</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">$posClose</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87047">  <div class="votes">
    <div id="Vu87047">
    <a href="/manual/vote-note.php?id=87047&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87047">
    <a href="/manual/vote-note.php?id=87047&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87047" title="68% like this...">
    6
    </div>
  </div>
  <a href="#87047" class="name">
  <strong class="user"><em>Ben XO</em></strong></a><a class="genanchor" href="#87047"> &para;</a><div class="date" title="2008-11-16 05:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87047">
<div class="phpcode"><code><span class="html">PHP5 has no mb_trim(), so here's one I made. It work just as trim(), but with the added bonus of PCRE character classes (including, of course, all the useful Unicode ones such as \pZ).
<br />
<br />Unlike other approaches that I've seen to this problem, I wanted to emulate the full functionality of trim() - in particular, the ability to customise the character list.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="comment">/**
<br />     * Trim characters from either (or both) ends of a string in a way that is
<br />     * multibyte-friendly.
<br />     *
<br />     * Mostly, this behaves exactly like trim() would: for example supplying 'abc' as
<br />     * the charlist will trim all 'a', 'b' and 'c' chars from the string, with, of
<br />     * course, the added bonus that you can put unicode characters in the charlist.
<br />     *
<br />     * We are using a PCRE character-class to do the trimming in a unicode-aware
<br />     * way, so we must escape ^, \, - and ] which have special meanings here.
<br />     * As you would expect, a single \ in the charlist is interpretted as
<br />     * "trim backslashes" (and duly escaped into a double-\ ). Under most circumstances
<br />     * you can ignore this detail.
<br />     *
<br />     * As a bonus, however, we also allow PCRE special character-classes (such as '\s')
<br />     * because they can be extremely useful when dealing with UCS. '\pZ', for example,
<br />     * matches every 'separator' character defined in Unicode, including non-breaking
<br />     * and zero-width spaces.
<br />     *
<br />     * It doesn't make sense to have two or more of the same character in a character
<br />     * class, therefore we interpret a double \ in the character list to mean a
<br />     * single \ in the regex, allowing you to safely mix normal characters with PCRE
<br />     * special classes.
<br />     *
<br />     * *Be careful* when using this bonus feature, as PHP also interprets backslashes
<br />     * as escape characters before they are even seen by the regex. Therefore, to
<br />     * specify '\\s' in the regex (which will be converted to the special character
<br />     * class '\s' for trimming), you will usually have to put *4* backslashes in the
<br />     * PHP code - as you can see from the default value of $charlist.
<br />     *
<br />     * @param string 
<br />     * @param charlist list of characters to remove from the ends of this string.
<br />     * @param boolean trim the left?
<br />     * @param boolean trim the right?
<br />     * @return String
<br />     */
<br />    </span><span class="keyword">function </span><span class="default">mb_trim</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$charlist</span><span class="keyword">=</span><span class="string">'\\\\s'</span><span class="keyword">, </span><span class="default">$ltrim</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">, </span><span class="default">$rtrim</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$both_ends </span><span class="keyword">= </span><span class="default">$ltrim </span><span class="keyword">&amp;&amp; </span><span class="default">$rtrim</span><span class="keyword">;
<br />
<br />        </span><span class="default">$char_class_inner </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(
<br />            array( </span><span class="string">'/[\^\-\]\\\]/S'</span><span class="keyword">, </span><span class="string">'/\\\{4}/S' </span><span class="keyword">),
<br />            array( </span><span class="string">'\\\\\\0'</span><span class="keyword">, </span><span class="string">'\\' </span><span class="keyword">),
<br />            </span><span class="default">$charlist
<br />        </span><span class="keyword">);
<br />
<br />        </span><span class="default">$work_horse </span><span class="keyword">= </span><span class="string">'[' </span><span class="keyword">. </span><span class="default">$char_class_inner </span><span class="keyword">. </span><span class="string">']+'</span><span class="keyword">;
<br />        </span><span class="default">$ltrim </span><span class="keyword">&amp;&amp; </span><span class="default">$left_pattern </span><span class="keyword">= </span><span class="string">'^' </span><span class="keyword">. </span><span class="default">$work_horse</span><span class="keyword">;
<br />        </span><span class="default">$rtrim </span><span class="keyword">&amp;&amp; </span><span class="default">$right_pattern </span><span class="keyword">= </span><span class="default">$work_horse </span><span class="keyword">. </span><span class="string">'$'</span><span class="keyword">;
<br />
<br />        if(</span><span class="default">$both_ends</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$pattern_middle </span><span class="keyword">= </span><span class="default">$left_pattern </span><span class="keyword">. </span><span class="string">'|' </span><span class="keyword">. </span><span class="default">$right_pattern</span><span class="keyword">;
<br />        }
<br />        elseif(</span><span class="default">$ltrim</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$pattern_middle </span><span class="keyword">= </span><span class="default">$left_pattern</span><span class="keyword">;
<br />        }
<br />        else
<br />        {
<br />            </span><span class="default">$pattern_middle </span><span class="keyword">= </span><span class="default">$right_pattern</span><span class="keyword">;
<br />        }
<br />
<br />        return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/</span><span class="default">$pattern_middle</span><span class="string">/usSD"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">) );
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120120">  <div class="votes">
    <div id="Vu120120">
    <a href="/manual/vote-note.php?id=120120&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120120">
    <a href="/manual/vote-note.php?id=120120&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120120" title="65% like this...">
    6
    </div>
  </div>
  <a href="#120120" class="name">
  <strong class="user"><em>php at kamiware dot org</em></strong></a><a class="genanchor" href="#120120"> &para;</a><div class="date" title="2016-11-05 10:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120120">
<div class="phpcode"><code><span class="html">str_replace is NOT multi-bite safe.<br /><br />This Ukrainian word gives a bug when used in the next code: відео<br /><br />$rubishcharacters='[#|\[{}\]´`≠,;.:-\\_&lt;&gt;=*+"\'?()!§$&amp;%';<br />$searchstring='відео';<br /><br />$result = str_replace(str_split($rubishcharacters), ' ', $searchstring);</span></code></div>
  </div>
 </div>
  <div class="note" id="115080">  <div class="votes">
    <div id="Vu115080">
    <a href="/manual/vote-note.php?id=115080&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115080">
    <a href="/manual/vote-note.php?id=115080&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115080" title="66% like this...">
    4
    </div>
  </div>
  <a href="#115080" class="name">
  <strong class="user"><em>treilor at gmail dot com</em></strong></a><a class="genanchor" href="#115080"> &para;</a><div class="date" title="2014-05-23 08:43"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115080">
<div class="phpcode"><code><span class="html">A small note for those who will follow rawsrc at gmail dot com's advice: mb_split uses regular expressions, in which case it may make sense to use built-in function mb_ereg_replace.</span></code></div>
  </div>
 </div>
  <div class="note" id="123948">  <div class="votes">
    <div id="Vu123948">
    <a href="/manual/vote-note.php?id=123948&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123948">
    <a href="/manual/vote-note.php?id=123948&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123948" title="66% like this...">
    2
    </div>
  </div>
  <a href="#123948" class="name">
  <strong class="user"><em>abidul dot rmdn at gmail dot com</em></strong></a><a class="genanchor" href="#123948"> &para;</a><div class="date" title="2019-06-18 10:16"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123948">
<div class="phpcode"><code><span class="html">Having to migrate to MB functions can be a bit of pain if you have a big project. it took us a while at my company but then we made a small script and explained it in a small blog.<br /><a href="https://link.medium.com/25w1LronCX" rel="nofollow" target="_blank">https://link.medium.com/25w1LronCX</a><br /><br />which makes it really easy to migrate to mb_ functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="113238">  <div class="votes">
    <div id="Vu113238">
    <a href="/manual/vote-note.php?id=113238&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113238">
    <a href="/manual/vote-note.php?id=113238&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113238" title="63% like this...">
    3
    </div>
  </div>
  <a href="#113238" class="name">
  <strong class="user"><em>Daniel Rhodes</em></strong></a><a class="genanchor" href="#113238"> &para;</a><div class="date" title="2013-09-16 02:55"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113238">
<div class="phpcode"><code><span class="html">Here's a cheap and cheeky function to remove leading and trailing *punctuation* (or more specifically "non-word characters") from a UTF-8 string in whatever language. (At least it works well enough for Japanese and English.)<br /><br />/**<br /> * Trim singlebyte and multibyte punctuation from the start and end of a string<br /> * <br /> * @author Daniel Rhodes<br /> * @note we want the first non-word grabbing to be greedy but then<br /> * @note we want the dot-star grabbing (before the last non-word grabbing)<br /> * @note to be ungreedy<br /> * <br /> * @param string $string input string in UTF-8<br /> * @return string as $string but with leading and trailing punctuation removed<br /> */<br />function mb_punctuation_trim($string)<br />{<br />    preg_match('/^[^\w]{0,}(.*?)[^\w]{0,}$/iu', $string, $matches); //case-'i'nsensitive and 'u'ngreedy<br />    <br />    if(count($matches) &lt; 2)<br />    {<br />        //some strange error so just return the original input<br />        return $string;<br />    }<br />    <br />    return $matches[1];<br />}<br /><br />Hope you like it!</span></code></div>
  </div>
 </div>
  <div class="note" id="62787">  <div class="votes">
    <div id="Vu62787">
    <a href="/manual/vote-note.php?id=62787&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62787">
    <a href="/manual/vote-note.php?id=62787&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62787" title="62% like this...">
    2
    </div>
  </div>
  <a href="#62787" class="name">
  <strong class="user"><em>peter kehl</em></strong></a><a class="genanchor" href="#62787"> &para;</a><div class="date" title="2006-03-09 08:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62787">
<div class="phpcode"><code><span class="html">UTF-16LE solution for CSV for Excel by Eugene Murai works well:<br />$unicode_str_for_Excel = chr(255).chr(254).mb_convert_encoding( $utf8_str, 'UTF-16LE', 'UTF-8');<br /><br />However, then Excel on Mac OS X doesn't identify columns properly and its puts each whole row in its own cell. In order to fix that, use TAB "\\t" character as CSV delimiter rather than comma or colon.<br /><br />You may also want to use HTTP encoding header, such as<br />header( "Content-type: application/vnd.ms-excel; charset=UTF-16LE" );</span></code></div>
  </div>
 </div>
  <div class="note" id="105328">  <div class="votes">
    <div id="Vu105328">
    <a href="/manual/vote-note.php?id=105328&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105328">
    <a href="/manual/vote-note.php?id=105328&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105328" title="56% like this...">
    5
    </div>
  </div>
  <a href="#105328" class="name">
  <strong class="user"><em>rawsrc at gmail dot com</em></strong></a><a class="genanchor" href="#105328"> &para;</a><div class="date" title="2011-08-09 02:36"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105328">
<div class="phpcode"><code><span class="html">Hi,<br /><br />For those who are looking for mb_str_replace, here's a simple function :<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mb_str_replace</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">) {<br />   return </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">mb_split</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span>I haven't found a simpliest way to proceed :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="70294">  <div class="votes">
    <div id="Vu70294">
    <a href="/manual/vote-note.php?id=70294&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70294">
    <a href="/manual/vote-note.php?id=70294&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70294" title="60% like this...">
    1
    </div>
  </div>
  <a href="#70294" class="name">
  <strong class="user"><em>pdezwart .at. snocap</em></strong></a><a class="genanchor" href="#70294"> &para;</a><div class="date" title="2006-10-10 11:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70294">
<div class="phpcode"><code><span class="html">If you are trying to emulate the UnicodeEncoding.Unicode.GetBytes() function in .NET, the encoding you want to use is: UCS-2LE</span></code></div>
  </div>
 </div>
  <div class="note" id="51887">  <div class="votes">
    <div id="Vu51887">
    <a href="/manual/vote-note.php?id=51887&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51887">
    <a href="/manual/vote-note.php?id=51887&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51887" title="57% like this...">
    1
    </div>
  </div>
  <a href="#51887" class="name">
  <strong class="user"><em>nzkiwi at NOSPAMmte dot biglobe dot ne dot jp</em></strong></a><a class="genanchor" href="#51887"> &para;</a><div class="date" title="2005-04-13 04:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51887">
<div class="phpcode"><code><span class="html">A friend has pointed out that the entry <br />"mbstring.http_input PHP_INI_ALL" in Table 1 on the mbstring page appears to be wrong: above Example 4 it says that "There is no way to control HTTP input character conversion from PHP script. To disable HTTP input character conversion, it has to be done in php.ini". <br />Also the table shows the old-PHP-version defaults: <br />;; Disable HTTP Input conversion <br />mbstring.http_input = pass  *BUT* (for PHP 4.3.0 or higher) <br />;; Disable HTTP Input conversion <br />mbstring.encoding_translation = Off</span></code></div>
  </div>
 </div>
  <div class="note" id="113245">  <div class="votes">
    <div id="Vu113245">
    <a href="/manual/vote-note.php?id=113245&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113245">
    <a href="/manual/vote-note.php?id=113245&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113245" title="54% like this...">
    1
    </div>
  </div>
  <a href="#113245" class="name">
  <strong class="user"><em>Daniel Rhodes</em></strong></a><a class="genanchor" href="#113245"> &para;</a><div class="date" title="2013-09-17 01:24"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113245">
<div class="phpcode"><code><span class="html">Here's a cheap and cheeky function to remove leading and trailing *punctuation* (or more specifically "non-word characters") from a UTF-8 string in whatever language. (At least it works well enough for Japanese and English.)<br /><br />/**<br /> * Trim singlebyte and multibyte punctuation from the start and end of a string<br /> * <br /> * @author Daniel Rhodes<br /> * @note we want the first non-word grabbing to be greedy but then<br /> * @note we want the dot-star grabbing (before the last non-word grabbing)<br /> * @note to be ungreedy<br /> * <br /> * @param string $string input string in UTF-8<br /> * @return string as $string but with leading and trailing punctuation removed<br /> */<br />function mb_punctuation_trim($string)<br />{<br />    preg_match('/^[^\w]{0,}(.*?)[^\w]{0,}$/iu', $string, $matches); //case-'i'nsensitive and 'u'ngreedy<br />    <br />    if(count($matches) &lt; 2)<br />    {<br />        //some strange error so just return the original input<br />        return $string;<br />    }<br />    <br />    return $matches[1];<br />}<br /><br />Hope you like it!</span></code></div>
  </div>
 </div>
  <div class="note" id="100459">  <div class="votes">
    <div id="Vu100459">
    <a href="/manual/vote-note.php?id=100459&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100459">
    <a href="/manual/vote-note.php?id=100459&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100459" title="54% like this...">
    1
    </div>
  </div>
  <a href="#100459" class="name">
  <strong class="user"><em>johannesponader at dontspamme dot googlemail dot co</em></strong></a><a class="genanchor" href="#100459"> &para;</a><div class="date" title="2010-10-17 09:46"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100459">
<div class="phpcode"><code><span class="html">Please note that when migrating code to handle UTF-8 encoding, not only the functions mentioned here are useful, but also the function htmlentities() has to be changed to htmlentities($var, ENT_COMPAT, "UTF-8") or similar. I didn't scan the manual for it, but there could be some more functions that need adjustments like this.</span></code></div>
  </div>
 </div>
  <div class="note" id="120332">  <div class="votes">
    <div id="Vu120332">
    <a href="/manual/vote-note.php?id=120332&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120332">
    <a href="/manual/vote-note.php?id=120332&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120332" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120332" class="name">
  <strong class="user"><em>rr_news at live dot de</em></strong></a><a class="genanchor" href="#120332"> &para;</a><div class="date" title="2016-12-14 01:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120332">
<div class="phpcode"><code><span class="html">The suggestion from "mt at mediamedics dot nl" is not that bad like the down votes indicate. There is only one small bug which can be easily fixed to make it work. <br />The head of the "for" need to be modified by replacing $i + $split_length by $i += $split_length.<br /><br />Here is the full working code, with additional check to verify that the method doesn't exists already:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if ( !</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_str_split'</span><span class="keyword">) )<br />{<br />    function </span><span class="default">mb_str_split</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$split_length </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">)<br />    {<br />        </span><span class="default">mb_internal_encoding</span><span class="keyword">(</span><span class="string">'UTF-8'</span><span class="keyword">); <br />        </span><span class="default">mb_regex_encoding</span><span class="keyword">(</span><span class="string">'UTF-8'</span><span class="keyword">);  <br /><br />        </span><span class="default">$split_length </span><span class="keyword">= (</span><span class="default">$split_length </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) ? </span><span class="default">1 </span><span class="keyword">: </span><span class="default">$split_length</span><span class="keyword">;<br /><br />        </span><span class="default">$mb_strlen </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">);<br /><br />        </span><span class="default">$array </span><span class="keyword">= array();<br /><br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$mb_strlen</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">$split_length</span><span class="keyword">)<br />        {<br />            </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$split_length</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">$array</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102141">  <div class="votes">
    <div id="Vu102141">
    <a href="/manual/vote-note.php?id=102141&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102141">
    <a href="/manual/vote-note.php?id=102141&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102141" title="50% like this...">
    0
    </div>
  </div>
  <a href="#102141" class="name">
  <strong class="user"><em>efesar</em></strong></a><a class="genanchor" href="#102141"> &para;</a><div class="date" title="2011-01-28 02:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102141">
<div class="phpcode"><code><span class="html">This small mb_trim function works for me. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">mb_trim</span><span class="keyword">( </span><span class="default">$string </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">( </span><span class="string">"/(^\s+)|(\s+$)/us"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$string </span><span class="keyword">);
<br />    
<br />    return </span><span class="default">$string</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86120">  <div class="votes">
    <div id="Vu86120">
    <a href="/manual/vote-note.php?id=86120&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86120">
    <a href="/manual/vote-note.php?id=86120&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86120" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86120" class="name">
  <strong class="user"><em>marc at ermshaus dot org</em></strong></a><a class="genanchor" href="#86120"> &para;</a><div class="date" title="2008-10-03 03:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86120">
<div class="phpcode"><code><span class="html">A small correction to patrick at hexane dot org's mb_str_replace function. The original function does not work as intended in case $replacement contains $needle.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mb_str_replace</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">)<br />{<br />    </span><span class="default">$needle_len </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">);<br />    </span><span class="default">$replacement_len </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">);<br />    </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">);<br />    while (</span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">)<br />    {<br />        </span><span class="default">$haystack </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">) . </span><span class="default">$replacement<br />                </span><span class="keyword">. </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">$needle_len</span><span class="keyword">);<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">$replacement_len</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$haystack</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68976">  <div class="votes">
    <div id="Vu68976">
    <a href="/manual/vote-note.php?id=68976&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68976">
    <a href="/manual/vote-note.php?id=68976&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68976" title="50% like this...">
    0
    </div>
  </div>
  <a href="#68976" class="name">
  <strong class="user"><em>hayk at mail dot ru</em></strong></a><a class="genanchor" href="#68976"> &para;</a><div class="date" title="2006-08-17 12:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68976">
<div class="phpcode"><code><span class="html">Since PHP 5.1.0 and PHP 4.4.2 there is an Armenian ArmSCII-8 (ArmSCII-8, ArmSCII8, ARMSCII-8, ARMSCII8) encoding avaliable.</span></code></div>
  </div>
 </div>
  <div class="note" id="63113">  <div class="votes">
    <div id="Vu63113">
    <a href="/manual/vote-note.php?id=63113&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63113">
    <a href="/manual/vote-note.php?id=63113&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63113" title="50% like this...">
    0
    </div>
  </div>
  <a href="#63113" class="name">
  <strong class="user"><em>Aardvark</em></strong></a><a class="genanchor" href="#63113"> &para;</a><div class="date" title="2006-03-13 11:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63113">
<div class="phpcode"><code><span class="html">Since not all hosted servces currently support the multi-byte function set, it may still be necessary to process Unicode strings using standard single byte functions.  The function at the following link - <a href="http://www.kanolife.com/escape/2006/03/php-unicode-processing.html" rel="nofollow" target="_blank">http://www.kanolife.com/escape/2006/03/php-unicode-processing.html</a> - shows by example how to do this.  While this only covers UTF-8, the standard PHP function "iconv" allows conversion into and out of UTF-8 if strings need to be input or output in other encodings.</span></code></div>
  </div>
 </div>
  <div class="note" id="55832">  <div class="votes">
    <div id="Vu55832">
    <a href="/manual/vote-note.php?id=55832&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55832">
    <a href="/manual/vote-note.php?id=55832&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55832" title="50% like this...">
    0
    </div>
  </div>
  <a href="#55832" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#55832"> &para;</a><div class="date" title="2005-08-14 07:24"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55832">
<div class="phpcode"><code><span class="html">get the string octet-size, when mbstring.func_overload is set to 2 :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_sizeof</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    return </span><span class="default">count</span><span class="keyword">(</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"`.`"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">)) - </span><span class="default">1 </span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />answering to peter albertsson, once you got your data octet-size, you can access each octet with something<br />$string[0] ... $string[$size-1], since the [ operator doesn't complies with multibytes strings.</span></code></div>
  </div>
 </div>
  <div class="note" id="121807">  <div class="votes">
    <div id="Vu121807">
    <a href="/manual/vote-note.php?id=121807&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121807">
    <a href="/manual/vote-note.php?id=121807&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121807" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#121807" class="name">
  <strong class="user"><em>v dot r dot sanaty at gmail dot com</em></strong></a><a class="genanchor" href="#121807"> &para;</a><div class="date" title="2017-10-29 05:24"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121807">
<div class="phpcode"><code><span class="html">The multibyte version of substr_replace function:<br />(Inspired by roydukkey's note with some corrections)<br /><br />function mb_substr_replace($string, $replacement, $start, $length){<br />    return mb_substr($string, 0, $start).$replacement.mb_substr($string, $start+$length);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="113235">  <div class="votes">
    <div id="Vu113235">
    <a href="/manual/vote-note.php?id=113235&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113235">
    <a href="/manual/vote-note.php?id=113235&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113235" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#113235" class="name">
  <strong class="user"><em>Daniel Rhodes</em></strong></a><a class="genanchor" href="#113235"> &para;</a><div class="date" title="2013-09-16 12:11"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113235">
<div class="phpcode"><code><span class="html">Here's a cheap and cheeky function to remove leading and trailing *punctuation* (or more specifically "non-word characters") from a UTF-8 string in whatever language. (At least it works well enough for Japanese and English.)<br /><br />/**<br /> * Trim singlebyte and multibyte punctuation from the start and end of a string<br /> * <br /> * @author Daniel Rhodes<br /> * @note we want the first non-word grabbing to be greedy but then<br /> * @note we want the dot-star grabbing (before the last non-word grabbing)<br /> * @note to be ungreedy<br /> * <br /> * @param string $string input string in UTF-8<br /> * @return string as $string but with leading and trailing punctuation removed<br /> */<br />function mb_punctuation_trim($string)<br />{<br />    preg_match('/^[^\w]{0,}(.*?)[^\w]{0,}$/iu', $string, $matches); //case-'i'nsensitive and 'u'ngreedy<br />    <br />    if(count($matches) &lt; 2)<br />    {<br />        //some strange error so just return the original input<br />        return $string;<br />    }<br />    <br />    return $matches[1];<br />}<br /><br />Hope you like it!</span></code></div>
  </div>
 </div>
  <div class="note" id="53032">  <div class="votes">
    <div id="Vu53032">
    <a href="/manual/vote-note.php?id=53032&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53032">
    <a href="/manual/vote-note.php?id=53032&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53032" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#53032" class="name">
  <strong class="user"><em>peter dot albertsson at spray dot se</em></strong></a><a class="genanchor" href="#53032"> &para;</a><div class="date" title="2005-05-21 03:43"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53032">
<div class="phpcode"><code><span class="html">Setting mbstring.func_overload = 2 may break your applications that deal with binary data.<br /><br />After having set mbstring.func_overload = 2 and  mbstring.internal_encoding = UTF-8 I can't even read a binary file and print/echo it to output without corrupting it.</span></code></div>
  </div>
 </div>
  <div class="note" id="68349">  <div class="votes">
    <div id="Vu68349">
    <a href="/manual/vote-note.php?id=68349&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68349">
    <a href="/manual/vote-note.php?id=68349&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68349" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#68349" class="name">
  <strong class="user"><em>daniel at softel dot jp</em></strong></a><a class="genanchor" href="#68349"> &para;</a><div class="date" title="2006-07-24 04:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68349">
<div class="phpcode"><code><span class="html">Note that although "multi-byte" hints at total internationalization, the mb_ API was designed by a Japanese person to support the Japanese language.<br /><br />Some of the functions, for example mb_convert_kana(), make absolutely no sense outside of a Japanese language environment.<br /><br />It should perhaps be considered "lucky" if the functions work with non-Japanese multi-byte languages.<br /><br />I don't mean any disrespect to the mb_ API because I'm using it everyday and I appreciate its usefulness, but maybe a better name would be the jp_ API.</span></code></div>
  </div>
 </div>
  <div class="note" id="74722">  <div class="votes">
    <div id="Vu74722">
    <a href="/manual/vote-note.php?id=74722&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74722">
    <a href="/manual/vote-note.php?id=74722&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74722" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#74722" class="name">
  <strong class="user"><em>chris at maedata dot com</em></strong></a><a class="genanchor" href="#74722"> &para;</a><div class="date" title="2007-04-24 09:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74722">
<div class="phpcode"><code><span class="html">The opposite of what Eugene Murai wrote in a previous comment is true when importing/uploading a file. For instance, if you export an Excel spreadsheet using the Save As Unicode Text option, you can use the following to convert it to UTF-8 after uploading:<br /><br />//Convert file to UTF-8 in case Windows mucked it up<br />$file = explode( "\n", mb_convert_encoding( trim( file_get_contents( $_FILES['file']['tmp_name'] ) ), 'UTF-8', 'UTF-16' ) );</span></code></div>
  </div>
 </div>
  <div class="note" id="91810">  <div class="votes">
    <div id="Vu91810">
    <a href="/manual/vote-note.php?id=91810&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91810">
    <a href="/manual/vote-note.php?id=91810&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91810" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#91810" class="name">
  <strong class="user"><em>sakai at d4k dot net</em></strong></a><a class="genanchor" href="#91810"> &para;</a><div class="date" title="2009-06-26 05:46"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91810">
<div class="phpcode"><code><span class="html">I hope this mb_str_replace will work for arrays.  Please use mb_internal_encoding() beforehand, if you need to change the encoding.<br /><br />Thanks to marc at ermshaus dot org for the original.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_str_replace'</span><span class="keyword">)) {<br /><br />    function </span><span class="default">mb_str_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$subject</span><span class="keyword">) {<br /><br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">)) {<br />            </span><span class="default">$ret </span><span class="keyword">= array();<br />            foreach(</span><span class="default">$subject </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {<br />                </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">mb_str_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />            }<br />            return </span><span class="default">$ret</span><span class="keyword">;<br />        }<br /><br />        foreach((array) </span><span class="default">$search </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$s</span><span class="keyword">) {<br />            if(</span><span class="default">$s </span><span class="keyword">== </span><span class="string">''</span><span class="keyword">) {<br />                continue;<br />            }<br />            </span><span class="default">$r </span><span class="keyword">= !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$replace</span><span class="keyword">) ? </span><span class="default">$replace </span><span class="keyword">: (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">) ? </span><span class="default">$replace</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] : </span><span class="string">''</span><span class="keyword">);<br />            </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">);<br />            while(</span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) {<br />                </span><span class="default">$subject </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">) . </span><span class="default">$r </span><span class="keyword">. </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">));<br />                </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">));<br />            }<br />        }<br /><br />        return </span><span class="default">$subject</span><span class="keyword">;<br /><br />    }<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95192">  <div class="votes">
    <div id="Vu95192">
    <a href="/manual/vote-note.php?id=95192&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95192">
    <a href="/manual/vote-note.php?id=95192&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95192" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#95192" class="name">
  <strong class="user"><em>mt at mediamedics dot nl</em></strong></a><a class="genanchor" href="#95192"> &para;</a><div class="date" title="2009-12-17 05:52"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95192">
<div class="phpcode"><code><span class="html">A multibyte one-to-one alternative for the str_split function (<a href="http://php.net/manual/en/function.str-split.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.str-split.php</a>):<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">mb_str_split</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$split_length </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">){<br />            <br />        </span><span class="default">mb_internal_encoding</span><span class="keyword">(</span><span class="string">'UTF-8'</span><span class="keyword">); <br />        </span><span class="default">mb_regex_encoding</span><span class="keyword">(</span><span class="string">'UTF-8'</span><span class="keyword">);  <br />        <br />        </span><span class="default">$split_length </span><span class="keyword">= (</span><span class="default">$split_length </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) ? </span><span class="default">1 </span><span class="keyword">: </span><span class="default">$split_length</span><span class="keyword">;<br />        <br />        </span><span class="default">$mb_strlen </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">);<br />        <br />        </span><span class="default">$array </span><span class="keyword">= array();<br />                <br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$mb_strlen</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+ </span><span class="default">$split_length</span><span class="keyword">){<br />        <br />            </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$split_length</span><span class="keyword">); <br />        }<br /><br />        return </span><span class="default">$array</span><span class="keyword">;<br />    <br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84099">  <div class="votes">
    <div id="Vu84099">
    <a href="/manual/vote-note.php?id=84099&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84099">
    <a href="/manual/vote-note.php?id=84099&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84099" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#84099" class="name">
  <strong class="user"><em>patrick at hexane dot org</em></strong></a><a class="genanchor" href="#84099"> &para;</a><div class="date" title="2008-06-27 08:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84099">
<div class="phpcode"><code><span class="html">I wonder why there isn't a mb_str_replace().  Here's one for now:<br /><br />function mb_str_replace( $needle, $replacement, $haystack ) {<br />  $needle_len = mb_strlen($needle);<br />  $pos = mb_strpos( $haystack, $needle);<br />  while (!($pos ===false)) {<br />    $front = mb_substr( $haystack, 0, $pos );<br />    $back  = mb_substr( $haystack, $pos + $needle_len);<br />    $haystack = $front.$replacement.$back;<br />    $pos = mb_strpos( $haystack, $needle);<br />  }<br />  return $haystack;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="94356">  <div class="votes">
    <div id="Vu94356">
    <a href="/manual/vote-note.php?id=94356&amp;page=ref.mbstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94356">
    <a href="/manual/vote-note.php?id=94356&amp;page=ref.mbstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94356" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#94356" class="name">
  <strong class="user"><em>peter AT(no spam) dezzignz dot com</em></strong></a><a class="genanchor" href="#94356"> &para;</a><div class="date" title="2009-10-29 04:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94356">
<div class="phpcode"><code><span class="html">The function trim() has not failed me so far in my multibyte applications, but in case one needs a truly multibyte function, here it is. The nice thing is that the character to remove can be whitespace or any other specified character, even a multibyte character.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// multibyte string split<br /><br /></span><span class="keyword">function </span><span class="default">mbStringToArray </span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    if (empty(</span><span class="default">$str</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$array </span><span class="keyword">= array();<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        }<br />    return </span><span class="default">$array</span><span class="keyword">;<br />    }<br /><br /></span><span class="comment">// removes $rem at both ends<br /><br /></span><span class="keyword">function </span><span class="default">mb_trim </span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$rem </span><span class="keyword">= </span><span class="string">' '</span><span class="keyword">) {<br />    if (empty(</span><span class="default">$str</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="comment">// convert to array<br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">mbStringToArray</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />    </span><span class="comment">// left side<br />    </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        if (</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] === </span><span class="default">$rem</span><span class="keyword">) </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="string">''</span><span class="keyword">;<br />        else break;<br />        }<br />    </span><span class="comment">// right side<br />    </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$len</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--) {<br />        if (</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] === </span><span class="default">$rem</span><span class="keyword">) </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="string">''</span><span class="keyword">;<br />        else break;<br />        }<br />    </span><span class="comment">// convert to string<br />    </span><span class="keyword">return </span><span class="default">implode </span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">);<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.mbstring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.mbstring.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.mbstring.php">Multibyte String</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.mbstring.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.encodings.php" title="Summaries of supported encodings">Summaries of supported encodings</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.ja-basic.php" title="Basics of Japanese multi-&#8203;byte encodings">Basics of Japanese multi-&#8203;byte encodings</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.http.php" title="HTTP Input and Output">HTTP Input and Output</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.supported-encodings.php" title="Supported Character Encodings">Supported Character Encodings</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.overload.php" title="Function Overloading Feature">Function Overloading Feature</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.php4.req.php" title="PHP Character Encoding Requirements">PHP Character Encoding Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="ref.mbstring.php" title="Multibyte String Functions">Multibyte String Functions</a>
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
