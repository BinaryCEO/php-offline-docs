<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: List of Function Aliases - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/aliases.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/aliases.php">
 <link rel="alternate" href="https://www.php.net/manual/en/aliases.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/appendices.php">
 <link rel="prev" href="https://www.php.net/manual/en/extensions.state.php">
 <link rel="next" href="https://www.php.net/manual/en/reserved.php">

 <link rel="alternate" href="https://www.php.net/manual/en/aliases.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/aliases.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/aliases.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/aliases.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/aliases.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/aliases.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/aliases.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/aliases.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/aliases.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/aliases.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/aliases.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="List of Function Aliases" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: List of Function Aliases - Manual" />
<meta name="twitter:description" content="List of Function Aliases" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: List of Function Aliases - Manual" />
<meta itemprop="description" content="List of Function Aliases" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="List of Function Aliases" />

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
        <a href="reserved.php">
          List of Reserved Words &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="extensions.state.php">
          &laquo; State        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      </ul>
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
            <option value='en/aliases.php' selected="selected">English</option>
            <option value='de/aliases.php'>German</option>
            <option value='es/aliases.php'>Spanish</option>
            <option value='fr/aliases.php'>French</option>
            <option value='it/aliases.php'>Italian</option>
            <option value='ja/aliases.php'>Japanese</option>
            <option value='pt_BR/aliases.php'>Brazilian Portuguese</option>
            <option value='ru/aliases.php'>Russian</option>
            <option value='tr/aliases.php'>Turkish</option>
            <option value='uk/aliases.php'>Ukrainian</option>
            <option value='zh/aliases.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="aliases" class="appendix">
 <h1 class="title">List of Function Aliases</h1>

 <p class="para">
  There are quite a few functions in PHP which you can call with more
  than one name. In some cases there is no preferred name among the
  multiple ones, <span class="function"><a href="function.is-int.php" class="function">is_int()</a></span> and
  <span class="function"><a href="function.is-integer.php" class="function">is_integer()</a></span> are equally good for example.
  However there are functions which changed names because of an API
  cleanup or some other reason and the old names are only kept as
  aliases for backward compatibility. It is usually a bad idea to use
  these kind of aliases, as they may be bound to obsolescence or
  renaming, which will lead to unportable script. This list is provided
  to help those who want to upgrade their old scripts to newer syntax.
 </p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>Aliases</strong></caption>
   
    <thead>
     <tr>
      <th>Alias</th>
      <th>Canonical function name</th>
      <th>Extension used</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>_</td>
      <td><span class="function"><a href="function.gettext.php" class="function">gettext()</a></span></td>
      <td><a href="ref.gettext.php" class="link">Gettext</a></td>
     </tr>

     <tr>
      <td>chop</td>
      <td><span class="function"><a href="function.rtrim.php" class="function">rtrim()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>close</td>
      <td><span class="function"><a href="function.closedir.php" class="function">closedir()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>com_get</td>
      <td><span class="function"><strong>com_propget()</strong></span></td>
      <td><a href="ref.com.php" class="link">COM</a></td>
     </tr>

     <tr>
      <td>com_propset</td>
      <td><span class="function"><strong>com_propput()</strong></span></td>
      <td><a href="ref.com.php" class="link">COM</a></td>
     </tr>

     <tr>
      <td>com_set</td>
      <td><span class="function"><strong>com_propput()</strong></span></td>
      <td><a href="ref.com.php" class="link">COM</a></td>
     </tr>

     <tr>
      <td>die</td>
      <td><span class="function"><a href="function.exit.php" class="function">exit()</a></span></td>
      <td><a href="ref.misc.php" class="link">Miscellaneous functions</a></td>
     </tr>

     <tr>
      <td>diskfreespace</td>
      <td><span class="function"><a href="function.disk-free-space.php" class="function">disk_free_space()</a></span></td>
      <td><a href="ref.filesystem.php" class="link">Filesystem</a></td>
     </tr>

     <tr>
      <td>doubleval</td>
      <td><span class="function"><a href="function.floatval.php" class="function">floatval()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>fputs</td>
      <td><span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>gzputs</td>
      <td><span class="function"><a href="function.gzwrite.php" class="function">gzwrite()</a></span></td>
      <td><a href="ref.zlib.php" class="link">Zlib</a></td>
     </tr>

     <tr>
      <td>i18n_convert</td>
      <td><span class="function"><a href="function.mb-convert-encoding.php" class="function">mb_convert_encoding()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>i18n_discover_encoding</td>
      <td><span class="function"><a href="function.mb-detect-encoding.php" class="function">mb_detect_encoding()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>i18n_http_input</td>
      <td><span class="function"><a href="function.mb-http-input.php" class="function">mb_http_input()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>i18n_http_output</td>
      <td><span class="function"><a href="function.mb-http-output.php" class="function">mb_http_output()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>i18n_internal_encoding</td>
      <td><span class="function"><a href="function.mb-internal-encoding.php" class="function">mb_internal_encoding()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>i18n_ja_jp_hantozen</td>
      <td><span class="function"><a href="function.mb-convert-kana.php" class="function">mb_convert_kana()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>i18n_mime_header_decode</td>
      <td><span class="function"><a href="function.mb-decode-mimeheader.php" class="function">mb_decode_mimeheader()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>i18n_mime_header_encode</td>
      <td><span class="function"><a href="function.mb-encode-mimeheader.php" class="function">mb_encode_mimeheader()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>imap_create</td>
      <td><span class="function"><a href="function.imap-createmailbox.php" class="function">imap_createmailbox()</a></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>imap_fetchtext</td>
      <td><span class="function"><a href="function.imap-body.php" class="function">imap_body()</a></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>imap_getmailboxes</td>
      <td><span class="function"><strong>imap_list_full()</strong></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>imap_getsubscribed</td>
      <td><span class="function"><strong>imap_lsub_full()</strong></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>imap_header</td>
      <td><span class="function"><a href="function.imap-headerinfo.php" class="function">imap_headerinfo()</a></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>imap_listmailbox</td>
      <td><span class="function"><a href="function.imap-list.php" class="function">imap_list()</a></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>imap_listsubscribed</td>
      <td><span class="function"><a href="function.imap-lsub.php" class="function">imap_lsub()</a></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>imap_rename</td>
      <td><span class="function"><a href="function.imap-renamemailbox.php" class="function">imap_renamemailbox()</a></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>imap_scan</td>
      <td><span class="function"><a href="function.imap-listscan.php" class="function">imap_listscan()</a></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>imap_scanmailbox</td>
      <td><span class="function"><a href="function.imap-listscan.php" class="function">imap_listscan()</a></span></td>
      <td><a href="ref.imap.php" class="link">IMAP</a></td>
     </tr>

     <tr>
      <td>ini_alter</td>
      <td><span class="function"><a href="function.ini-set.php" class="function">ini_set()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>is_double</td>
      <td><span class="function"><a href="function.is-float.php" class="function">is_float()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>is_integer</td>
      <td><span class="function"><a href="function.is-int.php" class="function">is_int()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>is_long</td>
      <td><span class="function"><a href="function.is-int.php" class="function">is_int()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>is_real</td>
      <td><span class="function"><a href="function.is-float.php" class="function">is_float()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>is_writeable</td>
      <td><span class="function"><a href="function.is-writable.php" class="function">is_writable()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>join</td>
      <td><span class="function"><a href="function.implode.php" class="function">implode()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>key_exists</td>
      <td><span class="function"><a href="function.array-key-exists.php" class="function">array_key_exists()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>ldap_close</td>
      <td><span class="function"><a href="function.ldap-unbind.php" class="function">ldap_unbind()</a></span></td>
      <td><a href="ref.ldap.php" class="link">LDAP</a></td>
     </tr>

     <tr>
      <td>mbstrcut</td>
      <td><span class="function"><a href="function.mb-strcut.php" class="function">mb_strcut()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>mbstrlen</td>
      <td><span class="function"><a href="function.mb-strlen.php" class="function">mb_strlen()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>mbstrpos</td>
      <td><span class="function"><a href="function.mb-strpos.php" class="function">mb_strpos()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>mbstrrpos</td>
      <td><span class="function"><a href="function.mb-strrpos.php" class="function">mb_strrpos()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>mbsubstr</td>
      <td><span class="function"><a href="function.mb-substr.php" class="function">mb_substr()</a></span></td>
      <td><a href="ref.mbstring.php" class="link">Multi-bytes Strings</a></td>
     </tr>

     <tr>
      <td>mysql</td>
      <td><span class="function"><a href="function.mysql-db-query.php" class="function">mysql_db_query()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_createdb</td>
      <td><span class="function"><a href="function.mysql-create-db.php" class="function">mysql_create_db()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_db_name</td>
      <td><span class="function"><a href="function.mysql-result.php" class="function">mysql_result()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_dbname</td>
      <td><span class="function"><a href="function.mysql-result.php" class="function">mysql_result()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_dropdb</td>
      <td><span class="function"><a href="function.mysql-drop-db.php" class="function">mysql_drop_db()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_fieldflags</td>
      <td><span class="function"><a href="function.mysql-field-flags.php" class="function">mysql_field_flags()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_fieldlen</td>
      <td><span class="function"><a href="function.mysql-field-len.php" class="function">mysql_field_len()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_fieldname</td>
      <td><span class="function"><a href="function.mysql-field-name.php" class="function">mysql_field_name()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_fieldtable</td>
      <td><span class="function"><a href="function.mysql-field-table.php" class="function">mysql_field_table()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_fieldtype</td>
      <td><span class="function"><a href="function.mysql-field-type.php" class="function">mysql_field_type()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_freeresult</td>
      <td><span class="function"><a href="function.mysql-free-result.php" class="function">mysql_free_result()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_listdbs</td>
      <td><span class="function"><a href="function.mysql-list-dbs.php" class="function">mysql_list_dbs()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_listfields</td>
      <td><span class="function"><a href="function.mysql-list-fields.php" class="function">mysql_list_fields()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_listtables</td>
      <td><span class="function"><a href="function.mysql-list-tables.php" class="function">mysql_list_tables()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_numfields</td>
      <td><span class="function"><a href="function.mysql-num-fields.php" class="function">mysql_num_fields()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_numrows</td>
      <td><span class="function"><a href="function.mysql-num-rows.php" class="function">mysql_num_rows()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_selectdb</td>
      <td><span class="function"><a href="function.mysql-select-db.php" class="function">mysql_select_db()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>mysql_tablename</td>
      <td><span class="function"><a href="function.mysql-result.php" class="function">mysql_result()</a></span></td>
      <td><a href="ref.mysql.php" class="link">MySQL</a></td>
     </tr>

     <tr>
      <td>ociassignelem</td>
      <td><a href="ocicollection.assignelem.php" class="link">OCICollection::assignElem</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocibindbyname</td>
      <td><span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicancel</td>
      <td><span class="function"><a href="function.oci-cancel.php" class="function">oci_cancel()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicloselob</td>
      <td><a href="ocilob.close.php" class="link">OCILob::close</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicollappend</td>
      <td><a href="ocicollection.append.php" class="link">OCICollection::append</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicollassign</td>
      <td><a href="ocicollection.assign.php" class="link">OCICollection::assign</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicollmax</td>
      <td><a href="ocicollection.max.php" class="link">OCICollection::max</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicollsize</td>
      <td><a href="ocicollection.size.php" class="link">OCICollection::size</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicolltrim</td>
      <td><a href="ocicollection.trim.php" class="link">OCICollection::trim</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicolumnisnull</td>
      <td><span class="function"><a href="function.oci-field-is-null.php" class="function">oci_field_is_null()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicolumnname</td>
      <td><span class="function"><a href="function.oci-field-name.php" class="function">oci_field_name()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicolumnprecision</td>
      <td><span class="function"><a href="function.oci-field-precision.php" class="function">oci_field_precision()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicolumnscale</td>
      <td><span class="function"><a href="function.oci-field-scale.php" class="function">oci_field_scale()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicolumnsize</td>
      <td><span class="function"><a href="function.oci-field-size.php" class="function">oci_field_size()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicolumntype</td>
      <td><span class="function"><a href="function.oci-field-type.php" class="function">oci_field_type()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicolumntyperaw</td>
      <td><span class="function"><a href="function.oci-field-type-raw.php" class="function">oci_field_type_raw()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocicommit</td>
      <td><span class="function"><a href="function.oci-commit.php" class="function">oci_commit()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocidefinebyname</td>
      <td><span class="function"><a href="function.oci-define-by-name.php" class="function">oci_define_by_name()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocierror</td>
      <td><span class="function"><a href="function.oci-error.php" class="function">oci_error()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ociexecute</td>
      <td><span class="function"><a href="function.oci-execute.php" class="function">oci_execute()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocifetch</td>
      <td><span class="function"><a href="function.oci-fetch.php" class="function">oci_fetch()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocifetchinto</td>
      <td><span class="function"><a href="function.oci-fetch-array.php" class="function">oci_fetch_array()</a></span>, <span class="function"><a href="function.oci-fetch-row.php" class="function">oci_fetch_row()</a></span>, <span class="function"><a href="function.oci-fetch-assoc.php" class="function">oci_fetch_assoc()</a></span>, <span class="function"><a href="function.oci-fetch-object.php" class="function">oci_fetch_object()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocifetchstatement</td>
      <td><span class="function"><a href="function.oci-fetch-all.php" class="function">oci_fetch_all()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocifreecollection</td>
      <td><a href="ocicollection.free.php" class="link">OCICollection::free</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocifreecursor</td>
      <td><span class="function"><a href="function.oci-free-statement.php" class="function">oci_free_statement()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocifreedesc</td>
      <td><span class="function"><a href="function.oci-free-descriptor.php" class="function">oci_free_descriptor()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocifreestatement</td>
      <td><span class="function"><a href="function.oci-free-statement.php" class="function">oci_free_statement()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocigetelem</td>
      <td><a href="ocicollection.getelem.php" class="link">OCICollection::getElem</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ociinternaldebug</td>
      <td><span class="function"><a href="function.oci-internal-debug.php" class="function">oci_internal_debug()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ociloadlob</td>
      <td><a href="ocilob.load.php" class="link">OCILob::load</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocilogon</td>
      <td><span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocinewcollection</td>
      <td><span class="function"><a href="function.oci-new-collection.php" class="function">oci_new_collection()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocinewcursor</td>
      <td><span class="function"><a href="function.oci-new-cursor.php" class="function">oci_new_cursor()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocinewdescriptor</td>
      <td><span class="function"><a href="function.oci-new-descriptor.php" class="function">oci_new_descriptor()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocinlogon</td>
      <td><span class="function"><a href="function.oci-new-connect.php" class="function">oci_new_connect()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocinumcols</td>
      <td><span class="function"><a href="function.oci-num-fields.php" class="function">oci_num_fields()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ociparse</td>
      <td><span class="function"><a href="function.oci-parse.php" class="function">oci_parse()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocipasswordchange</td>
      <td><span class="function"><a href="function.oci-password-change.php" class="function">oci_password_change()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ociplogon</td>
      <td><span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ociresult</td>
      <td><span class="function"><a href="function.oci-result.php" class="function">oci_result()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocirollback</td>
      <td><span class="function"><a href="function.oci-rollback.php" class="function">oci_rollback()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocisavelob</td>
      <td><a href="ocilob.save.php" class="link">OCILob::save</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocisavelobfile</td>
      <td><a href="ocilob.import.php" class="link">OCILob::import</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ociserverversion</td>
      <td><span class="function"><a href="function.oci-server-version.php" class="function">oci_server_version()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocisetprefetch</td>
      <td><span class="function"><a href="function.oci-set-prefetch.php" class="function">oci_set_prefetch()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ocistatementtype</td>
      <td><span class="function"><a href="function.oci-statement-type.php" class="function">oci_statement_type()</a></span></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ociwritelobtofile</td>
      <td><a href="ocilob.export.php" class="link">OCILob::export</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>ociwritetemporarylob</td>
      <td><a href="ocilob.writetemporary.php" class="link">OCILob::writeTemporary</a></td>
      <td><a href="ref.oci8.php" class="link">OCI8</a></td>
     </tr>

     <tr>
      <td>odbc_do</td>
      <td><span class="function"><a href="function.odbc-exec.php" class="function">odbc_exec()</a></span></td>
      <td><a href="ref.uodbc.php" class="link">ODBC</a></td>
     </tr>

     <tr>
      <td>odbc_field_precision</td>
      <td><span class="function"><a href="function.odbc-field-len.php" class="function">odbc_field_len()</a></span></td>
      <td><a href="ref.uodbc.php" class="link">ODBC</a></td>
     </tr>

     <tr>
      <td>pg_clientencoding</td>
      <td><span class="function"><a href="function.pg-client-encoding.php" class="function">pg_client_encoding()</a></span></td>
      <td><a href="ref.pgsql.php" class="link">PostgreSQL</a></td>
     </tr>

     <tr>
      <td>pg_setclientencoding</td>
      <td><span class="function"><a href="function.pg-set-client-encoding.php" class="function">pg_set_client_encoding()</a></span></td>
      <td><a href="ref.pgsql.php" class="link">PostgreSQL</a></td>
     </tr>

     <tr>
      <td>pos</td>
      <td><span class="function"><a href="function.current.php" class="function">current()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>recode</td>
      <td><span class="function"><a href="function.recode-string.php" class="function">recode_string()</a></span></td>
      <td><a href="ref.recode.php" class="link">Recode</a></td>
     </tr>

     <tr>
      <td>show_source</td>
      <td><span class="function"><a href="function.highlight-file.php" class="function">highlight_file()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>sizeof</td>
      <td><span class="function"><a href="function.count.php" class="function">count()</a></span></td>
      <td>Base syntax</td>
     </tr>

     <tr>
      <td>snmpwalkoid</td>
      <td><span class="function"><a href="function.snmprealwalk.php" class="function">snmprealwalk()</a></span></td>
      <td><a href="ref.snmp.php" class="link">SNMP</a></td>
     </tr>

     <tr>
      <td>strchr</td>
      <td><span class="function"><a href="function.strstr.php" class="function">strstr()</a></span></td>
      <td>Base syntax</td>
     </tr>

    </tbody>
   
  </table>

 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/aliases.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Faliases%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=aliases&amp;repo=en&amp;redirect=https://www.php.net/manual/en/aliases.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="appendices.php">Appendices</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="history.php" title="History of PHP and Related Projects">History of PHP and Related Projects</a>
                        </li>
                                                <li class="">
                            <a href="examples.php" title="About manual examples">About manual examples</a>
                        </li>
                                                <li class="">
                            <a href="migration84.php" title="Migrating from PHP 8.3.x to PHP 8.4.x">Migrating from PHP 8.3.x to PHP 8.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration83.php" title="Migrating from PHP 8.2.x to PHP 8.3.x">Migrating from PHP 8.2.x to PHP 8.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration82.php" title="Migrating from PHP 8.1.x to PHP 8.2.x">Migrating from PHP 8.1.x to PHP 8.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration81.php" title="Migrating from PHP 8.0.x to PHP 8.1.x">Migrating from PHP 8.0.x to PHP 8.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration80.php" title="Migrating from PHP 7.4.x to PHP 8.0.x">Migrating from PHP 7.4.x to PHP 8.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration74.php" title="Migrating from PHP 7.3.x to PHP 7.4.x">Migrating from PHP 7.3.x to PHP 7.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration73.php" title="Migrating from PHP 7.2.x to PHP 7.3.x">Migrating from PHP 7.2.x to PHP 7.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration72.php" title="Migrating from PHP 7.1.x to PHP 7.2.x">Migrating from PHP 7.1.x to PHP 7.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration71.php" title="Migrating from PHP 7.0.x to PHP 7.1.x">Migrating from PHP 7.0.x to PHP 7.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration70.php" title="Migrating from PHP 5.6.x to PHP 7.0.x">Migrating from PHP 5.6.x to PHP 7.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration56.php" title="Migrating from PHP 5.5.x to PHP 5.6.x">Migrating from PHP 5.5.x to PHP 5.6.x</a>
                        </li>
                                                <li class="">
                            <a href="debugger.php" title="Debugging in PHP">Debugging in PHP</a>
                        </li>
                                                <li class="">
                            <a href="configure.php" title="Configure options">Configure options</a>
                        </li>
                                                <li class="">
                            <a href="ini.php" title="php.ini directives">php.ini directives</a>
                        </li>
                                                <li class="">
                            <a href="extensions.php" title="Extension List/Categorization">Extension List/Categorization</a>
                        </li>
                                                <li class="current">
                            <a href="aliases.php" title="List of Function Aliases">List of Function Aliases</a>
                        </li>
                                                <li class="">
                            <a href="reserved.php" title="List of Reserved Words">List of Reserved Words</a>
                        </li>
                                                <li class="">
                            <a href="resource.php" title="List of Resource Types">List of Resource Types</a>
                        </li>
                                                <li class="">
                            <a href="filters.php" title="List of Available Filters">List of Available Filters</a>
                        </li>
                                                <li class="">
                            <a href="transports.php" title="List of Supported Socket Transports">List of Supported Socket Transports</a>
                        </li>
                                                <li class="">
                            <a href="types.comparisons.php" title="PHP type comparison tables">PHP type comparison tables</a>
                        </li>
                                                <li class="">
                            <a href="tokens.php" title="List of Parser Tokens">List of Parser Tokens</a>
                        </li>
                                                <li class="">
                            <a href="userlandnaming.php" title="Userland Naming Guide">Userland Naming Guide</a>
                        </li>
                                                <li class="">
                            <a href="about.php" title="About the manual">About the manual</a>
                        </li>
                                                <li class="">
                            <a href="cc.license.php" title="Creative Commons Attribution 3.0">Creative Commons Attribution 3.0</a>
                        </li>
                                                <li class="">
                            <a href="indexes.php" title="Index listing">Index listing</a>
                        </li>
                                                <li class="">
                            <a href="doc.changelog.php" title="Changelog">Changelog</a>
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
