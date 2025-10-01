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

 <link rel="canonical" href="https://www.php.net/manual/en/language.types.string.php">
 <link rel="shorturl" href="https://www.php.net/types.string">
 <link rel="alternate" href="https://www.php.net/types.string" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.types.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.types.float.php">
 <link rel="next" href="https://www.php.net/manual/en/language.types.numeric-strings.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.types.string.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.types.string.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.types.string.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.types.string.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.types.string.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.types.string.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.types.string.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.types.string.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.types.string.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.types.string.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.types.string.php" hreflang="zh">

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
        <a href="language.types.numeric-strings.php">
          Numeric strings &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.types.float.php">
          &laquo; Floating point numbers        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.types.php'>Types</a></li>      </ul>
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
            <option value='en/language.types.string.php' selected="selected">English</option>
            <option value='de/language.types.string.php'>German</option>
            <option value='es/language.types.string.php'>Spanish</option>
            <option value='fr/language.types.string.php'>French</option>
            <option value='it/language.types.string.php'>Italian</option>
            <option value='ja/language.types.string.php'>Japanese</option>
            <option value='pt_BR/language.types.string.php'>Brazilian Portuguese</option>
            <option value='ru/language.types.string.php'>Russian</option>
            <option value='tr/language.types.string.php'>Turkish</option>
            <option value='uk/language.types.string.php'>Ukrainian</option>
            <option value='zh/language.types.string.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.types.string" class="sect1">
 <h2 class="title">Strings</h2>

 <p class="para">
  A <span class="type"><a href="language.types.string.php" class="type string">string</a></span> is a series of characters, where a character is
  the same as a byte. This means that PHP only supports a 256-character set,
  and hence does not offer native Unicode support. See
  <a href="language.types.string.php#language.types.string.details" class="link">details of the string
  type</a>.
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   On 32-bit builds, a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> can be as large as up to 2GB
   (2147483647 bytes maximum)
  </span>
 </p></blockquote>

 <div class="sect2" id="language.types.string.syntax">
  <h3 class="title">Syntax</h3>

  <p class="para">
   A <span class="type"><a href="language.types.string.php" class="type string">string</a></span> literal can be specified in four different ways:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <a href="language.types.string.php#language.types.string.syntax.single" class="link">single quoted</a>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <a href="language.types.string.php#language.types.string.syntax.double" class="link">double quoted</a>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <a href="language.types.string.php#language.types.string.syntax.heredoc" class="link">heredoc syntax</a>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <a href="language.types.string.php#language.types.string.syntax.nowdoc" class="link">nowdoc syntax</a>
    </span>
   </li>
  </ul>

  <div class="sect3" id="language.types.string.syntax.single">
   <h4 class="title">Single quoted</h4>

   <p class="para">
    The simplest way to specify a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> is to enclose it in single
    quotes (the character <code class="literal">&#039;</code>).
   </p>

   <p class="para">
    To specify a literal single quote, escape it with a backslash
    (<code class="literal">\</code>). To specify a literal backslash, double it
    (<code class="literal">\\</code>). All other instances of backslash will be treated
    as a literal backslash: this means that the other escape sequences you
    might be used to, such as <code class="literal">\r</code> or <code class="literal">\n</code>,
    will be output literally as specified rather than having any special
    meaning.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Unlike the <a href="language.types.string.php#language.types.string.syntax.double" class="link">double-quoted</a>
     and <a href="language.types.string.php#language.types.string.syntax.heredoc" class="link">heredoc</a> syntaxes,
     <a href="language.variables.php" class="link">variables</a> and escape sequences
     for special characters will <em>not</em> be expanded when they
     occur in single quoted <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s.
    </span>
   </p></blockquote>

   <div class="example" id="example-51">
    <p><strong>Example #1 Syntax Variants</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'this is a simple string'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">'You can also have embedded newlines in<br />strings this way as it is<br />okay to do'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: Arnold once said: "I'll be back"<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Arnold once said: "I\'ll be back"'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: You deleted C:\*.*?<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'You deleted C:\\*.*?'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: You deleted C:\*.*?<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'You deleted C:\*.*?'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: This will not expand: \n a newline<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'This will not expand: \n a newline'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: Variables do not $expand $either<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Variables do not $expand $either'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

  </div>

  <div class="sect3" id="language.types.string.syntax.double">
   <h4 class="title">Double quoted</h4>

   <p class="para">
    If the <span class="type"><a href="language.types.string.php" class="type string">string</a></span> is enclosed in double-quotes (<code class="literal">&quot;</code>), PHP will
    interpret the following escape sequences for special characters:
   </p>

   <table class="doctable table">
    <caption><strong>Escaped characters</strong></caption>

    
     <thead>
      <tr>
       <th>Sequence</th>
       <th>Meaning</th>
      </tr>

     </thead>


     <tbody class="tbody">
      <tr>
       <td><code class="literal">\n</code></td>
       <td>linefeed (LF or 0x0A (10) in ASCII)</td>
      </tr>

      <tr>
       <td><code class="literal">\r</code></td>
       <td>carriage return (CR or 0x0D (13) in ASCII)</td>
      </tr>

      <tr>
       <td><code class="literal">\t</code></td>
       <td>horizontal tab (HT or 0x09 (9) in ASCII)</td>
      </tr>

      <tr>
       <td><code class="literal">\v</code></td>
       <td>vertical tab (VT or 0x0B (11) in ASCII)</td>
      </tr>

      <tr>
       <td><code class="literal">\e</code></td>
       <td>escape (ESC or 0x1B (27) in ASCII)</td>
      </tr>

      <tr>
       <td><code class="literal">\f</code></td>
       <td>form feed (FF or 0x0C (12) in ASCII)</td>
      </tr>

      <tr>
       <td><code class="literal">\\</code></td>
       <td>backslash</td>
      </tr>

      <tr>
       <td><code class="literal">\$</code></td>
       <td>dollar sign</td>
      </tr>

      <tr>
       <td><code class="literal">\&quot;</code></td>
       <td>double-quote</td>
      </tr>

      <tr>
       <td><code class="literal">\[0-7]{1,3}</code></td>
       <td>
        Octal: the sequence of characters matching the regular expression <code class="literal">[0-7]{1,3}</code>
        is a character in octal notation (e.g. <code class="literal">&quot;\101&quot; === &quot;A&quot;</code>),
        which silently overflows to fit in a byte (e.g. <code class="literal">&quot;\400&quot; === &quot;\000&quot;</code>)
       </td>
      </tr>

      <tr>
       <td><code class="literal">\x[0-9A-Fa-f]{1,2}</code></td>
       <td>
        Hexadecimal: the sequence of characters matching the regular expression
        <code class="literal">[0-9A-Fa-f]{1,2}</code> is a character in hexadecimal notation
        (e.g. <code class="literal">&quot;\x41&quot; === &quot;A&quot;</code>)
       </td>
      </tr>

      <tr>
       <td><code class="literal">\u{[0-9A-Fa-f]+}</code></td>
       <td>
        Unicode: the sequence of characters matching the regular expression <code class="literal">[0-9A-Fa-f]+</code>
        is a Unicode codepoint, which will be output to the string as that codepoint&#039;s UTF-8 representation.
        The braces are required in the sequence. E.g. <code class="literal">&quot;\u{41}&quot; === &quot;A&quot;</code>
       </td>
      </tr>

     </tbody>
    
   </table>


   <p class="para">
    As in single quoted <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s, escaping any other character will
    result in the backslash being printed too.
   </p>

   <p class="para">
    The most important feature of double-quoted <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s is the fact
    that variable names will be expanded. See
    <a href="language.types.string.php#language.types.string.parsing" class="link">string interpolation</a> for
    details.
   </p>
  </div>

  <div class="sect3" id="language.types.string.syntax.heredoc">
   <h4 class="title">Heredoc</h4>

   <p class="simpara">
    A third way to delimit <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s is the heredoc syntax:
    <code class="literal">&lt;&lt;&lt;</code>. After this operator, an identifier is
    provided, then a newline. The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> itself follows, and then
    the same identifier again to close the quotation.
   </p>

   <p class="simpara">
    The closing identifier may be indented by space or tab, in which case
    the indentation will be stripped from all lines in the doc string.
    Prior to PHP 7.3.0, the closing identifier <em>must</em>
    begin in the first column of the line.
   </p>

   <p class="simpara">
    Also, the closing identifier must follow the same naming rules as any
    other label in PHP: it must contain only alphanumeric characters and
    underscores, and must start with a non-digit character or underscore.
   </p>

   <div class="example" id="example-52">
    <p><strong>Example #2 Basic Heredoc example as of PHP 7.3.0</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// no indentation<br /></span><span style="color: #007700">echo &lt;&lt;&lt;END<br /></span><span style="color: #DD0000">      a<br />     b<br />    c<br />\n<br /></span><span style="color: #007700">END;<br /><br /></span><span style="color: #FF8000">// 4 spaces of indentation<br /></span><span style="color: #007700">echo &lt;&lt;&lt;END<br /></span><span style="color: #DD0000">      a<br />     b<br />    c<br /></span><span style="color: #007700">    END;</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example in PHP 7.3:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
      a
     b
    c

  a
 b
c
</pre></div>
    </div>
   </div>

   <p class="simpara">
    If the closing identifier is indented further than any lines of the body, then a <span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span> will be thrown:
   </p>

   <div class="example" id="example-53">
    <p><strong>Example #3 Closing identifier must not be indented further than any lines of the body</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo &lt;&lt;&lt;END<br /></span><span style="color: #DD0000">  a<br /> b<br />c<br /></span><span style="color: #007700">   END;</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example in PHP 7.3:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Parse error: Invalid body indentation level (expecting an indentation level of at least 3) in example.php on line 4
</pre></div>
    </div>
   </div>

   <p class="simpara">
    If the closing identifier is indented, tabs can be used as well, however,
    tabs and spaces <em>must not</em> be intermixed regarding
    the indentation of the closing identifier and the indentation of the body
     (up to the closing identifier). In any of these cases, a <span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span> will be thrown.

    These whitespace constraints have been included because mixing tabs and
    spaces for indentation is harmful to legibility.
   </p>

   <div class="example" id="example-54">
    <p><strong>Example #4 Different indentation for body (spaces) closing identifier</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// All the following code do not work.<br /><br />// different indentation for body (spaces) ending marker (tabs)<br /></span><span style="color: #007700">{<br />    echo &lt;&lt;&lt;END<br /></span><span style="color: #DD0000">     a<br /></span><span style="color: #007700">        END;<br />}<br /><br /></span><span style="color: #FF8000">// mixing spaces and tabs in body<br /></span><span style="color: #007700">{<br />    echo &lt;&lt;&lt;END<br /></span><span style="color: #DD0000">        a<br /></span><span style="color: #007700">     END;<br />}<br /><br /></span><span style="color: #FF8000">// mixing spaces and tabs in ending marker<br /></span><span style="color: #007700">{<br />    echo &lt;&lt;&lt;END<br /></span><span style="color: #DD0000">          a<br /></span><span style="color: #007700">         END;<br />}</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example in PHP 7.3:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Parse error: Invalid indentation - tabs and spaces cannot be mixed in example.php line 8
</pre></div>
    </div>
   </div>

   <p class="simpara">
    The closing identifier for the body string is not required to be
    followed by a semicolon or newline. For example, the following code
    is allowed as of PHP 7.3.0:
   </p>

   <div class="example" id="example-55">
    <p><strong>Example #5 Continuing an expression after a closing identifier</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$values </span><span style="color: #007700">= [&lt;&lt;&lt;END<br /></span><span style="color: #DD0000">a<br />  b<br />    c<br /></span><span style="color: #007700">END, </span><span style="color: #DD0000">'d e f'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">);</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example in PHP 7.3:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
array(2) {
  [0] =&gt;
  string(11) &quot;a
  b
    c&quot;
  [1] =&gt;
  string(5) &quot;d e f&quot;
}
</pre></div>
    </div>
   </div>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     If the closing identifier was found at the start of a line, then
     regardless of whether it was a part of another word, it may be considered
     as the closing identifier and causes a <span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span>.
    </p>

    <div class="example" id="example-56">
     <p><strong>Example #6 Closing identifier in body of the string tends to cause ParseError</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$values </span><span style="color: #007700">= [&lt;&lt;&lt;END<br /></span><span style="color: #DD0000">a<br />b<br /></span><span style="color: #007700">END </span><span style="color: #0000BB">ING<br />END</span><span style="color: #007700">, </span><span style="color: #DD0000">'d e f'</span><span style="color: #007700">];</span></span></code></div>
     </div>

     <div class="example-contents"><p>Output of the above example in PHP 7.3:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Parse error: syntax error, unexpected identifier &quot;ING&quot;, expecting &quot;]&quot; in example.php on line 5
</pre></div>
     </div>
    </div>

    <p class="simpara">
     To avoid this problem, it is safe to follow the simple rule:
     <em>do not choose a word that appears in the body of the text
     as a closing identifier</em>.
    </p>

   </div>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Prior to PHP 7.3.0, it is very important to note that the line with the
     closing identifier must contain no other characters, except a semicolon
     (<code class="literal">;</code>).
     That means especially that the identifier
     <em>may not be indented</em>, and there may not be any spaces
     or tabs before or after the semicolon. It&#039;s also important to realize that
     the first character before the closing identifier must be a newline as
     defined by the local operating system. This is <code class="literal">\n</code> on
     UNIX systems, including macOS. The closing delimiter must also be
     followed by a newline.
    </p>

    <p class="simpara">
     If this rule is broken and the closing identifier is not &quot;clean&quot;, it will
     not be considered a closing identifier, and PHP will continue looking for
     one. If a proper closing identifier is not found before the end of the
     current file, a parse error will result at the last line.
    </p>

    <div class="example" id="example-57">
     <p><strong>Example #7 Invalid example, prior to PHP 7.3.0</strong></p>
     <div class="example-contents">
      
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">foo </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$bar </span><span style="color: #007700">= &lt;&lt;&lt;EOT<br /></span><span style="color: #DD0000">bar<br /></span><span style="color: #007700">    EOT;<br />}<br /></span><span style="color: #FF8000">// Identifier must not be indented<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    <div class="example" id="example-58">
     <p><strong>Example #8 Valid example, even prior to PHP 7.3.0</strong></p>
     <div class="example-contents">
      
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">foo </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$bar </span><span style="color: #007700">= &lt;&lt;&lt;EOT<br /></span><span style="color: #DD0000">bar<br /></span><span style="color: #007700">EOT;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <p class="para">
     Heredocs containing variables can not be used for initializing class properties.
    </p>

   </div>

   <p class="para">
    Heredoc text behaves just like a double-quoted <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, without
    the double quotes. This means that quotes in a heredoc do not need to be
    escaped, but the escape codes listed above can still be used. Variables are
    expanded, but the same care must be taken when expressing complex variables
    inside a heredoc as with <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s.
   </p>

   <div class="example" id="example-59">
    <p><strong>Example #9 Heredoc string quoting example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= &lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">Example of string<br />spanning multiple lines<br />using heredoc syntax.<br /></span><span style="color: #007700">EOD;<br /><br /></span><span style="color: #FF8000">/* More complex example, with variables. */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">foo<br /></span><span style="color: #007700">{<br />    var </span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br />    var </span><span style="color: #0000BB">$bar</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'Bar1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Bar2'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Bar3'</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">'MyName'</span><span style="color: #007700">;<br /><br />echo &lt;&lt;&lt;EOT<br /></span><span style="color: #DD0000">My name is "</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">". I am printing some </span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #DD0000">.<br />Now, I am printing some </span><span style="color: #007700">{</span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">.<br />This should print a capital 'A': \x41<br /></span><span style="color: #007700">EOT;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
My name is &quot;MyName&quot;. I am printing some Foo.
Now, I am printing some Bar2.
This should print a capital &#039;A&#039;: A</pre></div>
    </div>
   </div>

   <p class="para">
    It is also possible to use the Heredoc syntax to pass data to function
    arguments:
   </p>

   <div class="example" id="example-60">
    <p><strong>Example #10 Heredoc in arguments example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(array(&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">foobar!<br /></span><span style="color: #007700">EOD<br />));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="para">
    It&#039;s possible to initialize static variables and class
    properties/constants using the Heredoc syntax:
   </p>

   <div class="example" id="example-61">
    <p><strong>Example #11 Using Heredoc to initialize static values</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Static variables<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />{<br />    static </span><span style="color: #0000BB">$bar </span><span style="color: #007700">= &lt;&lt;&lt;LABEL<br /></span><span style="color: #DD0000">Nothing in here...<br /></span><span style="color: #007700">LABEL;<br />}<br /><br /></span><span style="color: #FF8000">// Class properties/constants<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">foo<br /></span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">BAR </span><span style="color: #007700">= &lt;&lt;&lt;FOOBAR<br /></span><span style="color: #DD0000">Constant example<br /></span><span style="color: #007700">FOOBAR;<br /><br />    public </span><span style="color: #0000BB">$baz </span><span style="color: #007700">= &lt;&lt;&lt;FOOBAR<br /></span><span style="color: #DD0000">Property example<br /></span><span style="color: #007700">FOOBAR;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="para">
    The opening Heredoc identifier may optionally be
    enclosed in double quotes:
   </p>

   <div class="example" id="example-62">
    <p><strong>Example #12 Using double quotes in Heredoc</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo &lt;&lt;&lt;"FOOBAR"<br /></span><span style="color: #DD0000">Hello World!<br /></span><span style="color: #007700">FOOBAR;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

  </div>

  <div class="sect3" id="language.types.string.syntax.nowdoc">
   <h4 class="title">Nowdoc</h4>

   <p class="para">
    Nowdocs are to single-quoted strings what heredocs are to double-quoted
    strings. A nowdoc is specified similarly to a heredoc, but <em>no
    String interpolation is done</em> inside a nowdoc. The construct is ideal for
    embedding PHP code or other large blocks of text without the need for
    escaping. It shares some features in common with the SGML
    <code class="literal">&lt;![CDATA[ ]]&gt;</code> construct, in that it declares a
    block of text which is not for parsing.
   </p>

   <p class="para">
    A nowdoc is identified with the same <code class="literal">&lt;&lt;&lt;</code>
    sequence used for heredocs, but the identifier which follows is enclosed in
    single quotes, e.g. <code class="literal">&lt;&lt;&lt;&#039;EOT&#039;</code>. All the rules for
    heredoc identifiers also apply to nowdoc identifiers, especially those
    regarding the appearance of the closing identifier.
   </p>

   <div class="example" id="example-63">
    <p><strong>Example #13 Nowdoc string quoting example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo &lt;&lt;&lt;'EOD'<br /></span><span style="color: #DD0000">Example of string spanning multiple lines<br />using nowdoc syntax. Backslashes are always treated literally,<br />e.g. \\ and \'.<br /></span><span style="color: #007700">EOD;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \&#039;.
</pre></div>
    </div>
   </div>

   <div class="example" id="example-64">
    <p><strong>Example #14 Nowdoc string quoting example with variables</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">foo<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$bar</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'Bar1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Bar2'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Bar3'</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">'MyName'</span><span style="color: #007700">;<br /><br />echo &lt;&lt;&lt;'EOT'<br /></span><span style="color: #DD0000">My name is "$name". I am printing some $foo-&gt;foo.<br />Now, I am printing some {$foo-&gt;bar[1]}.<br />This should not print a capital 'A': \x41<br /></span><span style="color: #007700">EOT;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
My name is &quot;$name&quot;. I am printing some $foo-&gt;foo.
Now, I am printing some {$foo-&gt;bar[1]}.
This should not print a capital &#039;A&#039;: \x41</pre></div>
    </div>
   </div>

   <div class="example" id="example-65">
    <p><strong>Example #15 Static data example</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">foo </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$bar </span><span style="color: #007700">= &lt;&lt;&lt;'EOT'<br /></span><span style="color: #DD0000">bar<br /></span><span style="color: #007700">EOT;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

  </div>

  <div class="sect3" id="language.types.string.parsing">
   <h4 class="title">String interpolation</h4>

   <p class="simpara">
    When a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> is specified in double quotes or with heredoc,
    <a href="language.variables.php" class="link">variables</a> can be substituted within it.
   </p>

   <p class="simpara">
    There are two types of syntax: a
    <a href="language.types.string.php#language.types.string.parsing.basic" class="link">basic</a> one and an
    <a href="language.types.string.php#language.types.string.parsing.advanced" class="link">advanced</a> one.
    The basic syntax is the most common and convenient. It provides a way to
    embed a variable, an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> value, or an <span class="type"><a href="language.types.object.php" class="type object">object</a></span>
    property in a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> with a minimum of effort.
   </p>

   <div class="sect4" id="language.types.string.parsing.basic">
    <h5 class="title">Basic syntax</h5>
    <p class="simpara">
     If a dollar sign (<code class="literal">$</code>) is encountered, the characters
     that follow it which can be used in a variable name will be interpreted
     as such and substituted.
    </p>
    <div class="example" id="example-66">
     <p><strong>Example #16 String Interpolation</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$juice </span><span style="color: #007700">= </span><span style="color: #DD0000">"apple"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"He drank some </span><span style="color: #0000BB">$juice</span><span style="color: #DD0000"> juice." </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
He drank some apple juice.
</pre></div>
     </div>
    </div>

    <p class="simpara">
     Formally, the structure for the basic variable substitution syntax is
     as follows:
    </p>
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive cdata"><pre>
string-variable::
     variable-name   (offset-or-property)?
   | ${   expression   }

offset-or-property::
     offset-in-string
   | property-in-string

offset-in-string::
     [   name   ]
   | [   variable-name   ]
   | [   integer-literal   ]

property-in-string::
     -&gt;  name

variable-name::
     $   name

name::
     [a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*

</pre></div>
     </div>

    </div>

    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      The <code class="literal">${ expression }</code> syntax is deprecated as of
      PHP 8.2.0, as it can be interpreted as
      <a href="language.variables.variable.php" class="link">variable variables</a>:
      <div class="informalexample">
       <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">const </span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #007700">${</span><span style="color: #0000BB">foo</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #007700">${(</span><span style="color: #0000BB">foo</span><span style="color: #007700">)}</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

       <p class="para">Output of the above example in PHP 8.2:</p>
       <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Deprecated: Using ${var} in strings is deprecated, use {$var} instead in file on line 6

Deprecated: Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead in file on line 9
string(3) &quot;foo&quot;
string(3) &quot;bar&quot;
</pre></div>
       </div>
       <p class="para">The above example will output:</p>
       <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
string(3) &quot;foo&quot;
string(3) &quot;bar&quot;
</pre></div>
       </div>
      </div>
      The <a href="language.types.string.php#language.types.string.parsing.advanced" class="link">advanced</a>
      string interpolation syntax should be used instead.
     </p>
    </div>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      If it is not possible to form a valid name the dollar sign remains
      as verbatim in the string:
     </span>
     <div class="informalexample">
      <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"No interpolation $  has happened\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"No interpolation $\n has happened\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"No interpolation $2 has happened\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <p class="para">The above example will output:</p>
      <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
No interpolation $  has happened
No interpolation $
 has happened
No interpolation $2 has happened
</pre></div>
      </div>
     </div>
    </p></blockquote>

    <div class="example" id="example-67">
     <p><strong>Example #17 Interpolating the value of the first dimension of an array or property</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$juices </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"apple"</span><span style="color: #007700">, </span><span style="color: #DD0000">"orange"</span><span style="color: #007700">, </span><span style="color: #DD0000">"string_key" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"purple"</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"He drank some </span><span style="color: #0000BB">$juices</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]</span><span style="color: #DD0000"> juice."</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"He drank some </span><span style="color: #0000BB">$juices</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]</span><span style="color: #DD0000"> juice."</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"He drank some </span><span style="color: #0000BB">$juices</span><span style="color: #007700">[</span><span style="color: #0000BB">string_key</span><span style="color: #007700">]</span><span style="color: #DD0000"> juice."</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />class </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$s </span><span style="color: #007700">= </span><span style="color: #DD0000">"string"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">"Object value: </span><span style="color: #0000BB">$o</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">s</span><span style="color: #DD0000">."</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
He drank some apple juice.
He drank some orange juice.
He drank some purple juice.
Object value: string.
</pre></div>
     </div>
    </div>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      The array key must be unquoted, and it is therefore not possible to
      refer to a constant as a key with the basic syntax. Use the
      <a href="language.types.string.php#language.types.string.parsing.advanced" class="link">advanced</a>
      syntax instead.
     </span>
    </p></blockquote>

    <p class="simpara">
     As of PHP 7.1.0 also <em>negative</em> numeric indices are
     supported.
    </p>

    <div class="example" id="example-68"><p><strong>Example #18 Negative numeric indices</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">'string'</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"The character at index -2 is </span><span style="color: #0000BB">$string</span><span style="color: #007700">[-</span><span style="color: #0000BB">2</span><span style="color: #007700">]</span><span style="color: #DD0000">."</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$string</span><span style="color: #007700">[-</span><span style="color: #0000BB">3</span><span style="color: #007700">] = </span><span style="color: #DD0000">'o'</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Changing the character at index -3 to o gives </span><span style="color: #0000BB">$string</span><span style="color: #DD0000">."</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
The character at index -2 is n.
Changing the character at index -3 to o gives strong.
</pre></div>
     </div>
    </div>

    <p class="simpara">
     For anything more complex, the
     <a href="language.types.string.php#language.types.string.parsing.advanced" class="link">advanced</a>
     syntax must be used.
    </p>
   </div>

   <div class="sect4" id="language.types.string.parsing.advanced">
    <h5 class="title">Advanced (curly) syntax</h5>

    <p class="simpara">
     The advanced syntax permits the interpolation of
     <em>variables</em> with arbitrary accessors.
    </p>

    <p class="simpara">
     Any scalar variable, array element or object property
     (<span class="modifier">static</span> or not) with a
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span> representation can be included via this syntax.
     The expression is written the same way as it would appear outside the
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, and then wrapped in <code class="literal">{</code> and
     <code class="literal">}</code>. Since <code class="literal">{</code> can not be escaped, this
     syntax will only be recognised when the <code class="literal">$</code> immediately
     follows the <code class="literal">{</code>. Use <code class="literal">{\$</code> to get a
     literal <code class="literal">{$</code>. Some examples to make it clear:
    </p>

    <div class="example" id="example-69">
     <p><strong>Example #19 Curly Syntax</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">const </span><span style="color: #0000BB">DATA_KEY </span><span style="color: #007700">= </span><span style="color: #DD0000">'const-key'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$great </span><span style="color: #007700">= </span><span style="color: #DD0000">'fantastic'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'1'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'2'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'3'</span><span style="color: #007700">,<br />    [</span><span style="color: #0000BB">41</span><span style="color: #007700">, </span><span style="color: #0000BB">42</span><span style="color: #007700">, </span><span style="color: #0000BB">43</span><span style="color: #007700">],<br />    </span><span style="color: #DD0000">'key' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Indexed value'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'const-key' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Key with minus sign'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'foo' </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'foo1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'foo2'</span><span style="color: #007700">, </span><span style="color: #DD0000">'foo3'</span><span style="color: #007700">]<br />];<br /><br /></span><span style="color: #FF8000">// Won't work, outputs: This is { fantastic}<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"This is { </span><span style="color: #0000BB">$great</span><span style="color: #DD0000">}"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Works, outputs: This is fantastic<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"This is </span><span style="color: #007700">{</span><span style="color: #0000BB">$great</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />class </span><span style="color: #0000BB">Square </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$width</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">int $width</span><span style="color: #007700">) { </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width </span><span style="color: #007700">= </span><span style="color: #0000BB">$width</span><span style="color: #007700">; }<br />}<br /><br /></span><span style="color: #0000BB">$square </span><span style="color: #007700">= new </span><span style="color: #0000BB">Square</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Works<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"This square is </span><span style="color: #007700">{</span><span style="color: #0000BB">$square</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width</span><span style="color: #007700">}</span><span style="color: #DD0000">00 centimeters wide."</span><span style="color: #007700">;<br /><br /><br /></span><span style="color: #FF8000">// Works, quoted keys only work using the curly brace syntax<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"This works: </span><span style="color: #007700">{</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">]}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br /><br /></span><span style="color: #FF8000">// Works<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"This works: </span><span style="color: #007700">{</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"This works: </span><span style="color: #007700">{</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">DATA_KEY</span><span style="color: #007700">]}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// When using multidimensional arrays, always use braces around arrays<br />// when inside of strings<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"This works: </span><span style="color: #007700">{</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"This works: </span><span style="color: #007700">{</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">values</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"This works: </span><span style="color: #007700">{</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$staticProp</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Won't work, outputs: C:\directory\{fantastic}.txt<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"C:\directory\{</span><span style="color: #0000BB">$great</span><span style="color: #DD0000">}.txt"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Works, outputs: C:\directory\fantastic.txt<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"C:\\directory\\</span><span style="color: #007700">{</span><span style="color: #0000BB">$great</span><span style="color: #007700">}</span><span style="color: #DD0000">.txt"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      As this syntax allows arbitrary expressions it is possible to use
      <a href="language.variables.variable.php" class="link">variable variables</a>
      within the advanced syntax.
     </span>
    </p></blockquote>
   </div>
  </div>

  <div class="sect3" id="language.types.string.substr">
   <h4 class="title">String access and modification by character</h4>

   <p class="para">
    Characters within <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s may be accessed and modified by
    specifying the zero-based offset of the desired character after the
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> using square <span class="type"><a href="language.types.array.php" class="type array">array</a></span> brackets, as in
    <var class="varname">$str[42]</var>. Think of a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> as an
    <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of characters for this purpose. The functions
    <span class="function"><a href="function.substr.php" class="function">substr()</a></span> and <span class="function"><a href="function.substr-replace.php" class="function">substr_replace()</a></span>
    can be used when you want to extract or replace more than 1 character.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     As of PHP 7.1.0, negative string offsets are also supported. These specify
     the offset from the end of the string.
     Formerly, negative offsets emitted <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> for reading
     (yielding an empty string) and <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> for writing
     (leaving the string untouched).
    </span>
   </p></blockquote>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Prior to PHP 8.0.0, <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s could also be accessed using braces, as in
     <var class="varname">$str{42}</var>, for the same purpose.
     This curly brace syntax was deprecated as of PHP 7.4.0 and no longer supported as of PHP 8.0.0.
    </span>
   </p></blockquote>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Writing to an out of range offset pads the string with spaces.
     Non-integer types are converted to integer.
     Illegal offset type emits <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
     Only the first character of an assigned string is used.
     As of PHP 7.1.0, assigning an empty string throws a fatal error. Formerly,
     it assigned a NULL byte.
    </p>
   </div>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Internally, PHP strings are byte arrays. As a result, accessing or
     modifying a string using array brackets is not multi-byte safe, and
     should only be done with strings that are in a single-byte encoding such
     as ISO-8859-1.
    </p>
   </div>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     As of PHP 7.1.0, applying the empty index operator on an empty string throws a fatal
     error. Formerly, the empty string was silently converted to an array.
    </span>
   </p></blockquote>

   <div class="example" id="example-70">
    <p><strong>Example #20 Some string examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Get the first character of a string<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'This is a test.'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$first </span><span style="color: #007700">= </span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$first</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Get the third character of a string<br /></span><span style="color: #0000BB">$third </span><span style="color: #007700">= </span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$third</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Get the last character of a string.<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'This is still a test.'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$last </span><span style="color: #007700">= </span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$last</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Modify the last character of a string<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'Look at the sea'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #DD0000">'e'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="para">
    String offsets have to either be integers or integer-like strings,
    otherwise a warning will be thrown.
   </p>

   <div class="example" id="example-71">
    <p><strong>Example #21 Example of Illegal String Offsets</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'abc'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$keys </span><span style="color: #007700">= [ </span><span style="color: #DD0000">'1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">, </span><span style="color: #DD0000">'x'</span><span style="color: #007700">, </span><span style="color: #DD0000">'1x' </span><span style="color: #007700">];<br /><br />foreach (</span><span style="color: #0000BB">$keys </span><span style="color: #007700">as </span><span style="color: #0000BB">$keyToTry</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">$keyToTry</span><span style="color: #007700">]));<br /><br />    try {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">$keyToTry</span><span style="color: #007700">]);<br />    } catch (</span><span style="color: #0000BB">TypeError $e</span><span style="color: #007700">) {<br />        echo </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br /><br />    echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
string(1) &quot;b&quot;

bool(false)
Cannot access offset of type string on string

bool(false)
Cannot access offset of type string on string

bool(false)

Warning: Illegal string offset &quot;1x&quot; in Standard input code on line 10
string(1) &quot;b&quot;
</pre></div>
    </div>
   </div>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Accessing variables of other types (not including arrays or objects
     implementing the appropriate interfaces) using <code class="literal">[]</code> or
     <code class="literal">{}</code> silently returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
    </p>
   </p></blockquote>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Characters within string literals can be accessed
     using <code class="literal">[]</code> or <code class="literal">{}</code>.
    </p>
   </p></blockquote>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Accessing characters within string literals using the
     <code class="literal">{}</code> syntax has been deprecated in PHP 7.4.
     This has been removed in PHP 8.0.
    </p>
   </p></blockquote>
  </div>
 </div>

 <div class="sect2" id="language.types.string.useful-funcs">
  <h3 class="title">Useful functions and operators</h3>

  <p class="para">
   <span class="type"><a href="language.types.string.php" class="type String">String</a></span>s may be concatenated using the &#039;.&#039; (dot) operator. Note
   that the &#039;+&#039; (addition) operator will <em>not</em> work for this.
   See <a href="language.operators.string.php" class="link">String operators</a> for
   more information.
  </p>

  <p class="para">
   There are a number of useful functions for <span class="type"><a href="language.types.string.php" class="type string">string</a></span> manipulation.
  </p>

  <p class="simpara">
   See the <a href="ref.strings.php" class="link">string functions section</a> for
   general functions, and the <a href="ref.pcre.php" class="link">Perl-compatible regular
   expression functions</a> for advanced find &amp; replace functionality.
  </p>

  <p class="simpara">
   There are also <a href="ref.url.php" class="link">functions for URL strings</a>, and
   functions to encrypt/decrypt strings
   (<a href="ref.sodium.php" class="link">Sodium</a> and
   <a href="ref.hash.php" class="link">Hash</a>).
  </p>

  <p class="simpara">
   Finally, see also the <a href="ref.ctype.php" class="link">character type
   functions</a>.
  </p>
 </div>

 <div class="sect2" id="language.types.string.casting">
  <h3 class="title">Converting to string</h3>

  <p class="para">
   A value can be converted to a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> using the
   <code class="literal">(string)</code> cast or the <span class="function"><a href="function.strval.php" class="function">strval()</a></span> function.
   <span class="type"><a href="language.types.string.php" class="type String">String</a></span> conversion is automatically done in the scope of an
   expression where a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> is needed. This happens when using the
   <span class="function"><a href="function.echo.php" class="function">echo</a></span> or <span class="function"><a href="function.print.php" class="function">print</a></span> functions, or when a
   variable is compared to a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>. The sections on
   <a href="language.types.php" class="link">Types</a> and
   <a href="language.types.type-juggling.php" class="link">Type Juggling</a> will make
   the following clearer. See also the <span class="function"><a href="function.settype.php" class="function">settype()</a></span> function.
  </p>

  <p class="para">
   A <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> value is converted to the <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   <code class="literal">&quot;1&quot;</code>. <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is converted to
   <code class="literal">&quot;&quot;</code> (the empty string). This allows conversion back and
   forth between <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> and <span class="type"><a href="language.types.string.php" class="type string">string</a></span> values.
  </p>

  <p class="para">
   An <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> or <span class="type"><a href="language.types.float.php" class="type float">float</a></span> is converted to a
   <span class="type"><a href="language.types.string.php" class="type string">string</a></span> representing the number textually (including the
   exponent part for <span class="type"><a href="language.types.float.php" class="type float">float</a></span>s). Floating point numbers can be
   converted using exponential notation (<code class="literal">4.1E+6</code>).
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    As of PHP 8.0.0, the decimal point character is always
    a period (&quot;<code class="literal">.</code>&quot;). Prior to PHP 8.0.0,
    the decimal point character is defined in the script&#039;s locale (category
    LC_NUMERIC). See the <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span> function.
   </p>
  </p></blockquote>

  <p class="para">
   <span class="type"><a href="language.types.array.php" class="type Array">Array</a></span>s are always converted to the <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   <code class="literal">&quot;Array&quot;</code>; because of this, <span class="function"><a href="function.echo.php" class="function">echo</a></span> and
   <span class="function"><a href="function.print.php" class="function">print</a></span> can not by themselves show the contents of an
   <span class="type"><a href="language.types.array.php" class="type array">array</a></span>. To view a single element, use a construction such as
   <code class="literal">echo $arr[&#039;foo&#039;]</code>. See below for tips on viewing the entire
   contents.
  </p>

  <p class="para">
   In order to convert <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, the magic
   method <a href="language.oop5.magic.php" class="link">__toString</a> must be used.
  </p>

  <p class="para">
   <span class="type"><a href="language.types.resource.php" class="type Resource">Resource</a></span>s are always converted to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s with the
   structure <code class="literal">&quot;Resource id #1&quot;</code>, where <code class="literal">1</code>
   is the resource number assigned to the <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> by PHP at
   runtime. While the exact structure of this string should not be relied on
   and is subject to change, it will always be unique for a given resource
   within the lifetime of a script being executed (ie a Web request or CLI
   process) and won&#039;t be reused. To get a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>&#039;s type, use
   the <span class="function"><a href="function.get-resource-type.php" class="function">get_resource_type()</a></span> function.
  </p>

  <p class="para">
   <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is always converted to an empty string.
  </p>

  <p class="para">
   As stated above, directly converting an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>,
   <span class="type"><a href="language.types.object.php" class="type object">object</a></span>, or <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> to a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> does
   not provide any useful information about the value beyond its type. See the
   functions <span class="function"><a href="function.print-r.php" class="function">print_r()</a></span> and <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span> for
   more effective means of inspecting the contents of these types.
  </p>

  <p class="para">
   Most PHP values can also be converted to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s for permanent
   storage. This method is called serialization, and is performed by the
   <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span> function.
  </p>

 </div>

 <div class="sect2" id="language.types.string.details">

  <h3 class="title">Details of the String Type</h3>

  <p class="para">
   The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> in PHP is implemented as an array of bytes and an
   integer indicating the length of the buffer. It has no information about how
   those bytes translate to characters, leaving that task to the programmer.
   There are no limitations on the values the string can be composed of; in
   particular, bytes with value <code class="literal">0</code> (“NUL bytes”) are allowed
   anywhere in the string (however, a few functions, said in this manual not to
   be “binary safe”, may hand off the strings to libraries that ignore data
   after a NUL byte.)
  </p>
  <p class="para">
   This nature of the string type explains why there is no separate “byte” type
   in PHP – strings take this role. Functions that return no textual data – for
   instance, arbitrary data read from a network socket – will still return
   strings.
  </p>
  <p class="para">
   Given that PHP does not dictate a specific encoding for strings, one might
   wonder how string literals are encoded. For instance, is the string
   <code class="literal">&quot;á&quot;</code> equivalent to <code class="literal">&quot;\xE1&quot;</code> (ISO-8859-1),
   <code class="literal">&quot;\xC3\xA1&quot;</code> (UTF-8, C form),
   <code class="literal">&quot;\x61\xCC\x81&quot;</code> (UTF-8, D form) or any other possible
   representation? The answer is that string will be encoded in whatever fashion
   it is encoded in the script file. Thus, if the script is written in
   ISO-8859-1, the string will be encoded in ISO-8859-1 and so on. However,
   this does not apply if Zend Multibyte is enabled; in that case, the script
   may be written in an arbitrary encoding (which is explicitly declared or is
   detected) and then converted to a certain internal encoding, which is then
   the encoding that will be used for the string literals.
   Note that there are some constraints on the encoding of the script (or on the
   internal encoding, should Zend Multibyte be enabled) – this almost always
   means that this encoding should be a compatible superset of ASCII, such as
   UTF-8 or ISO-8859-1. Note, however, that state-dependent encodings where
   the same byte values can be used in initial and non-initial shift states
   may be problematic.
  </p>
  <p class="para">
   Of course, in order to be useful, functions that operate on text may have to
   make some assumptions about how the string is encoded. Unfortunately, there
   is much variation on this matter throughout PHP’s functions:
  </p>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     Some functions assume that the string is encoded in some (any) single-byte
     encoding, but they do not need to interpret those bytes as specific
     characters. This is case of, for instance, <span class="function"><a href="function.substr.php" class="function">substr()</a></span>,
     <span class="function"><a href="function.strpos.php" class="function">strpos()</a></span>, <span class="function"><a href="function.strlen.php" class="function">strlen()</a></span> or
     <span class="function"><a href="function.strcmp.php" class="function">strcmp()</a></span>. Another way to think of these functions is
     that operate on memory buffers, i.e., they work with bytes and byte
     offsets.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Other functions are passed the encoding of the string, possibly they also
     assume a default if no such information is given. This is the case of
     <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span> and the majority of the
     functions in the <a href="book.mbstring.php" class="link">mbstring</a> extension.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Others use the current locale (see <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span>), but
     operate byte-by-byte.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Finally, they may just assume the string is using a specific encoding,
     usually UTF-8. This is the case of most functions in the
     <a href="book.intl.php" class="link">intl</a> extension and in the
     <a href="book.pcre.php" class="link">PCRE</a> extension
     (in the last case, only when the <code class="literal">u</code> modifier is used).
    </span>
   </li>
  </ul>

  <p class="para">
   Ultimately, this means writing correct programs using Unicode depends on
   carefully avoiding functions that will not work and that most likely will
   corrupt the data and using instead the functions that do behave correctly,
   generally from the <a href="book.intl.php" class="link">intl</a> and
   <a href="book.mbstring.php" class="link">mbstring</a> extensions.
   However, using functions that can handle Unicode encodings is just the
   beginning. No matter the functions the language provides, it is essential to
   know the Unicode specification. For instance, a program that assumes there is
   only uppercase and lowercase is making a wrong assumption.
  </p>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/types/string.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.types.string%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.types.string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.string.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107138">  <div class="votes">
    <div id="Vu107138">
    <a href="/manual/vote-note.php?id=107138&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107138">
    <a href="/manual/vote-note.php?id=107138&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107138" title="63% like this...">
    109
    </div>
  </div>
  <a href="#107138" class="name">
  <strong class="user"><em>gtisza at gmail dot com</em></strong></a><a class="genanchor" href="#107138"> &para;</a><div class="date" title="2012-01-10 06:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107138">
<div class="phpcode"><code><span class="html">The documentation does not mention, but a closing semicolon at the end of the heredoc is actually interpreted as a real semicolon, and as such, sometimes leads to syntax errors.<br /><br />This works:<br /><br /><span class="default">&lt;?php<br />$foo </span><span class="keyword">= &lt;&lt;&lt;END<br /></span><span class="string">abcd<br /></span><span class="keyword">END;<br /></span><span class="default">?&gt;<br /></span><br />This does not:<br /><br /><span class="default">&lt;?php<br />foo</span><span class="keyword">(&lt;&lt;&lt;END<br /></span><span class="string">abcd<br /></span><span class="keyword">END;<br />);<br /></span><span class="comment">// syntax error, unexpected ';'<br /></span><span class="default">?&gt;<br /></span><br />Without semicolon, it works fine:<br /><br /><span class="default">&lt;?php<br />foo</span><span class="keyword">(&lt;&lt;&lt;END<br /></span><span class="string">abcd<br /></span><span class="keyword">END<br />);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128097">  <div class="votes">
    <div id="Vu128097">
    <a href="/manual/vote-note.php?id=128097&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128097">
    <a href="/manual/vote-note.php?id=128097&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128097" title="70% like this...">
    29
    </div>
  </div>
  <a href="#128097" class="name">
  <strong class="user"><em>BahmanMD</em></strong></a><a class="genanchor" href="#128097"> &para;</a><div class="date" title="2023-01-07 11:34"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128097">
<div class="phpcode"><code><span class="html">In PHP 8.2 using ${var} in strings is deprecated, use {$var} instead:<br /><br /><span class="default">&lt;?php<br />$juice </span><span class="keyword">= </span><span class="string">"apple"</span><span class="keyword">;<br /><br /></span><span class="comment">// Valid. Explicitly specify the end of the variable name by enclosing it in braces:<br /></span><span class="keyword">echo </span><span class="string">"He drank some juice made of </span><span class="keyword">{</span><span class="default">$juice</span><span class="keyword">}</span><span class="string">s."</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46914">  <div class="votes">
    <div id="Vu46914">
    <a href="/manual/vote-note.php?id=46914&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46914">
    <a href="/manual/vote-note.php?id=46914&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46914" title="56% like this...">
    25
    </div>
  </div>
  <a href="#46914" class="name">
  <strong class="user"><em>lelon at lelon dot net</em></strong></a><a class="genanchor" href="#46914"> &para;</a><div class="date" title="2004-10-27 12:01"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46914">
<div class="phpcode"><code><span class="html">You can use the complex syntax to put the value of both object properties AND object methods inside a string.  For example...<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Test </span><span class="keyword">{<br />    public </span><span class="default">$one </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    public function </span><span class="default">two</span><span class="keyword">() {<br />        return </span><span class="default">2</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">();<br />echo </span><span class="string">"foo </span><span class="keyword">{</span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">one</span><span class="keyword">}</span><span class="string"> bar </span><span class="keyword">{</span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">two</span><span class="keyword">()}</span><span class="string">"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Will output "foo 1 bar 2".<br /><br />However, you cannot do this for all values in your namespace.  Class constants and static properties/methods will not work because the complex syntax looks for the '$'.<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Test </span><span class="keyword">{<br />    const </span><span class="default">ONE </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />}<br />echo </span><span class="string">"foo {Test::ONE} bar"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>This will output "foo {Test::one} bar".  Constants and static properties require you to break up the string.</span></code></div>
  </div>
 </div>
  <div class="note" id="123393">  <div class="votes">
    <div id="Vu123393">
    <a href="/manual/vote-note.php?id=123393&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123393">
    <a href="/manual/vote-note.php?id=123393&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123393" title="56% like this...">
    14
    </div>
  </div>
  <a href="#123393" class="name">
  <strong class="user"><em>Ray.Paseur sometimes uses Gmail</em></strong></a><a class="genanchor" href="#123393"> &para;</a><div class="date" title="2018-12-01 05:14"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123393">
<div class="phpcode"><code><span class="html">md5('240610708') == md5('QNKCDZO')<br /><br />This comparison is true because both md5() hashes start '0e' so PHP type juggling understands these strings to be scientific notation.  By definition, zero raised to any power is zero.</span></code></div>
  </div>
 </div>
  <div class="note" id="74744">  <div class="votes">
    <div id="Vu74744">
    <a href="/manual/vote-note.php?id=74744&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74744">
    <a href="/manual/vote-note.php?id=74744&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74744" title="54% like this...">
    15
    </div>
  </div>
  <a href="#74744" class="name">
  <strong class="user"><em>og at gams dot at</em></strong></a><a class="genanchor" href="#74744"> &para;</a><div class="date" title="2007-04-25 05:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74744">
<div class="phpcode"><code><span class="html">easy transparent solution for using constants in the heredoc format:<br />DEFINE('TEST','TEST STRING');<br /><br />$const = get_defined_constants();<br /><br />echo &lt;&lt;&lt;END<br />{$const['TEST']}<br />END;<br /><br />Result:<br />TEST STRING</span></code></div>
  </div>
 </div>
  <div class="note" id="125281">  <div class="votes">
    <div id="Vu125281">
    <a href="/manual/vote-note.php?id=125281&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125281">
    <a href="/manual/vote-note.php?id=125281&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125281" title="53% like this...">
    4
    </div>
  </div>
  <a href="#125281" class="name">
  <strong class="user"><em>greenbluemoonlight at gmail dot com</em></strong></a><a class="genanchor" href="#125281"> &para;</a><div class="date" title="2020-08-18 03:05"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125281">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /></span><span class="keyword">\</span><span class="default">\Example </span><span class="comment"># 10 Simple Syntax - Solution for the last "echo" line.<br /><br /></span><span class="keyword">class </span><span class="default">people </span><span class="keyword">{<br />    public </span><span class="default">$john </span><span class="keyword">= </span><span class="string">"John Smith"</span><span class="keyword">;<br />    public </span><span class="default">$jane </span><span class="keyword">= </span><span class="string">"Jane Smith"</span><span class="keyword">;<br />    public </span><span class="default">$robert </span><span class="keyword">= </span><span class="string">"Robert Paulsen"</span><span class="keyword">;<br /><br />    public </span><span class="default">$smith </span><span class="keyword">= </span><span class="string">"Smith"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$people </span><span class="keyword">= new </span><span class="default">people</span><span class="keyword">();<br /><br />echo </span><span class="string">"</span><span class="default">$people</span><span class="keyword">-&gt;</span><span class="default">john</span><span class="string"> then said hello to </span><span class="default">$people</span><span class="keyword">-&gt;</span><span class="default">jane</span><span class="string">."</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$people</span><span class="keyword">-&gt;</span><span class="default">john</span><span class="string">'s wife greeted </span><span class="default">$people</span><span class="keyword">-&gt;</span><span class="default">robert</span><span class="string">."</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$people</span><span class="keyword">-&gt;</span><span class="default">robert</span><span class="string"> greeted the two </span><span class="default">$people</span><span class="keyword">-&gt;</span><span class="default">smiths</span><span class="string">"</span><span class="keyword">; <br />\</span><span class="default">\Won</span><span class="string">'t work <br />\\Outputs: Robert Paulsen greeted the two <br /><br />/**Solution:**\<br /><br />echo "$people-&gt;robert greeted the two $people-&gt;smith\x08s"; <br /><br />\\Will work<br />\\Outputs: Robert Paulsen greeted the two Smiths<br /><br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="41470">  <div class="votes">
    <div id="Vu41470">
    <a href="/manual/vote-note.php?id=41470&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41470">
    <a href="/manual/vote-note.php?id=41470&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41470" title="52% like this...">
    10
    </div>
  </div>
  <a href="#41470" class="name">
  <strong class="user"><em>atnak at chejz dot com</em></strong></a><a class="genanchor" href="#41470"> &para;</a><div class="date" title="2004-04-11 03:53"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41470">
<div class="phpcode"><code><span class="html">Here is a possible gotcha related to oddness involved with accessing strings by character past the end of the string:
<br />
<br />$string = 'a';
<br />
<br />var_dump($string[2]);  // string(0) ""
<br />var_dump($string[7]);  // string(0) ""
<br />$string[7] === '';  // TRUE
<br />
<br />It appears that anything past the end of the string gives an empty string..  However, when E_NOTICE is on, the above examples will throw the message:
<br />
<br />Notice:  Uninitialized string offset:  N in FILE on line LINE
<br />
<br />This message cannot be specifically masked with @$string[7], as is possible when $string itself is unset.
<br />
<br />isset($string[7]);  // FALSE
<br />$string[7] === NULL;  // FALSE
<br />
<br />Even though it seems like a not-NULL value of type string, it is still considered unset.</span></code></div>
  </div>
 </div>
  <div class="note" id="111522">  <div class="votes">
    <div id="Vu111522">
    <a href="/manual/vote-note.php?id=111522&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111522">
    <a href="/manual/vote-note.php?id=111522&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111522" title="51% like this...">
    7
    </div>
  </div>
  <a href="#111522" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#111522"> &para;</a><div class="date" title="2013-02-28 06:20"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111522">
<div class="phpcode"><code><span class="html">Leading zeroes in strings are (least-surprise) not treated as octal.<br />Consider:<br />  $x = "0123"  + 0;   <br />  $y = 0123 + 0;<br />  echo "x is $x, y is $y";    //prints  "x is 123, y is 83"<br />in other words:<br /> * leading zeros in numeric literals in the source-code are interpreted as "octal", c.f. strtol().<br /> * leading zeros in strings (eg user-submitted data), when cast (implicitly or explicitly) to integer are ignored, and considered as decimal, c.f. strtod().</span></code></div>
  </div>
 </div>
  <div class="note" id="86044">  <div class="votes">
    <div id="Vu86044">
    <a href="/manual/vote-note.php?id=86044&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86044">
    <a href="/manual/vote-note.php?id=86044&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86044" title="52% like this...">
    8
    </div>
  </div>
  <a href="#86044" class="name">
  <strong class="user"><em>steve at mrclay dot org</em></strong></a><a class="genanchor" href="#86044"> &para;</a><div class="date" title="2008-09-30 01:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86044">
<div class="phpcode"><code><span class="html">Simple function to create human-readably escaped double-quoted strings for use in source code or when debugging strings with newlines/tabs/etc.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">doubleQuote</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$l </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$l</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />        </span><span class="default">$o </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />        if (</span><span class="default">$o </span><span class="keyword">&lt; </span><span class="default">31 </span><span class="keyword">|| </span><span class="default">$o </span><span class="keyword">&gt; </span><span class="default">126</span><span class="keyword">) {<br />            switch (</span><span class="default">$o</span><span class="keyword">) {<br />                case </span><span class="default">9</span><span class="keyword">: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="string">'\t'</span><span class="keyword">; break;<br />                case </span><span class="default">10</span><span class="keyword">: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="string">'\n'</span><span class="keyword">; break;<br />                case </span><span class="default">11</span><span class="keyword">: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="string">'\v'</span><span class="keyword">; break;<br />                case </span><span class="default">12</span><span class="keyword">: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="string">'\f'</span><span class="keyword">; break;<br />                case </span><span class="default">13</span><span class="keyword">: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="string">'\r'</span><span class="keyword">; break;<br />                default: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="string">'\x' </span><span class="keyword">. </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">dechex</span><span class="keyword">(</span><span class="default">$o</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />            }<br />        } else {<br />            switch (</span><span class="default">$o</span><span class="keyword">) {<br />                case </span><span class="default">36</span><span class="keyword">: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="string">'\$'</span><span class="keyword">; break;<br />                case </span><span class="default">34</span><span class="keyword">: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="string">'\"'</span><span class="keyword">; break;<br />                case </span><span class="default">92</span><span class="keyword">: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="string">'\\\\'</span><span class="keyword">; break;<br />                default: </span><span class="default">$ret </span><span class="keyword">.= </span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            }<br />        }<br />    }<br />    return </span><span class="default">$ret </span><span class="keyword">. </span><span class="string">'"'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85668">  <div class="votes">
    <div id="Vu85668">
    <a href="/manual/vote-note.php?id=85668&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85668">
    <a href="/manual/vote-note.php?id=85668&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85668" title="51% like this...">
    6
    </div>
  </div>
  <a href="#85668" class="name">
  <strong class="user"><em>chAlx at findme dot if dot u dot need</em></strong></a><a class="genanchor" href="#85668"> &para;</a><div class="date" title="2008-09-11 08:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85668">
<div class="phpcode"><code><span class="html">To save Your mind don't read previous comments about dates  ;)<br /><br />When both strings can be converted to the numerics (in ("$a" &gt; "$b") test) then resulted numerics are used, else FULL strings are compared char-by-char:<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="string">'1.22' </span><span class="keyword">&gt; </span><span class="string">'01.23'</span><span class="keyword">); </span><span class="comment">// bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="string">'1.22.00' </span><span class="keyword">&gt; </span><span class="string">'01.23.00'</span><span class="keyword">); </span><span class="comment">// bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="string">'1-22-00' </span><span class="keyword">&gt; </span><span class="string">'01-23-00'</span><span class="keyword">); </span><span class="comment">// bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">((float)</span><span class="string">'1.22.00' </span><span class="keyword">&gt; (float)</span><span class="string">'01.23.00'</span><span class="keyword">); </span><span class="comment">// bool(false)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91628">  <div class="votes">
    <div id="Vu91628">
    <a href="/manual/vote-note.php?id=91628&amp;page=language.types.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91628">
    <a href="/manual/vote-note.php?id=91628&amp;page=language.types.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91628" title="50% like this...">
    3
    </div>
  </div>
  <a href="#91628" class="name">
  <strong class="user"><em>headden at karelia dot ru</em></strong></a><a class="genanchor" href="#91628"> &para;</a><div class="date" title="2009-06-20 12:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91628">
<div class="phpcode"><code><span class="html">Here is an easy hack to allow double-quoted strings and heredocs to contain arbitrary expressions in curly braces syntax, including constants and other function calls:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Hack declaration<br /></span><span class="keyword">function </span><span class="default">_expr</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) { return </span><span class="default">$v</span><span class="keyword">; }<br /></span><span class="default">$_expr </span><span class="keyword">= </span><span class="string">'_expr'</span><span class="keyword">;<br /><br /></span><span class="comment">// Our playground<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'qwe'</span><span class="keyword">, </span><span class="string">'asd'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'zxc'</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br /><br /></span><span class="default">$a</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">=</span><span class="default">4</span><span class="keyword">;<br /><br />function </span><span class="default">c</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) { return </span><span class="default">$a</span><span class="keyword">+</span><span class="default">$b</span><span class="keyword">; }<br /><br /></span><span class="comment">// Usage<br /></span><span class="keyword">echo </span><span class="string">"pre </span><span class="keyword">{</span><span class="default">$_expr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">)}</span><span class="string"> post\n"</span><span class="keyword">; </span><span class="comment">// outputs 'pre 3 post'<br /></span><span class="keyword">echo </span><span class="string">"pre </span><span class="keyword">{</span><span class="default">$_expr</span><span class="keyword">(</span><span class="default">qwe</span><span class="keyword">)}</span><span class="string"> post\n"</span><span class="keyword">; </span><span class="comment">// outputs 'pre asd post'<br /></span><span class="keyword">echo </span><span class="string">"pre </span><span class="keyword">{</span><span class="default">$_expr</span><span class="keyword">(</span><span class="default">c</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)+</span><span class="default">zxc</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">)}</span><span class="string"> post\n"</span><span class="keyword">; </span><span class="comment">// outputs 'pre 17 post'<br /><br />// General syntax is {$_expr(...)}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.types.string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.string.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.types.php">Types</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.types.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-system.php" title="Type System">Type System</a>
                        </li>
                                                <li class="">
                            <a href="language.types.null.php" title="NULL">NULL</a>
                        </li>
                                                <li class="">
                            <a href="language.types.boolean.php" title="Booleans">Booleans</a>
                        </li>
                                                <li class="">
                            <a href="language.types.integer.php" title="Integers">Integers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.float.php" title="Floating point numbers">Floating point numbers</a>
                        </li>
                                                <li class="current">
                            <a href="language.types.string.php" title="Strings">Strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.numeric-strings.php" title="Numeric strings">Numeric strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.array.php" title="Arrays">Arrays</a>
                        </li>
                                                <li class="">
                            <a href="language.types.object.php" title="Objects">Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.types.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.resource.php" title="Resources">Resources</a>
                        </li>
                                                <li class="">
                            <a href="language.types.callable.php" title="Callbacks / Callables">Callbacks / Callables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.mixed.php" title="Mixed">Mixed</a>
                        </li>
                                                <li class="">
                            <a href="language.types.void.php" title="Void">Void</a>
                        </li>
                                                <li class="">
                            <a href="language.types.never.php" title="Never">Never</a>
                        </li>
                                                <li class="">
                            <a href="language.types.relative-class-types.php" title="Relative class types">Relative class types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.singleton.php" title="Singleton types">Singleton types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.iterable.php" title="Iterables">Iterables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.declarations.php" title="Type declarations">Type declarations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-juggling.php" title="Type Juggling">Type Juggling</a>
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
