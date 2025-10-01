<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Strings - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.strings.php">
 <link rel="shorturl" href="https://www.php.net/strings">
 <link rel="alternate" href="https://www.php.net/strings" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.basic.text.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ssdeep-fuzzy-hash-filename.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.strings.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.strings.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.strings.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.strings.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.strings.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.strings.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.strings.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.strings.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.strings.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.strings.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.strings.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.strings.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Strings" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Strings - Manual" />
<meta name="twitter:description" content="Strings" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Strings - Manual" />
<meta itemprop="description" content="Strings" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Strings" />

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
        <a href="intro.strings.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ssdeep-fuzzy-hash-filename.php">
          &laquo; ssdeep_fuzzy_hash_filename        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      </ul>
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
            <option value='en/book.strings.php' selected="selected">English</option>
            <option value='de/book.strings.php'>German</option>
            <option value='es/book.strings.php'>Spanish</option>
            <option value='fr/book.strings.php'>French</option>
            <option value='it/book.strings.php'>Italian</option>
            <option value='ja/book.strings.php'>Japanese</option>
            <option value='pt_BR/book.strings.php'>Brazilian Portuguese</option>
            <option value='ru/book.strings.php'>Russian</option>
            <option value='tr/book.strings.php'>Turkish</option>
            <option value='uk/book.strings.php'>Ukrainian</option>
            <option value='zh/book.strings.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.strings" class="book">
 
 <h1 class="title">Strings</h1>

 

 







 




 










<ul class="chunklist chunklist_book"><li><a href="intro.strings.php">Introduction</a></li><li><a href="strings.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="strings.installation.php">Installation</a></li></ul></li><li><a href="string.constants.php">Predefined Constants</a></li><li><a href="ref.strings.php">String Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.addcslashes.php">addcslashes</a> — Quote string with slashes in a C style</li><li><a href="function.addslashes.php">addslashes</a> — Quote string with slashes</li><li><a href="function.bin2hex.php">bin2hex</a> — Convert binary data into hexadecimal representation</li><li><a href="function.chop.php">chop</a> — Alias of rtrim</li><li><a href="function.chr.php">chr</a> — Generate a single-byte string from a number</li><li><a href="function.chunk-split.php">chunk_split</a> — Split a string into smaller chunks</li><li><a href="function.convert-cyr-string.php">convert_cyr_string</a> — Convert from one Cyrillic character set to another</li><li><a href="function.convert-uudecode.php">convert_uudecode</a> — Decode a uuencoded string</li><li><a href="function.convert-uuencode.php">convert_uuencode</a> — Uuencode a string</li><li><a href="function.count-chars.php">count_chars</a> — Return information about characters used in a string</li><li><a href="function.crc32.php">crc32</a> — Calculates the crc32 polynomial of a string</li><li><a href="function.crypt.php">crypt</a> — One-way string hashing</li><li><a href="function.echo.php">echo</a> — Output one or more strings</li><li><a href="function.explode.php">explode</a> — Split a string by a string</li><li><a href="function.fprintf.php">fprintf</a> — Write a formatted string to a stream</li><li><a href="function.get-html-translation-table.php">get_html_translation_table</a> — Returns the translation table used by htmlspecialchars and htmlentities</li><li><a href="function.hebrev.php">hebrev</a> — Convert logical Hebrew text to visual text</li><li><a href="function.hebrevc.php">hebrevc</a> — Convert logical Hebrew text to visual text with newline conversion</li><li><a href="function.hex2bin.php">hex2bin</a> — Decodes a hexadecimally encoded binary string</li><li><a href="function.html-entity-decode.php">html_entity_decode</a> — Convert HTML entities to their corresponding characters</li><li><a href="function.htmlentities.php">htmlentities</a> — Convert all applicable characters to HTML entities</li><li><a href="function.htmlspecialchars.php">htmlspecialchars</a> — Convert special characters to HTML entities</li><li><a href="function.htmlspecialchars-decode.php">htmlspecialchars_decode</a> — Convert special HTML entities back to characters</li><li><a href="function.implode.php">implode</a> — Join array elements with a string</li><li><a href="function.join.php">join</a> — Alias of implode</li><li><a href="function.lcfirst.php">lcfirst</a> — Make a string's first character lowercase</li><li><a href="function.levenshtein.php">levenshtein</a> — Calculate Levenshtein distance between two strings</li><li><a href="function.localeconv.php">localeconv</a> — Get numeric formatting information</li><li><a href="function.ltrim.php">ltrim</a> — Strip whitespace (or other characters) from the beginning of a string</li><li><a href="function.md5.php">md5</a> — Calculate the md5 hash of a string</li><li><a href="function.md5-file.php">md5_file</a> — Calculates the md5 hash of a given file</li><li><a href="function.metaphone.php">metaphone</a> — Calculate the metaphone key of a string</li><li><a href="function.money-format.php">money_format</a> — Formats a number as a currency string</li><li><a href="function.nl-langinfo.php">nl_langinfo</a> — Query language and locale information</li><li><a href="function.nl2br.php">nl2br</a> — Inserts HTML line breaks before all newlines in a string</li><li><a href="function.number-format.php">number_format</a> — Format a number with grouped thousands</li><li><a href="function.ord.php">ord</a> — Convert the first byte of a string to a value between 0 and 255</li><li><a href="function.parse-str.php">parse_str</a> — Parse a string as a URL query string</li><li><a href="function.print.php">print</a> — Output a string</li><li><a href="function.printf.php">printf</a> — Output a formatted string</li><li><a href="function.quoted-printable-decode.php">quoted_printable_decode</a> — Convert a quoted-printable string to an 8 bit string</li><li><a href="function.quoted-printable-encode.php">quoted_printable_encode</a> — Convert a 8 bit string to a quoted-printable string</li><li><a href="function.quotemeta.php">quotemeta</a> — Quote meta characters</li><li><a href="function.rtrim.php">rtrim</a> — Strip whitespace (or other characters) from the end of a string</li><li><a href="function.setlocale.php">setlocale</a> — Set locale information</li><li><a href="function.sha1.php">sha1</a> — Calculate the sha1 hash of a string</li><li><a href="function.sha1-file.php">sha1_file</a> — Calculate the sha1 hash of a file</li><li><a href="function.similar-text.php">similar_text</a> — Calculate the similarity between two strings</li><li><a href="function.soundex.php">soundex</a> — Calculate the soundex key of a string</li><li><a href="function.sprintf.php">sprintf</a> — Return a formatted string</li><li><a href="function.sscanf.php">sscanf</a> — Parses input from a string according to a format</li><li><a href="function.str-contains.php">str_contains</a> — Determine if a string contains a given substring</li><li><a href="function.str-decrement.php">str_decrement</a> — Decrement an alphanumeric string</li><li><a href="function.str-ends-with.php">str_ends_with</a> — Checks if a string ends with a given substring</li><li><a href="function.str-getcsv.php">str_getcsv</a> — Parse a CSV string into an array</li><li><a href="function.str-increment.php">str_increment</a> — Increment an alphanumeric string</li><li><a href="function.str-ireplace.php">str_ireplace</a> — Case-insensitive version of str_replace</li><li><a href="function.str-pad.php">str_pad</a> — Pad a string to a certain length with another string</li><li><a href="function.str-repeat.php">str_repeat</a> — Repeat a string</li><li><a href="function.str-replace.php">str_replace</a> — Replace all occurrences of the search string with the replacement string</li><li><a href="function.str-rot13.php">str_rot13</a> — Perform the rot13 transform on a string</li><li><a href="function.str-shuffle.php">str_shuffle</a> — Randomly shuffles a string</li><li><a href="function.str-split.php">str_split</a> — Convert a string to an array</li><li><a href="function.str-starts-with.php">str_starts_with</a> — Checks if a string starts with a given substring</li><li><a href="function.str-word-count.php">str_word_count</a> — Return information about words used in a string</li><li><a href="function.strcasecmp.php">strcasecmp</a> — Binary safe case-insensitive string comparison</li><li><a href="function.strchr.php">strchr</a> — Alias of strstr</li><li><a href="function.strcmp.php">strcmp</a> — Binary safe string comparison</li><li><a href="function.strcoll.php">strcoll</a> — Locale based string comparison</li><li><a href="function.strcspn.php">strcspn</a> — Find length of initial segment not matching mask</li><li><a href="function.strip-tags.php">strip_tags</a> — Strip HTML and PHP tags from a string</li><li><a href="function.stripcslashes.php">stripcslashes</a> — Un-quote string quoted with addcslashes</li><li><a href="function.stripos.php">stripos</a> — Find the position of the first occurrence of a case-insensitive substring in a string</li><li><a href="function.stripslashes.php">stripslashes</a> — Un-quotes a quoted string</li><li><a href="function.stristr.php">stristr</a> — Case-insensitive strstr</li><li><a href="function.strlen.php">strlen</a> — Get string length</li><li><a href="function.strnatcasecmp.php">strnatcasecmp</a> — Case insensitive string comparisons using a &quot;natural order&quot; algorithm</li><li><a href="function.strnatcmp.php">strnatcmp</a> — String comparisons using a &quot;natural order&quot; algorithm</li><li><a href="function.strncasecmp.php">strncasecmp</a> — Binary safe case-insensitive string comparison of the first n characters</li><li><a href="function.strncmp.php">strncmp</a> — Binary safe string comparison of the first n characters</li><li><a href="function.strpbrk.php">strpbrk</a> — Search a string for any of a set of characters</li><li><a href="function.strpos.php">strpos</a> — Find the position of the first occurrence of a substring in a string</li><li><a href="function.strrchr.php">strrchr</a> — Find the last occurrence of a character in a string</li><li><a href="function.strrev.php">strrev</a> — Reverse a string</li><li><a href="function.strripos.php">strripos</a> — Find the position of the last occurrence of a case-insensitive substring in a string</li><li><a href="function.strrpos.php">strrpos</a> — Find the position of the last occurrence of a substring in a string</li><li><a href="function.strspn.php">strspn</a> — Finds the length of the initial segment of a string consisting
   entirely of characters contained within a given mask</li><li><a href="function.strstr.php">strstr</a> — Find the first occurrence of a string</li><li><a href="function.strtok.php">strtok</a> — Tokenize string</li><li><a href="function.strtolower.php">strtolower</a> — Make a string lowercase</li><li><a href="function.strtoupper.php">strtoupper</a> — Make a string uppercase</li><li><a href="function.strtr.php">strtr</a> — Translate characters or replace substrings</li><li><a href="function.substr.php">substr</a> — Return part of a string</li><li><a href="function.substr-compare.php">substr_compare</a> — Binary safe comparison of two strings from an offset, up to length characters</li><li><a href="function.substr-count.php">substr_count</a> — Count the number of substring occurrences</li><li><a href="function.substr-replace.php">substr_replace</a> — Replace text within a portion of a string</li><li><a href="function.trim.php">trim</a> — Strip whitespace (or other characters) from the beginning and end of a string</li><li><a href="function.ucfirst.php">ucfirst</a> — Make a string's first character uppercase</li><li><a href="function.ucwords.php">ucwords</a> — Uppercase the first character of each word in a string</li><li><a href="function.utf8-decode.php">utf8_decode</a> — Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable
   characters</li><li><a href="function.utf8-encode.php">utf8_encode</a> — Converts a string from ISO-8859-1 to UTF-8</li><li><a href="function.vfprintf.php">vfprintf</a> — Write a formatted string to a stream</li><li><a href="function.vprintf.php">vprintf</a> — Output a formatted string</li><li><a href="function.vsprintf.php">vsprintf</a> — Return a formatted string</li><li><a href="function.wordwrap.php">wordwrap</a> — Wraps a string to a given number of characters</li></ul></li><li><a href="changelog.strings.php">Changelog</a></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.strings%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.strings&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.strings.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.basic.text.php">Text Processing</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.cmark.php" title="CommonMark">CommonMark</a>
                        </li>
                                                <li class="">
                            <a href="book.parle.php" title="Parle">Parle</a>
                        </li>
                                                <li class="">
                            <a href="book.pcre.php" title="PCRE">PCRE</a>
                        </li>
                                                <li class="">
                            <a href="book.ssdeep.php" title="ssdeep">ssdeep</a>
                        </li>
                                                <li class="current">
                            <a href="book.strings.php" title="Strings">Strings</a>
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
