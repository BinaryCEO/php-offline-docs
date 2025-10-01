<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Unicode character properties - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/regexp.reference.unicode.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/regexp.reference.unicode.php">
 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.unicode.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reference.pcre.pattern.syntax.php">
 <link rel="prev" href="https://www.php.net/manual/en/regexp.reference.escape.php">
 <link rel="next" href="https://www.php.net/manual/en/regexp.reference.anchors.php">

 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.unicode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/regexp.reference.unicode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/regexp.reference.unicode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/regexp.reference.unicode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/regexp.reference.unicode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/regexp.reference.unicode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/regexp.reference.unicode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/regexp.reference.unicode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/regexp.reference.unicode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/regexp.reference.unicode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/regexp.reference.unicode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Unicode character properties" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Unicode character properties - Manual" />
<meta name="twitter:description" content="Unicode character properties" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Unicode character properties - Manual" />
<meta itemprop="description" content="Unicode character properties" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Unicode character properties" />

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
        <a href="regexp.reference.anchors.php">
          Anchors &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="regexp.reference.escape.php">
          &laquo; Escape sequences        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='pcre.pattern.php'>PCRE Patterns</a></li>      <li><a href='reference.pcre.pattern.syntax.php'>PCRE regex syntax</a></li>      </ul>
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
            <option value='en/regexp.reference.unicode.php' selected="selected">English</option>
            <option value='de/regexp.reference.unicode.php'>German</option>
            <option value='es/regexp.reference.unicode.php'>Spanish</option>
            <option value='fr/regexp.reference.unicode.php'>French</option>
            <option value='it/regexp.reference.unicode.php'>Italian</option>
            <option value='ja/regexp.reference.unicode.php'>Japanese</option>
            <option value='pt_BR/regexp.reference.unicode.php'>Brazilian Portuguese</option>
            <option value='ru/regexp.reference.unicode.php'>Russian</option>
            <option value='tr/regexp.reference.unicode.php'>Turkish</option>
            <option value='uk/regexp.reference.unicode.php'>Ukrainian</option>
            <option value='zh/regexp.reference.unicode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="regexp.reference.unicode" class="section">
  <h2 class="title">Unicode character properties</h2>
  <p class="para">
   Since 5.1.0, three
   additional escape sequences to match generic character types are available
   when <em>UTF-8 mode</em> is selected. They are:
  </p>
  <dl>
   
    <dt><em>\p{xx}</em></dt>
    <dd><span class="simpara">a character with the xx property</span></dd>
   
   
    <dt><em>\P{xx}</em></dt>
    <dd><span class="simpara">a character without the xx property</span></dd>
   
   
    <dt><em>\X</em></dt>
    <dd><span class="simpara">an extended Unicode sequence</span></dd>
   
  </dl>
  <p class="para">
   The property names represented by <code class="literal">xx</code> above are limited
   to the Unicode general category properties. Each character has exactly one
   such property, specified by a two-letter abbreviation. For compatibility with
   Perl, negation can be specified by including a circumflex between the
   opening brace and the property name. For example, <code class="literal">\p{^Lu}</code>
   is the same as <code class="literal">\P{Lu}</code>.
  </p>
  <p class="para">
   If only one letter is specified with <code class="literal">\p</code> or
   <code class="literal">\P</code>, it includes all the properties that start with that
   letter. In this case, in the absence of negation, the curly brackets in the
   escape sequence are optional; these two examples have the same effect:
  </p>
  <div class="informalexample">
   <div class="example-contents">
<div class="annotation-interactive cdata"><pre>
\p{L}
\pL
</pre></div>
   </div>

  </div>
  <table class="doctable table">
   <caption><strong>Supported property codes</strong></caption>
   
    <thead>
     <tr>
      <th>Property</th>
      <th>Matches</th>
      <th>Notes</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><code class="literal">C</code></td>
      <td>Other</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Cc</code></td>
      <td>Control</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Cf</code></td>
      <td>Format</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Cn</code></td>
      <td>Unassigned</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Co</code></td>
      <td>Private use</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Cs</code></td>
      <td>Surrogate</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">L</code></td>
      <td>Letter</td>
      <td>
       Includes the following properties: <code class="literal">Ll</code>,
       <code class="literal">Lm</code>, <code class="literal">Lo</code>, <code class="literal">Lt</code> and
       <code class="literal">Lu</code>.
      </td>
     </tr>

     <tr>
      <td><code class="literal">Ll</code></td>
      <td>Lower case letter</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Lm</code></td>
      <td>Modifier letter</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Lo</code></td>
      <td>Other letter</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Lt</code></td>
      <td>Title case letter</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Lu</code></td>
      <td>Upper case letter</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">M</code></td>
      <td>Mark</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Mc</code></td>
      <td>Spacing mark</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Me</code></td>
      <td>Enclosing mark</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Mn</code></td>
      <td>Non-spacing mark</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">N</code></td>
      <td>Number</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Nd</code></td>
      <td>Decimal number</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Nl</code></td>
      <td>Letter number</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">No</code></td>
      <td>Other number</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">P</code></td>
      <td>Punctuation</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Pc</code></td>
      <td>Connector punctuation</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Pd</code></td>
      <td>Dash punctuation</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Pe</code></td>
      <td>Close punctuation</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Pf</code></td>
      <td>Final punctuation</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Pi</code></td>
      <td>Initial punctuation</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Po</code></td>
      <td>Other punctuation</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Ps</code></td>
      <td>Open punctuation</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">S</code></td>
      <td>Symbol</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Sc</code></td>
      <td>Currency symbol</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Sk</code></td>
      <td>Modifier symbol</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Sm</code></td>
      <td>Mathematical symbol</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">So</code></td>
      <td>Other symbol</td>
      <td>Includes emojis</td>
     </tr>

     <tr>
      <td><code class="literal">Z</code></td>
      <td>Separator</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Zl</code></td>
      <td>Line separator</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Zp</code></td>
      <td>Paragraph separator</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><code class="literal">Zs</code></td>
      <td>Space separator</td>
      <td class="empty">&nbsp;</td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   Extended properties such as <code class="literal">InMusicalSymbols</code> are not
   supported by PCRE.
  </p>
  <p class="para">
   Specifying case-insensitive (caseless) matching does not affect these escape sequences.
   For example, <code class="literal">\p{Lu}</code> always matches only upper case letters.
  </p>
  <p class="para">
   Sets of Unicode characters are defined as belonging to certain scripts. A
   character from one of these sets can be matched using a script name. For
   example:
  </p>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><code class="literal">\p{Greek}</code></span>
   </li>
   <li class="listitem">
    <span class="simpara"><code class="literal">\P{Han}</code></span>
   </li>
  </ul>
  <p class="para">
   Those that are not part of an identified script are lumped together as
   <code class="literal">Common</code>. The current list of scripts is:
  </p>
  <table class="doctable table">
   <caption><strong>Supported scripts</strong></caption>
   
    <tbody class="tbody">
     <tr>
      <td><code class="literal">Arabic</code></td>
      <td><code class="literal">Armenian</code></td>
      <td><code class="literal">Avestan</code></td>
      <td><code class="literal">Balinese</code></td>
      <td><code class="literal">Bamum</code></td>
     </tr>

     <tr>
      <td><code class="literal">Batak</code></td>
      <td><code class="literal">Bengali</code></td>
      <td><code class="literal">Bopomofo</code></td>
      <td><code class="literal">Brahmi</code></td>
      <td><code class="literal">Braille</code></td>
     </tr>

     <tr>
      <td><code class="literal">Buginese</code></td>
      <td><code class="literal">Buhid</code></td>
      <td><code class="literal">Canadian_Aboriginal</code></td>
      <td><code class="literal">Carian</code></td>
      <td><code class="literal">Chakma</code></td>
     </tr>

     <tr>
      <td><code class="literal">Cham</code></td>
      <td><code class="literal">Cherokee</code></td>
      <td><code class="literal">Common</code></td>
      <td><code class="literal">Coptic</code></td>
      <td><code class="literal">Cuneiform</code></td>
     </tr>

     <tr>
      <td><code class="literal">Cypriot</code></td>
      <td><code class="literal">Cyrillic</code></td>
      <td><code class="literal">Deseret</code></td>
      <td><code class="literal">Devanagari</code></td>
      <td><code class="literal">Egyptian_Hieroglyphs</code></td>
     </tr>

     <tr>
      <td><code class="literal">Ethiopic</code></td>
      <td><code class="literal">Georgian</code></td>
      <td><code class="literal">Glagolitic</code></td>
      <td><code class="literal">Gothic</code></td>
      <td><code class="literal">Greek</code></td>
     </tr>

     <tr>
      <td><code class="literal">Gujarati</code></td>
      <td><code class="literal">Gurmukhi</code></td>
      <td><code class="literal">Han</code></td>
      <td><code class="literal">Hangul</code></td>
      <td><code class="literal">Hanunoo</code></td>
     </tr>

     <tr>
      <td><code class="literal">Hebrew</code></td>
      <td><code class="literal">Hiragana</code></td>
      <td><code class="literal">Imperial_Aramaic</code></td>
      <td><code class="literal">Inherited</code></td>
      <td><code class="literal">Inscriptional_Pahlavi</code></td>
     </tr>

     <tr>
      <td><code class="literal">Inscriptional_Parthian</code></td>
      <td><code class="literal">Javanese</code></td>
      <td><code class="literal">Kaithi</code></td>
      <td><code class="literal">Kannada</code></td>
      <td><code class="literal">Katakana</code></td>
     </tr>

     <tr>
      <td><code class="literal">Kayah_Li</code></td>
      <td><code class="literal">Kharoshthi</code></td>
      <td><code class="literal">Khmer</code></td>
      <td><code class="literal">Lao</code></td>
      <td><code class="literal">Latin</code></td>
     </tr>

     <tr>
      <td><code class="literal">Lepcha</code></td>
      <td><code class="literal">Limbu</code></td>
      <td><code class="literal">Linear_B</code></td>
      <td><code class="literal">Lisu</code></td>
      <td><code class="literal">Lycian</code></td>
     </tr>

     <tr>
      <td><code class="literal">Lydian</code></td>
      <td><code class="literal">Malayalam</code></td>
      <td><code class="literal">Mandaic</code></td>
      <td><code class="literal">Meetei_Mayek</code></td>
      <td><code class="literal">Meroitic_Cursive</code></td>
     </tr>

     <tr>
      <td><code class="literal">Meroitic_Hieroglyphs</code></td>
      <td><code class="literal">Miao</code></td>
      <td><code class="literal">Mongolian</code></td>
      <td><code class="literal">Myanmar</code></td>
      <td><code class="literal">New_Tai_Lue</code></td>
     </tr>

     <tr>
      <td><code class="literal">Nko</code></td>
      <td><code class="literal">Ogham</code></td>
      <td><code class="literal">Old_Italic</code></td>
      <td><code class="literal">Old_Persian</code></td>
      <td><code class="literal">Old_South_Arabian</code></td>
     </tr>

     <tr>
      <td><code class="literal">Old_Turkic</code></td>
      <td><code class="literal">Ol_Chiki</code></td>
      <td><code class="literal">Oriya</code></td>
      <td><code class="literal">Osmanya</code></td>
      <td><code class="literal">Phags_Pa</code></td>
     </tr>

     <tr>
      <td><code class="literal">Phoenician</code></td>
      <td><code class="literal">Rejang</code></td>
      <td><code class="literal">Runic</code></td>
      <td><code class="literal">Samaritan</code></td>
      <td><code class="literal">Saurashtra</code></td>
     </tr>

     <tr>
      <td><code class="literal">Sharada</code></td>
      <td><code class="literal">Shavian</code></td>
      <td><code class="literal">Sinhala</code></td>
      <td><code class="literal">Sora_Sompeng</code></td>
      <td><code class="literal">Sundanese</code></td>
     </tr>

     <tr>
      <td><code class="literal">Syloti_Nagri</code></td>
      <td><code class="literal">Syriac</code></td>
      <td><code class="literal">Tagalog</code></td>
      <td><code class="literal">Tagbanwa</code></td>
      <td><code class="literal">Tai_Le</code></td>
     </tr>

     <tr>
      <td><code class="literal">Tai_Tham</code></td>
      <td><code class="literal">Tai_Viet</code></td>
      <td><code class="literal">Takri</code></td>
      <td><code class="literal">Tamil</code></td>
      <td><code class="literal">Telugu</code></td>
     </tr>

     <tr>
      <td><code class="literal">Thaana</code></td>
      <td><code class="literal">Thai</code></td>
      <td><code class="literal">Tibetan</code></td>
      <td><code class="literal">Tifinagh</code></td>
      <td><code class="literal">Ugaritic</code></td>
     </tr>

     <tr>
      <td><code class="literal">Vai</code></td>
      <td><code class="literal">Yi</code></td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
      <td class="empty">&nbsp;</td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   The <code class="literal">\X</code> escape matches a Unicode extended grapheme
   cluster. An extended grapheme cluster is one or more Unicode characters
   that combine to form a single glyph. In effect, this can be thought of as
   the Unicode equivalent of <code class="literal">.</code> as it will match one
   composed character, regardless of how many individual characters are
   actually used to render it.
  </p>
  <p class="para">
   In versions of PCRE older than 8.32 (which corresponds to PHP versions
   before 5.4.14 when using the bundled PCRE library), <code class="literal">\X</code>
   is equivalent to <code class="literal">(?&gt;\PM\pM*)</code>. That is, it matches a
   character without the &quot;mark&quot; property, followed by zero or more characters
   with the &quot;mark&quot; property, and treats the sequence as an atomic group (see
   below). Characters with the &quot;mark&quot; property are typically accents that
   affect the preceding character.
  </p>
  <p class="para">
   Matching characters by Unicode property is not fast, because PCRE has
   to search a structure that contains data for over fifteen thousand
   characters. That is why the traditional escape sequences such as
   <code class="literal">\d</code> and <code class="literal">\w</code> do not use Unicode properties
   in PCRE.
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/pattern.syntax.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fregexp.reference.unicode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=regexp.reference.unicode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.unicode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118693">  <div class="votes">
    <div id="Vu118693">
    <a href="/manual/vote-note.php?id=118693&amp;page=regexp.reference.unicode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118693">
    <a href="/manual/vote-note.php?id=118693&amp;page=regexp.reference.unicode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118693" title="78% like this...">
    21
    </div>
  </div>
  <a href="#118693" class="name">
  <strong class="user"><em>huhwatnouDONTspamPLEASE at hotmail dot com</em></strong></a><a class="genanchor" href="#118693"> &para;</a><div class="date" title="2016-01-20 09:00"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118693">
<div class="phpcode"><code><span class="html">To select UTF-8 mode for the additional escape sequences (\p{xx}, \P{xx}, and \X) , use the "u" modifier (see <a href="http://php.net/manual/en/reference.pcre.pattern.modifiers.php" rel="nofollow" target="_blank">http://php.net/manual/en/reference.pcre.pattern.modifiers.php</a>).<br /><br />I wondered why a German sharp S (ß) was marked as a control character by \p{Cc} and it took me a while to properly read the first sentence: "Since 5.1.0, three additional escape sequences to match generic character types are available when UTF-8 mode is selected. " :-$ and then to find out how to do so.</span></code></div>
  </div>
 </div>
  <div class="note" id="128778">  <div class="votes">
    <div id="Vu128778">
    <a href="/manual/vote-note.php?id=128778&amp;page=regexp.reference.unicode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128778">
    <a href="/manual/vote-note.php?id=128778&amp;page=regexp.reference.unicode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128778" title="88% like this...">
    7
    </div>
  </div>
  <a href="#128778" class="name">
  <strong class="user"><em>Steve</em></strong></a><a class="genanchor" href="#128778"> &para;</a><div class="date" title="2023-08-03 05:00"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128778">
<div class="phpcode"><code><span class="html">Examples are always useful! See <a href="https://unicodeplus.com/category" rel="nofollow" target="_blank">https://unicodeplus.com/category</a> for more.<br /><br />C    Other     <br />Cc   Control      (Unicode code points in the ranges U+0000-U+001F and U+007F-U+009F)<br />Cf   Format       (Soft hyphen (U+00AD), zero width space (U+200B), etc.)<br />Cn   Unassigned   (Any code point that is not in the Unicode table)<br />Co   Private use     <br />Cs   Surrogate    (Characters in the range U+D800 to U+DFFF, which are invalid in utf-8)<br /><br />L    Letter<br />Ll   Lower case letter (a-z, µßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ and more)<br />Lm   Modifier letter   (Letter-like characters that are usually combined with others, but here they stand alone:<br />                        ʰʱʲʳʴʵʶʷʸʹʺʻʼʽʾʿˀˁˆˇˈˉˊˋˌˍˎˏːˑˠˡˢˣˤˬˮʹͺՙ and more)<br />Lo   Other letter      (ªºƻǀǁǂǃʔ and many more ideographs and letters from unicase alphabets)<br />Lt   Title case letter (ǅǈǋǲᾈᾉᾊᾋᾌᾍᾎᾏᾘᾙᾚᾛᾜᾝᾞᾟᾨᾩᾪᾫᾬᾭᾮᾯᾼῌῼ)<br />Lu   Upper case letter (A-Z, ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ and more)<br />L&amp;   Ordinary letter   (Any character that has the Lu, Ll, or Lt property)<br /><br />M    Mark<br />Mc   Spacing mark      (None in latin scripts)<br />Me   Enclosing mark    (Combining enclosing square (U+20DE) like in a⃞ , combining enclosing circle backslash (U+20E0) like in a⃠)<br />Mn   Non-spacing mark  (Combining diacritical marks U+0300-U+036f, like the accents on this letter a: áâãāa̅ăȧäảåa̋ǎa̍a̎ȁa̐ȃ)<br /><br />N    Number      <br />Nd   Decimal number (0123456789, ٠١٢٣٤٥٦٧٨٩ and digits in many other scripts.)<br />Nl   Letter number  (ⅠⅡⅢⅣⅤⅥⅦⅧⅨⅩⅪⅫⅬⅭⅮⅯⅰⅱⅲⅳⅴⅵⅶⅷⅸⅹⅺⅻⅼⅽⅾⅿ and some more)<br />No   Other number   (⁰¹²³⁴⁵⁶⁷⁸⁹ ₀₁₂₃₄₅₆₇₈₉ ½⅓⅔¼¾⅕⅖⅗⅘⅙⅚⅐⅛⅜⅝⅞⅑⅒ ①②③④⑤⑥⑦⑧⑨⑩⑪⑫⑬⑭⑮⑯⑰⑱⑲⑳, etc.)<br /><br />P    Punctuation      <br />Pc   Connector punctuation (_ underscore (U+005F), ‿ undertie U+203F, ⁀ character tie (U+2040), etc.)<br />Pd   Dash punctuation      (- hyphen-minus (U+002D), ‐ hyphen (U+2010), ‑ non-breaking hyphen (U+2011), ‒ figure dash (U+2012),<br />                            – en dash (U+2013), — em dash (U+2014), ― horizontal bar (U+2015), etc.)<br />Pe   Close punctuation     (right parenthesis, bracket, or brace: `)` (U+0029), `]` (U+005D), `}` (U+007D), etc.) <br />Pf   Final punctuation     (right quotation marks: » (U+00BB), ’ (U+2019), ” (U+201D), etc.)<br />Pi   Initial punctuation   (left  quotation marks: « (U+00AB), ‘ (U+2018), “ (U+201C), etc.)<br />Po   Other punctuation     (!"#%&amp;'*,./:;?@\¡§¶·¿)<br />Ps   Open punctuation      (left parenthesis, bracket, or brace: `(` (U+0028), `[` (U+005B), `{` (U+007B), etc.) <br /><br />S    Symbol      <br />Sc   Currency symbol     ($¢£¤¥, ₠ ₡ ₢ ₣ ₤ ₥ ₦ ₧ ₨ ₩ ₪ ₫ € ₭ ₮ ₯ ₰ ₱ ₲ ₳ ₴ ₵ ₶ ₷ ₸ ₹ ₺ ₻ ₼ ₽ ₾ ₿ (U+20A0-U+20BF), etc.)<br />Sk   Modifier symbol     (Symbol-like characters that are usually combined with others, but here they stand alone:<br />                          ^`¨¯´¸ and more)<br />Sm   Mathematical symbol (+&lt;=&gt;|~¬±×÷϶ and many more)<br />So   Other symbol        (¦ broken bar (U+00A6), © copyright sign (U+00A9), ® registered sign (U+00AE), ° degree sign (U+00B0);<br />                          arrows, signs, emojis and many many more)<br /><br />Z    Separator      <br />Zl   Line separator      (line separator (U+2028))<br />Zp   Paragraph separator (paragraph separator (U+2029))<br />Zs   Space separator     (space, no-break space, en quad, em quad, en space, em space, figure space, thin space, hair space, etc.)</span></code></div>
  </div>
 </div>
  <div class="note" id="97792">  <div class="votes">
    <div id="Vu97792">
    <a href="/manual/vote-note.php?id=97792&amp;page=regexp.reference.unicode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97792">
    <a href="/manual/vote-note.php?id=97792&amp;page=regexp.reference.unicode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97792" title="74% like this...">
    13
    </div>
  </div>
  <a href="#97792" class="name">
  <strong class="user"><em>mercury at caucasus dot net</em></strong></a><a class="genanchor" href="#97792"> &para;</a><div class="date" title="2010-05-08 10:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97792">
<div class="phpcode"><code><span class="html">An excellent article explaining all these properties can be found here: <a href="http://www.regular-expressions.info/unicode.html" rel="nofollow" target="_blank">http://www.regular-expressions.info/unicode.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="113972">  <div class="votes">
    <div id="Vu113972">
    <a href="/manual/vote-note.php?id=113972&amp;page=regexp.reference.unicode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113972">
    <a href="/manual/vote-note.php?id=113972&amp;page=regexp.reference.unicode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113972" title="58% like this...">
    10
    </div>
  </div>
  <a href="#113972" class="name">
  <strong class="user"><em>xuantoaiph at gmail dot com</em></strong></a><a class="genanchor" href="#113972"> &para;</a><div class="date" title="2013-12-24 08:03"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113972">
<div class="phpcode"><code><span class="html">My country, Vietnam, have our own alphabet table:<br /><a href="http://en.wikipedia.org/wiki/Vietnamese_alphabet" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Vietnamese_alphabet</a><br />I hope PHP will support better than in Vietnamese.</span></code></div>
  </div>
 </div>
  <div class="note" id="102003">  <div class="votes">
    <div id="Vu102003">
    <a href="/manual/vote-note.php?id=102003&amp;page=regexp.reference.unicode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102003">
    <a href="/manual/vote-note.php?id=102003&amp;page=regexp.reference.unicode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102003" title="60% like this...">
    4
    </div>
  </div>
  <a href="#102003" class="name">
  <strong class="user"><em>o_shes01 at uni-muenster dot de</em></strong></a><a class="genanchor" href="#102003"> &para;</a><div class="date" title="2011-01-22 06:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102003">
<div class="phpcode"><code><span class="html">For those who wonder: 'letter_titlecase' applies to digraphs/trigraphs, where capitalization involves only the first letter. <br />For example, there are three codepoints for the "LJ" digraph in Unicode: <br />  (*) uppercase "LJ": U+01C7 <br />  (*) titlecase "Lj": U+01C8 <br />  (*) lowercase "lj": U+01C9</span></code></div>
  </div>
 </div>
  <div class="note" id="121682">  <div class="votes">
    <div id="Vu121682">
    <a href="/manual/vote-note.php?id=121682&amp;page=regexp.reference.unicode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121682">
    <a href="/manual/vote-note.php?id=121682&amp;page=regexp.reference.unicode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121682" title="57% like this...">
    3
    </div>
  </div>
  <a href="#121682" class="name">
  <strong class="user"><em>php at lnx-bsp dot net</em></strong></a><a class="genanchor" href="#121682"> &para;</a><div class="date" title="2017-09-25 05:53"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121682">
<div class="phpcode"><code><span class="html">Not made clear in the top of page explanation, but these escaped character classes can be included within square brackets to make a broader character class. For example:<br /><br /><span class="default">&lt;?php preg_match</span><span class="keyword">( </span><span class="string">'/[\p{N}\p{L}]+/'</span><span class="keyword">, </span><span class="default">$data </span><span class="keyword">) </span><span class="default">?&gt;<br /></span><br />Will match any combination of letters and numbers.</span></code></div>
  </div>
 </div>
  <div class="note" id="96479">  <div class="votes">
    <div id="Vu96479">
    <a href="/manual/vote-note.php?id=96479&amp;page=regexp.reference.unicode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96479">
    <a href="/manual/vote-note.php?id=96479&amp;page=regexp.reference.unicode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96479" title="55% like this...">
    3
    </div>
  </div>
  <a href="#96479" class="name">
  <strong class="user"><em>suit at rebell dot at</em></strong></a><a class="genanchor" href="#96479"> &para;</a><div class="date" title="2010-03-01 05:13"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96479">
<div class="phpcode"><code><span class="html">these properties are usualy only available if PCRE is compiled with "--enable-unicode-properties"
<br />
<br />if you want to match any word but want to provide a fallback, you can do something like that: 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(@</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/\p{L}+/u'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">) {
<br />  </span><span class="comment">// fallback goes here
<br />  // for example just '/\w+/u' for a less acurate match
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=regexp.reference.unicode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.unicode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reference.pcre.pattern.syntax.php">PCRE regex syntax</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="regexp.introduction.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.delimiters.php" title="Delimiters">Delimiters</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.meta.php" title="Meta-&#8203;characters">Meta-&#8203;characters</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.escape.php" title="Escape sequences">Escape sequences</a>
                        </li>
                                                <li class="current">
                            <a href="regexp.reference.unicode.php" title="Unicode character properties">Unicode character properties</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.anchors.php" title="Anchors">Anchors</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.dot.php" title="Dot">Dot</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.character-classes.php" title="Character classes">Character classes</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.alternation.php" title="Alternation">Alternation</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.internal-options.php" title="Internal option setting">Internal option setting</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.subpatterns.php" title="Subpatterns">Subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.repetition.php" title="Repetition">Repetition</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.back-references.php" title="Back references">Back references</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.assertions.php" title="Assertions">Assertions</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.onlyonce.php" title="Once-&#8203;only subpatterns">Once-&#8203;only subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.conditional.php" title="Conditional subpatterns">Conditional subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.comments.php" title="Comments">Comments</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.recursive.php" title="Recursive patterns">Recursive patterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.performance.php" title="Performance">Performance</a>
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
