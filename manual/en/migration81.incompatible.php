<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Backward Incompatible Changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration81.incompatible.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration81.incompatible.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration81.incompatible.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration81.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration81.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/migration81.deprecated.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration81.incompatible.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration81.incompatible.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration81.incompatible.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration81.incompatible.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration81.incompatible.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration81.incompatible.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration81.incompatible.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration81.incompatible.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration81.incompatible.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration81.incompatible.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration81.incompatible.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Backward Incompatible Changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Backward Incompatible Changes - Manual" />
<meta name="twitter:description" content="Backward Incompatible Changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Backward Incompatible Changes - Manual" />
<meta itemprop="description" content="Backward Incompatible Changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Backward Incompatible Changes" />

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
        <a href="migration81.deprecated.php">
          Deprecated Features &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration81.constants.php">
          &laquo; New Global Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration81.php'>Migrating from PHP 8.0.x to PHP 8.1.x</a></li>      </ul>
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
            <option value='en/migration81.incompatible.php' selected="selected">English</option>
            <option value='de/migration81.incompatible.php'>German</option>
            <option value='es/migration81.incompatible.php'>Spanish</option>
            <option value='fr/migration81.incompatible.php'>French</option>
            <option value='it/migration81.incompatible.php'>Italian</option>
            <option value='ja/migration81.incompatible.php'>Japanese</option>
            <option value='pt_BR/migration81.incompatible.php'>Brazilian Portuguese</option>
            <option value='ru/migration81.incompatible.php'>Russian</option>
            <option value='tr/migration81.incompatible.php'>Turkish</option>
            <option value='uk/migration81.incompatible.php'>Ukrainian</option>
            <option value='zh/migration81.incompatible.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration81.incompatible" class="sect1">
 <h2 class="title">Backward Incompatible Changes</h2>

 <div class="sect2" id="migration81.incompatible.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration81.incompatible.core.globals-access">
   <h4 class="title">$GLOBALS Access Restrictions</h4>

   <p class="para">
    Access to the <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> array is now subject to
    a number of restrictions.
    Read and write access to individual array elements like
    <code class="code">$GLOBALS[&#039;var&#039;]</code> continues to work as-is.
    Read-only access to the entire <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> array also
    continues to be supported.
    However, write access to the entire <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> array
    is no longer supported. For example, <code class="code">array_pop($GLOBALS)</code>
    will result in an error.
   </p>
  </div>

  <div class="sect3" id="migration81.incompatible.core.static-variable-inheritance">
   <h4 class="title">
    Usage of <span class="modifier">static</span> Variables in Inherited Methods
   </h4>

   <p class="para">
    When a method using static variables is inherited (but not overridden), the
    inherited method will now share static variables with the parent method.
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">counter</span><span style="color: #007700">() {<br />        static </span><span style="color: #0000BB">$counter </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$counter</span><span style="color: #007700">++;<br />        return </span><span style="color: #0000BB">$counter</span><span style="color: #007700">;<br />    }<br />}<br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A </span><span style="color: #007700">{}<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">counter</span><span style="color: #007700">()); </span><span style="color: #FF8000">// int(1)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">counter</span><span style="color: #007700">()); </span><span style="color: #FF8000">// int(2)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">counter</span><span style="color: #007700">()); </span><span style="color: #FF8000">// int(3), previously int(1)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">counter</span><span style="color: #007700">()); </span><span style="color: #FF8000">// int(4), previously int(2)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    This means that static variables in methods now behave the same way as
    static properties.
   </p>
  </div>

  <div class="sect3" id="migration81.incompatible.core.optional-before-required">
   <h4 class="title">Optional parameters specified before required parameters</h4>

   <p class="para">
    An <a href="functions.arguments.php#functions.arguments.default" class="link">optional parameter</a>
    specified before required parameters is now always treated as required,
    even when called using
    <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>.
    As of PHP 8.0.0, but prior to PHP 8.1.0, the below emits a deprecation notice
    on the definition, but runs successfully when called. As of PHP 8.1.0, an error
    of class <span class="classname"><a href="class.argumentcounterror.php" class="classname">ArgumentCountError</a></span> is thrown, as it would be when
    called with positional arguments.

    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">makeyogurt</span><span style="color: #007700">(</span><span style="color: #0000BB">$container </span><span style="color: #007700">= </span><span style="color: #DD0000">"bowl"</span><span style="color: #007700">, </span><span style="color: #0000BB">$flavour</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #DD0000">"Making a </span><span style="color: #0000BB">$container</span><span style="color: #DD0000"> of </span><span style="color: #0000BB">$flavour</span><span style="color: #DD0000"> yogurt.\n"</span><span style="color: #007700">;<br />}<br />try<br />{<br />    echo </span><span style="color: #0000BB">makeyogurt</span><span style="color: #007700">(</span><span style="color: #0000BB">flavour</span><span style="color: #007700">: </span><span style="color: #DD0000">"raspberry"</span><span style="color: #007700">);<br />}<br />catch (</span><span style="color: #0000BB">Error $e</span><span style="color: #007700">)<br />{<br />    echo </span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">), </span><span style="color: #DD0000">' - '</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <p class="para">Output of the above example in PHP 8.0:</p>
     <div class="example-contents screen">
<div class="cdata"><pre>
Deprecated: Required parameter $flavour follows optional parameter $container
 in example.php on line 3
Making a bowl of raspberry yogurt.
</pre></div>
     </div>
     <p class="para">Output of the above example in PHP 8.1:</p>
     <div class="example-contents screen">
<div class="cdata"><pre>
Deprecated: Optional parameter $container declared before required parameter
 $flavour is implicitly treated as a required parameter in example.php on line 3
ArgumentCountError - makeyogurt(): Argument #1 ($container) not passed
</pre></div>
     </div>
    </div>
   </p>
   <p class="para">
    Note that a default value of <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> can be used before required parameters to
    specify a <a href="language.types.declarations.php#language.types.declarations.nullable" class="link">nullable type</a>,
    but the parameter will still be required.
   </p>
  </div>

  <div class="sect3" id="migration81.incompatible.core.type-compatibility-internal">
   <h4 class="title">Return Type Compatibility with Internal Classes</h4>

   <p class="para">
    Most non-final internal methods now require overriding methods to declare
    a compatible return type, otherwise a deprecated notice is emitted during
    inheritance validation.
    In case the return type cannot be declared for an overriding method due to
    PHP cross-version compatibility concerns,
    a <span class="classname"><a href="class.returntypewillchange.php" class="classname">ReturnTypeWillChange</a></span> attribute can be added to silence
    the deprecation notice.
   </p>
  </div>

  <div class="sect3" id="migration81.incompatible.core.new-keywords">
   <h4 class="title">New Keywords</h4>
   <p class="para">
    <code class="literal">readonly</code> is a keyword now. However, it still may be used
    as function name.
   </p>
   <p class="para">
    <code class="literal">never</code> is now a reserved word, so it cannot be used to name a class,
    interface or trait, and is also prohibited from being used in namespaces.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration81.incompatible.resource2object">
  <h3 class="title">Resource to Object Migration</h3>

  <p class="para">
   Several <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s have been migrated to <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s.
   Return value checks using <span class="function"><a href="function.is-resource.php" class="function">is_resource()</a></span> should be replaced with checks for <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     The <a href="book.fileinfo.php" class="link">FileInfo</a> functions now accept and return
     <span class="classname"><a href="class.finfo.php" class="classname">finfo</a></span> objects instead of
     <code class="literal">fileinfo</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.ftp.php" class="link">FTP</a> functions now accept and return
     <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span> objects instead of
     <code class="literal">ftp</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.imap.php" class="link">IMAP</a> functions now accept and return
     <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span> objects instead of
     <code class="literal">imap</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.ldap.php" class="link">LDAP</a> functions now accept and return
     <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> objects instead of
     <code class="literal">ldap link</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.ldap.php" class="link">LDAP</a> functions now accept and return
     <span class="classname"><a href="class.ldap-result.php" class="classname">LDAP\Result</a></span> objects instead of
     <code class="literal">ldap result</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.ldap.php" class="link">LDAP</a> functions now accept and return
     <span class="classname"><a href="class.ldap-result-entry.php" class="classname">LDAP\ResultEntry</a></span> objects instead of
     <code class="literal">ldap result entry</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.pgsql.php" class="link">PgSQL</a> functions now accept and return
     <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span> objects instead of
     <code class="literal">pgsql link</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.pgsql.php" class="link">PgSQL</a> functions now accept and return
     <span class="classname"><a href="class.pgsql-result.php" class="classname">PgSql\Result</a></span> objects instead of
     <code class="literal">pgsql result</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.pgsql.php" class="link">PgSQL</a> functions now accept and return
     <span class="classname"><a href="class.pgsql-lob.php" class="classname">PgSql\Lob</a></span> objects instead of
     <code class="literal">pgsql large object</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.pspell.php" class="link">PSpell</a> functions now accept and return
     <span class="classname"><a href="class.pspell-dictionary.php" class="classname">PSpell\Dictionary</a></span> objects instead of
     <code class="literal">pspell</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     The <a href="book.pspell.php" class="link">PSpell</a> functions now accept and return
     <span class="classname"><a href="class.pspell-config.php" class="classname">PSpell\Config</a></span> objects instead of
     <code class="literal">pspell config</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
    </p>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration81.incompatible.mysqli">
  <h3 class="title">MySQLi</h3>

  <p class="para">
   <span class="function"><a href="mysqli-result.fetch-fields.php" class="function">mysqli_fetch_fields()</a></span>, and
   <span class="function"><a href="mysqli-result.fetch-field-direct.php" class="function">mysqli_fetch_field_direct()</a></span> will now always return
   <code class="literal">0</code> for the <span class="property">max_length</span>.
   This information can be computed by iterating over the result set,
   and taking the maximum length. This is what PHP was doing
   internally previously.
  </p>

  <p class="para">
   The <strong><code><a href="mysqli.constants.php#constant.mysqli-stmt-attr-update-max-length">MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH</a></code></strong>
   option no longer has any effect.
  </p>

  <p class="para">
   The <strong><code><a href="mysqli.constants.php#constant.mysqli-store-result-copy-data">MYSQLI_STORE_RESULT_COPY_DATA</a></code></strong>
   option no longer has any effect. Passing any value to the
   <code class="parameter">mode</code> parameter of
   <span class="methodname"><a href="mysqli.store-result.php" class="methodname">mysqli::store_result()</a></span> no longer has any effect.
  </p>

  <p class="para">
   <span class="methodname"><a href="mysqli.construct.php" class="methodname">mysqli::connect()</a></span> now returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> instead of <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on success.
  </p>

  <p class="para">
   The default error handling mode has been changed from &quot;silent&quot; to &quot;exceptions&quot;
   See the <a href="mysqli-driver.report-mode.php" class="link">MySQLi reporting mode</a>
   page for more details on what this entails,
   and how to explicitly set this attribute.
   To restore the previous behaviour use:
   <code class="code">mysqli_report(MYSQLI_REPORT_OFF);</code>
  </p>

  <p class="para">
   Classes extending <span class="methodname"><a href="mysqli-stmt.execute.php" class="methodname">mysqli_stmt::execute()</a></span>
   are now required to specify the additional optional parameter.
  </p>
 </div>

 <div class="sect2" id="migration81.incompatible.mysqlnd">
  <h3 class="title">MySQLnd</h3>

  <p class="para">
   The <a href="mysqlnd.config.php#ini.mysqlnd.fetch_data_copy" class="link">mysqlnd.fetch_data_copy</a>
   INI directive has been removed.
   This should not result in user-visible behavior changes.
  </p>
 </div>

 <div class="sect2" id="migration81.incompatible.openssl">
  <h3 class="title">OpenSSL</h3>

  <p class="para">
   EC private keys will now be exported in <abbr title="Public Key Cryptography Standards">PKCS</abbr>#8 format rather than
   traditional format, just like all other keys.
  </p>
  <p class="para">
   <span class="function"><a href="function.openssl-pkcs7-encrypt.php" class="function">openssl_pkcs7_encrypt()</a></span> and
   <span class="function"><a href="function.openssl-cms-encrypt.php" class="function">openssl_cms_encrypt()</a></span> will now to default using
   AES-128-CBC rather than RC2-40. The RC2-40 cipher is considered
   insecure and not enabled by default by OpenSSL 3.
  </p>
 </div>

 <div class="sect2" id="migration81.incompatible.pdo">
  <h3 class="title">PHP Data Objects</h3>

  <p class="para">
   <strong><code><a href="pdo.constants.php#pdo.constants.attr-stringify-fetches">PDO::ATTR_STRINGIFY_FETCHES</a></code></strong> now stringifies values
   of type <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> to <code class="literal">&quot;0&quot;</code> or
   <code class="literal">&quot;1&quot;</code>. Previously <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>s were not stringified.
  </p>
  <p class="para">
   Calling <span class="methodname"><a href="pdostatement.bindcolumn.php" class="methodname">PDOStatement::bindColumn()</a></span> with
   <strong><code><a href="pdo.constants.php#pdo.constants.param-lob">PDO::PARAM_LOB</a></code></strong> will now constantly bind a stream
   result when <strong><code><a href="pdo.constants.php#pdo.constants.attr-stringify-fetches">PDO::ATTR_STRINGIFY_FETCHES</a></code></strong> is not enabled.
   Previously, the result would either be a stream or a string depending on
   the used database driver and the time the binding is performed.
  </p>

  <div class="sect3" id="migration81.incompatible.pdo.mysql">
   <h4 class="title">MySQL Driver</h4>

   <p class="para">
    Integers and floats in result sets will now be returned using native
    PHP types instead of <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s when using emulated prepared statements.
    This matches the behavior of native prepared statements.
    The previous behaviour can be restored by enabling the
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-stringify-fetches">PDO::ATTR_STRINGIFY_FETCHES</a></code></strong> option.
   </p>
  </div>

  <div class="sect3" id="migration81.incompatible.pdo.sqlite">
   <h4 class="title">SQLite Driver</h4>

   <p class="para">
    Integers and floats in results sets will now be returned using native
    PHP types.
    The previous behaviour can be restored by enabling the
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-stringify-fetches">PDO::ATTR_STRINGIFY_FETCHES</a></code></strong> option.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration81.incompatible.phar">
  <h3 class="title">Phar</h3>

  <p class="para">
   To comply with the <span class="interfacename"><a href="class.arrayaccess.php" class="interfacename">ArrayAccess</a></span> interface,
   <span class="methodname"><a href="phar.offsetunset.php" class="methodname">Phar::offsetUnset()</a></span> and
   <span class="methodname"><a href="phardata.offsetunset.php" class="methodname">PharData::offsetUnset()</a></span> no longer return a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration81.incompatible.standard">
  <h3 class="title">Standard</h3>

  <p class="para">
   <span class="function"><a href="function.version-compare.php" class="function">version_compare()</a></span> no longer accepts undocumented operator abbreviations.
  </p>

  <p class="para">
   <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span>,
   <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span>,
   <span class="function"><a href="function.htmlspecialchars-decode.php" class="function">htmlspecialchars_decode()</a></span>,
   <span class="function"><a href="function.html-entity-decode.php" class="function">html_entity_decode()</a></span>,
   and <span class="function"><a href="function.get-html-translation-table.php" class="function">get_html_translation_table()</a></span>
   now use <code class="literal">ENT_QUOTES | ENT_SUBSTITUTE</code> rather than
   <strong><code><a href="string.constants.php#constant.ent-compat">ENT_COMPAT</a></code></strong> by default.
   This means that <code class="literal">&#039;</code> is escaped to
   <code class="literal">&amp;#039;</code> while previously nothing was done.
   Additionally, malformed UTF-8 will be replaced by a Unicode substitution
   character, instead of resulting in an empty string.
  </p>

  <p class="para">
   <span class="function"><a href="function.debug-zval-dump.php" class="function">debug_zval_dump()</a></span> now prints the refcount of a reference
   wrappers with their refcount, instead of only prepending
   <code class="literal">&amp;</code> to the value.
   This more accurately models reference representation since PHP 7.0.
  </p>

  <p class="para">
   <span class="function"><a href="function.debug-zval-dump.php" class="function">debug_zval_dump()</a></span> now prints <code class="literal">interned</code>
   instead of a dummy refcount for interned strings and immutable arrays.
  </p>
 </div>

 <div class="sect2" id="migration81.incompatible.spl">
  <h3 class="title">Standard PHP Library (SPL)</h3>

  <p class="para">
   <span class="classname"><a href="class.splfixedarray.php" class="classname">SplFixedArray</a></span>, will now be JSON encoded like an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration81/incompatible.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration81.incompatible%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration81.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration81.incompatible.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration81.php">Migrating from PHP 8.0.x to PHP 8.1.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration81.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration81.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration81.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration81.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="current">
                            <a href="migration81.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration81.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration81.other-changes.php" title="Other Changes">Other Changes</a>
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
