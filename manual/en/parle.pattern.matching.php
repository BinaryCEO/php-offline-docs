<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Pattern matching - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/parle.pattern.matching.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/parle.pattern.matching.php">
 <link rel="alternate" href="https://www.php.net/manual/en/parle.pattern.matching.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.parle.php">
 <link rel="prev" href="https://www.php.net/manual/en/parle.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/parle.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/parle.pattern.matching.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/parle.pattern.matching.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/parle.pattern.matching.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/parle.pattern.matching.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/parle.pattern.matching.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/parle.pattern.matching.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/parle.pattern.matching.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/parle.pattern.matching.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/parle.pattern.matching.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/parle.pattern.matching.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/parle.pattern.matching.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parle pattern matching" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Pattern matching - Manual" />
<meta name="twitter:description" content="Parle pattern matching" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Pattern matching - Manual" />
<meta itemprop="description" content="Parle pattern matching" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parle pattern matching" />

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
        <a href="parle.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="parle.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.parle.php'>Parle</a></li>      </ul>
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
            <option value='en/parle.pattern.matching.php' selected="selected">English</option>
            <option value='de/parle.pattern.matching.php'>German</option>
            <option value='es/parle.pattern.matching.php'>Spanish</option>
            <option value='fr/parle.pattern.matching.php'>French</option>
            <option value='it/parle.pattern.matching.php'>Italian</option>
            <option value='ja/parle.pattern.matching.php'>Japanese</option>
            <option value='pt_BR/parle.pattern.matching.php'>Brazilian Portuguese</option>
            <option value='ru/parle.pattern.matching.php'>Russian</option>
            <option value='tr/parle.pattern.matching.php'>Turkish</option>
            <option value='uk/parle.pattern.matching.php'>Ukrainian</option>
            <option value='zh/parle.pattern.matching.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="parle.pattern.matching" class="chapter">
 <h1 class="title">Parle pattern matching</h1>

 
 <p class="para">
  Parle supports regex matching similar to flex.
  Also supported are the following POSIX character sets:
  <span class="simplelist"><code class="literal">[:alnum:]</code>, <code class="literal">[:alpha:]</code>, <code class="literal">[:blank:]</code>, <code class="literal">[:cntrl:]</code>, <code class="literal">[:digit:]</code>, <code class="literal">[:graph:]</code>, <code class="literal">[:lower:]</code>, <code class="literal">[:print:]</code>, <code class="literal">[:punct:]</code>, <code class="literal">[:space:]</code>, <code class="literal">[:upper:]</code>, <code class="literal">[:xdigit:]</code></span>.
 </p>
 <p class="para">
  The Unicode character classes are currently not enabled by default, pass --enable-parle-utf32 to make them available.
  A particular encoding can be mapped with a correctly constructed regex.
  For example, to match the EURO symbol encoded in UTF-8, the regular expression <code class="literal">[\xe2][\x82][\xac]</code> can be used.
  The pattern for an UTF-8 encoded string could be <code class="literal">[ -\x7f]{+}[\x80-\xbf]{+}[\xc2-\xdf]{+}[\xe0-\xef]{+}[\xf0-\xff]+</code>.
 </p>

 <div id="parle.regex.chars" class="section">
  <h2 class="title">Character representations</h2>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Character representations</strong></caption>
    
     <thead>
      <tr>
       <th>Sequence</th><th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>\a</td><td>Alert (bell).</td>
      </tr>

      <tr>
       <td>\b</td><td>Backspace.</td>
      </tr>

      <tr>
       <td>\e</td><td>ESC character, \x1b.</td>
      </tr>

      <tr>
       <td>\n</td><td>Newline.</td>
      </tr>

      <tr>
       <td>\r</td><td>Carriage return.</td>
      </tr>

      <tr>
       <td>\f</td><td>Form feed, \x0c.</td>
      </tr>

      <tr>
       <td>\t</td><td>Horizontal tab, \x09.</td>
      </tr>

      <tr>
       <td>\v</td><td>Vertical tab, \x0b.</td>
      </tr>

      <tr>
       <td>\oct</td><td>Character specified by a three-digit octal code.</td>
      </tr>

      <tr>
       <td>\xhex</td><td>Character specified by a hex code.</td>
      </tr>

      <tr>
       <td>\cchar</td><td>Named control character.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>
 <div id="parle.regex.charclass" class="section">
  <h2 class="title">Character classes</h2>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Character classes</strong></caption>
    
     <thead>
      <tr>
       <th>Sequence</th><th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>[...]</td><td>A single character listed or contained within a listed range. Ranges can be combined with the <code class="literal">{+}</code> and <code class="literal">{-}</code> operators. For example <code class="literal">[a-z]{+}[0-9]</code> is the same as <code class="literal">[0-9a-z]</code> and <code class="literal">[a-z]{-}[aeiou]</code> is the same as <code class="literal">[b-df-hj-np-tv-z]</code>.</td>
      </tr>

      <tr>
       <td>[^...]</td><td>A single character not listed and not contained within a listed range.</td>
      </tr>

      <tr>
       <td>.</td><td>Any character, default <code class="literal">[^\n].</code></td>
      </tr>

      <tr>
       <td>\d</td><td>Digit character, <code class="literal">[0-9]</code>.</td>
      </tr>

      <tr>
       <td>\D</td><td>Non-digit character, <code class="literal">[^0-9]</code>.</td>
      </tr>

      <tr>
       <td>\s</td><td>White space character, <code class="literal">[ \t\n\r\f\v]</code>.</td>
      </tr>

      <tr>
       <td>\S</td><td>Non-white space character, <code class="literal">[^ \t\n\r\f\v]</code>.</td>
      </tr>

      <tr>
       <td>\w</td><td>Word character, <code class="literal">[a-zA-Z0-9_]</code>.</td>
      </tr>

      <tr>
       <td>\W</td><td>Non-word character, <code class="literal">[^a-zA-Z0-9_]</code>.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>
 <div id="parle.regex.unicodecharclass" class="section">
  <h2 class="title">Unicode character classes</h2>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Unicode character classes</strong></caption>
    
     <thead>
      <tr>
       <th>Sequence</th><th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>\p{C}</td><td>Other.</td>
      </tr>

      <tr>
       <td>\p{Cc}</td><td>Other, control.</td>
      </tr>

      <tr>
       <td>\p{Cf}</td><td>Other, format.</td>
      </tr>

      <tr>
       <td>\p{Co}</td><td>Other, private use.</td>
      </tr>

      <tr>
       <td>\p{Cs}</td><td>Other, surrogate.</td>
      </tr>

      <tr>
       <td>\p{L}</td><td>Letter.</td>
      </tr>

      <tr>
       <td>\p{LC}</td><td>Letter, cased.</td>
      </tr>

      <tr>
       <td>\p{Ll}</td><td>Letter, lowercase.</td>
      </tr>

      <tr>
       <td>\p{Lm}</td><td>Letter, modifier.</td>
      </tr>

      <tr>
       <td>\p{Lo}</td><td>Letter, other.</td>
      </tr>

      <tr>
       <td>\p{Lt}</td><td>Letter, titlecase.</td>
      </tr>

      <tr>
       <td>\p{Lu}</td><td>Letter, uppercase.</td>
      </tr>

      <tr>
       <td>\p{M}</td><td>Mark.</td>
      </tr>

      <tr>
       <td>\p{Mc}</td><td>Mark, space combining.</td>
      </tr>

      <tr>
       <td>\p{Me}</td><td>Mark, enclosing.</td>
      </tr>

      <tr>
       <td>\p{Mn}</td><td>Mark, nonspacing.</td>
      </tr>

      <tr>
       <td>\p{N}</td><td>Number.</td>
      </tr>

      <tr>
       <td>\p{Nd}</td><td>Number, decimal digit.</td>
      </tr>

      <tr>
       <td>\p{Nl}</td><td>Number, letter.</td>
      </tr>

      <tr>
       <td>\p{No}</td><td>Number, other.</td>
      </tr>

      <tr>
       <td>\p{P}</td><td>Punctuation.</td>
      </tr>

      <tr>
       <td>\p{Pc}</td><td>Punctiation, connector.</td>
      </tr>

      <tr>
       <td>\p{Pd}</td><td>Punctuation, dash.</td>
      </tr>

      <tr>
       <td>\p{Pe}</td><td>Punctuation, close.</td>
      </tr>

      <tr>
       <td>\p{Pf}</td><td>Punctuation, final quote.</td>
      </tr>

      <tr>
       <td>\p{Pi}</td><td>Punctuation, initial quote.</td>
      </tr>

      <tr>
       <td>\p{Po}</td><td>Punctuation, other.</td>
      </tr>

      <tr>
       <td>\p{Ps}</td><td>Punctuation, open.</td>
      </tr>

      <tr>
       <td>\p{S}</td><td>Symbol.</td>
      </tr>

      <tr>
       <td>\p{Sc}</td><td>Symbol, currency.</td>
      </tr>

      <tr>
       <td>\p{Sk}</td><td>Symbol, modifier.</td>
      </tr>

      <tr>
       <td>\p{Sm}</td><td>Symbol, math.</td>
      </tr>

      <tr>
       <td>\p{So}</td><td>Symbol, other.</td>
      </tr>

      <tr>
       <td>\p{Z}</td><td>Separator.</td>
      </tr>

      <tr>
       <td>\p{Zl}</td><td>Separator, line.</td>
      </tr>

      <tr>
       <td>\p{Zp}</td><td>Separator, paragraph.</td>
      </tr>

      <tr>
       <td>\p{Zs}</td><td>Separator, space.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
  <p class="para">
   These character classes are only available, if the option --enable-parle-utf32 was passed at the compilation time.
  </p>
 </div>
 <div id="parle.regex.alternation" class="section">
  <h2 class="title">Alternation and repetition</h2>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Alternation and repetition</strong></caption>
    
     <thead>
      <tr>
       <th>Sequence</th><th>Greedy</th><th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>...|...</td><td>-</td><td>Try sub-patterns in alternation.</td>
      </tr>

      <tr>
       <td>*</td><td>yes</td><td>Match 0 or more times.</td>
      </tr>

      <tr>
       <td>+</td><td>yes</td><td>Match 1 or more times.</td>
      </tr>

      <tr>
       <td>?</td><td>yes</td><td>Match 0 or 1 times.</td>
      </tr>

      <tr>
       <td>{n}</td><td>no</td><td>Match exactly n times.</td>
      </tr>

      <tr>
       <td>{n,}</td><td>yes</td><td>Match at least n times.</td>
      </tr>

      <tr>
       <td>{n,m}</td><td>yes</td><td>Match at least n times but no more than m times.</td>
      </tr>

      <tr>
       <td>*?</td><td>no</td><td>Match 0 or more times.</td>
      </tr>

      <tr>
       <td>+?</td><td>no</td><td>Match 1 or more times.</td>
      </tr>

      <tr>
       <td>??</td><td>no</td><td>Match 0 or 1 times.</td>
      </tr>

      <tr>
       <td>{n,}?</td><td>no</td><td>Match at least n times.</td>
      </tr>

      <tr>
       <td>{n,m}?</td><td>no</td><td>Match at least n times but no more than m times.</td>
      </tr>

      <tr>
       <td>{MACRO}</td><td>-</td><td>Include the regex MACRO in the current regex.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>
 <div id="parle.regex.anchors" class="section">
  <h2 class="title">Anchors</h2>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Anchors</strong></caption>
    
     <thead>
      <tr>
       <th>Sequence</th><th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>^</td><td>Start of string or after a newline.</td>
      </tr>

      <tr>
       <td>$</td><td>End of string or before a newline.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>
 <div id="parle.regex.grouping" class="section">
  <h2 class="title">Grouping</h2>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Grouping</strong></caption>
    
     <thead>
      <tr>
       <th>Sequence</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>(...)</td>
       <td>Group a regular expression to override default operator precedence.</td>
      </tr>

      <tr>
       <td style="vertical-align: top;">(?r-s:pattern)</td>
       <td>
        <span class="simpara">
         Apply option r and omit option s while interpreting pattern.
         Options may be zero or more of the characters i, s, or x.
        </span>
        <span class="simpara">
         <code class="literal">i</code> means case-insensitive.
        </span>
        <span class="simpara">
         <code class="literal">-i</code> means case-sensitive.
        </span>
        <span class="simpara">
         <code class="literal">s</code> alters the meaning of <code class="literal">.</code> to match any character whatsoever.
        </span>
        <span class="simpara">
         <code class="literal">-s</code> alters the meaning of <code class="literal">.</code> to match any character except <code class="literal">\n</code>.
        </span>
        <span class="simpara">
         <code class="literal">x</code> ignores comments and whitespace in patterns.
         Whitespace is ignored unless it is backslash-escaped, contained within <code class="literal">&quot;&quot;s</code>,
         or appears inside a character range.
        </span>
        <span class="simpara">
         These options can be applied globally at the rules level by passing a combination of the bit flags to the lexer.
        </span>
       </td>
      </tr>

      <tr>
       <td>(?# comment )</td>
       <td>Omit everything within (). The first ) character encountered ends the pattern. It is not possible for the comment to contain a ) character. The comment may span lines.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/parle/pattern.matching.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fparle.pattern.matching%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=parle.pattern.matching&amp;repo=en&amp;redirect=https://www.php.net/manual/en/parle.pattern.matching.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.parle.php">Parle</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.parle.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="parle.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="parle.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="parle.pattern.matching.php" title="Pattern matching">Pattern matching</a>
                        </li>
                                                <li class="">
                            <a href="parle.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.parle-lexer.php" title="Parle\Lexer">Parle\Lexer</a>
                        </li>
                                                <li class="">
                            <a href="class.parle-rlexer.php" title="Parle\RLexer">Parle\RLexer</a>
                        </li>
                                                <li class="">
                            <a href="class.parle-parser.php" title="Parle\Parser">Parle\Parser</a>
                        </li>
                                                <li class="">
                            <a href="class.parle-rparser.php" title="Parle\RParser">Parle\RParser</a>
                        </li>
                                                <li class="">
                            <a href="class.parle-stack.php" title="Parle\Stack">Parle\Stack</a>
                        </li>
                                                <li class="">
                            <a href="class.parle-token.php" title="Parle\Token">Parle\Token</a>
                        </li>
                                                <li class="">
                            <a href="class.parle-errorinfo.php" title="Parle\ErrorInfo">Parle\ErrorInfo</a>
                        </li>
                                                <li class="">
                            <a href="class.parle-lexerexception.php" title="Parle\LexerException">Parle\LexerException</a>
                        </li>
                                                <li class="">
                            <a href="class.parle-parserexception.php" title="Parle\ParserException">Parle\ParserException</a>
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
