<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Options - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.commandline.options.php">
 <link rel="shorturl" href="https://www.php.net/commandline.options">
 <link rel="alternate" href="https://www.php.net/commandline.options" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.commandline.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.commandline.differences.php">
 <link rel="next" href="https://www.php.net/manual/en/features.commandline.usage.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.commandline.options.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.commandline.options.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.commandline.options.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.commandline.options.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.commandline.options.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.commandline.options.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.commandline.options.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.commandline.options.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.commandline.options.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.commandline.options.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.commandline.options.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Command line options" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Options - Manual" />
<meta name="twitter:description" content="Command line options" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Options - Manual" />
<meta itemprop="description" content="Command line options" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Command line options" />

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
        <a href="features.commandline.usage.php">
          Usage &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.commandline.differences.php">
          &laquo; Differences to other SAPIs        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.commandline.php'>Command line usage</a></li>      </ul>
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
            <option value='en/features.commandline.options.php' selected="selected">English</option>
            <option value='de/features.commandline.options.php'>German</option>
            <option value='es/features.commandline.options.php'>Spanish</option>
            <option value='fr/features.commandline.options.php'>French</option>
            <option value='it/features.commandline.options.php'>Italian</option>
            <option value='ja/features.commandline.options.php'>Japanese</option>
            <option value='pt_BR/features.commandline.options.php'>Brazilian Portuguese</option>
            <option value='ru/features.commandline.options.php'>Russian</option>
            <option value='tr/features.commandline.options.php'>Turkish</option>
            <option value='uk/features.commandline.options.php'>Ukrainian</option>
            <option value='zh/features.commandline.options.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.commandline.options" class="section">
  <h2 class="title">Command line options</h2>
  
  
  <p class="para">
   The list of command line options provided by the PHP binary can be queried
   at any time by running PHP with the <strong class="option unknown">-h</strong> switch:
   <div class="example-contents screen">
<div class="cdata"><pre>
Usage: php [options] [-f] &lt;file&gt; [--] [args...]
   php [options] -r &lt;code&gt; [--] [args...]
   php [options] [-B &lt;begin_code&gt;] -R &lt;code&gt; [-E &lt;end_code&gt;] [--] [args...]
   php [options] [-B &lt;begin_code&gt;] -F &lt;file&gt; [-E &lt;end_code&gt;] [--] [args...]
   php [options] -- [args...]
   php [options] -a

  -a               Run interactively
  -c &lt;path&gt;|&lt;file&gt; Look for php.ini file in this directory
  -n               No php.ini file will be used
  -d foo[=bar]     Define INI entry foo with value &#039;bar&#039;
  -e               Generate extended information for debugger/profiler
  -f &lt;file&gt;        Parse and execute &lt;file&gt;.
  -h               This help
  -i               PHP information
  -l               Syntax check only (lint)
  -m               Show compiled in modules
  -r &lt;code&gt;        Run PHP &lt;code&gt; without using script tags &lt;?..?&gt;
  -B &lt;begin_code&gt;  Run PHP &lt;begin_code&gt; before processing input lines
  -R &lt;code&gt;        Run PHP &lt;code&gt; for every input line
  -F &lt;file&gt;        Parse and execute &lt;file&gt; for every input line
  -E &lt;end_code&gt;    Run PHP &lt;end_code&gt; after processing all input lines
  -H               Hide any passed arguments from external tools.
  -S &lt;addr&gt;:&lt;port&gt; Run with built-in web server.
  -t &lt;docroot&gt;     Specify document root &lt;docroot&gt; for built-in web server.
  -s               Output HTML syntax highlighted source.
  -v               Version number
  -w               Output source with stripped comments and whitespace.
  -z &lt;file&gt;        Load Zend extension &lt;file&gt;.

  args...          Arguments passed to script. Use -- args when first argument
                   starts with - or script is read from stdin

  --ini            Show configuration file names

  --rf &lt;name&gt;      Show information about function &lt;name&gt;.
  --rc &lt;name&gt;      Show information about class &lt;name&gt;.
  --re &lt;name&gt;      Show information about extension &lt;name&gt;.
  --rz &lt;name&gt;      Show information about Zend extension &lt;name&gt;.
  --ri &lt;name&gt;      Show configuration for extension &lt;name&gt;.
</pre></div>
   </div>
  </p>
  
  <p class="para">
   <table class="doctable table">
    <caption><strong>Command line options</strong></caption>
    
     <thead>
      <tr>
       <th>Option</th>
       <th>Long Option</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>-a</td>
       <td>--interactive</td>
       <td>
        <p class="para">
         Run PHP interactively. For more information, see the <a href="features.commandline.interactive.php" class="link">Interactive shell</a>
         section.
        </p>
       </td>
      </tr>

      <tr>
       <td>-b</td>
       <td>--bindpath</td>
       <td>
        <p class="para">
         Bind Path for external FASTCGI Server mode (<abbr title="Common Gateway Interface">CGI</abbr>
         only).
        </p>
       </td>
      </tr>

      <tr>
       <td>-C</td>
       <td>--no-chdir</td>
       <td>
        <p class="para">
         Do not chdir to the script&#039;s directory (<abbr title="Common Gateway Interface">CGI</abbr> only).
        </p>
       </td>
      </tr>

      <tr>
       <td>-q</td>
       <td>--no-header</td>
       <td>
        <p class="para">
         Quiet-mode. Suppress <abbr title="Hypertext Transfer Protocol">HTTP</abbr> header output
         (<abbr title="Common Gateway Interface">CGI</abbr> only).
        </p>
       </td>
      </tr>

      <tr>
       <td>-T</td>
       <td>--timing</td>
       <td>
        <p class="para">
         Measure execution time of script repeated <var class="varname">count</var>
         times (<abbr title="Common Gateway Interface">CGI</abbr> only).
        </p>
       </td>
      </tr>

      <tr>
       <td>-c</td>
       <td>--php-ini</td>
       <td>
        <p class="para">
         Specifies either a directory in which to look for
         <var class="filename">php.ini</var>, or a custom <code class="literal">INI</code> file
         (which does not need to be named <var class="filename">php.ini</var>), e.g.:
        </p>
        <p class="para"><div class="informalexample">
         <div class="example-contents screen">
<div class="cdata"><pre>
$ php -c /custom/directory/ my_script.php

$ php -c /custom/directory/custom-file.ini my_script.php
</pre></div>
         </div>
        </div></p>
        <p class="para">
         If this option is not specified, <var class="filename">php.ini</var> is searched for in the
         <a href="configuration.file.php" class="link">default locations</a>.
        </p>
       </td>
      </tr>

      <tr>
       <td>-n</td>
       <td>--no-php-ini</td>
       <td>
        <p class="para">
         Ignore <var class="filename">php.ini</var> completely.
        </p>
       </td>
      </tr>

      <tr>
       <td>-d</td>
       <td>--define</td>
       <td>
        <p class="para">
         Set a custom value for any of the configuration
         directives allowed in <var class="filename">php.ini</var>. The syntax is:
         <div class="example-contents screen">
 <div class="cdata"><pre>
 -d configuration_directive[=value]
 </pre></div>
         </div>
        </p>
        <p class="para"><div class="example" id="example-542">
         <p><strong>Example #1 Example of using <code class="literal">-d</code> to set an INI setting</strong></p>
         <div class="example-contents screen">
<div class="cdata"><pre>
# Omitting the value part will set the given configuration directive to &quot;1&quot;
$ php -d max_execution_time
        -r &#039;$foo = ini_get(&quot;max_execution_time&quot;); var_dump($foo);&#039;
string(1) &quot;1&quot;

# Passing an empty value part will set the configuration directive to &quot;&quot;
php -d max_execution_time=
        -r &#039;$foo = ini_get(&quot;max_execution_time&quot;); var_dump($foo);&#039;
string(0) &quot;&quot;

# The configuration directive will be set to anything passed after the &#039;=&#039; character
$  php -d max_execution_time=20
        -r &#039;$foo = ini_get(&quot;max_execution_time&quot;); var_dump($foo);&#039;
string(2) &quot;20&quot;
$  php
        -d max_execution_time=doesntmakesense
        -r &#039;$foo = ini_get(&quot;max_execution_time&quot;); var_dump($foo);&#039;
string(15) &quot;doesntmakesense&quot;
</pre></div>
         </div>
        </div></p>
       </td>
      </tr>

      <tr>
       <td>-e</td>
       <td>--profile-info</td>
       <td>
        <p class="para">
         Activate the extended information mode, to be used by a
         debugger/profiler.
        </p>
       </td>
      </tr>

      <tr>
       <td>-f</td>
       <td>--file</td>
       <td>
        <p class="para">
         Parse and execute the specified file. The
         <strong class="option unknown">-f</strong> is optional and may be omitted - providing just
         the filename to execute is sufficient.
        </p>
       </td>
      </tr>

      <tr>
       <td>-h and -?</td>
       <td>--help and --usage</td>
       <td>
        Output a list of
        command line options with one line descriptions of what they do.
       </td>
      </tr>

      <tr>
       <td>-i</td>
       <td>--info</td>
       <td>
        Calls <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>, and prints out the results.
        If PHP is not working correctly, it is advisable to use the command
        <strong class="command">php -i</strong> and see whether any error
        messages are printed out before or in place of the information tables.
        Beware that when using the <abbr title="Common Gateway Interface">CGI</abbr> mode the output is in
        <abbr title="Hyper Text Markup Language">HTML</abbr> and therefore very large.
       </td>
      </tr>

      <tr>
       <td>-l</td>
       <td>--syntax-check</td>
       <td>
        <p class="para">
         Syntax check but do not execute the given PHP code.
         The input from standard input will be processed if no filenames are specified,
         otherwise each filename will be checked.
         On success, the text
         <code class="literal">No syntax errors detected in &lt;filename&gt;</code> is
         written to standard output.
         On failure, the text <code class="literal">Errors parsing &lt;filename&gt;</code>
         is written to standard output in addition to the internal parser error.
         If any failures are found in the specified files (or standard input),
         the shell return code is set to <code class="literal">-1</code>, otherwise the
         shell return code is set to <code class="literal">0</code>.
        </p>
        <p class="para">
         This option won&#039;t find fatal errors (like undefined functions) that
         require executing the code.
        </p>
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <p class="para">
          Prior to PHP 8.3.0, it was only possible to specify one filename to
          be checked.
         </p>
        </p></blockquote>
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <p class="para">
          This option does not work together with the <strong class="option unknown">-r</strong>
          option.
         </p>
        </p></blockquote>
       </td>
      </tr>

      <tr>
       <td>-m</td>
       <td>--modules</td>
       <td>
        <p class="para"><div class="example" id="example-543">
         <p><strong>Example #2 Printing built in (and loaded) PHP and Zend modules</strong></p>
         <div class="example-contents screen">
<div class="cdata"><pre>
$ php -m
[PHP Modules]
xml
tokenizer
standard
session
posix
pcre
overload
mysql
mbstring
ctype

[Zend Modules]
</pre></div>
         </div>
        </div></p>
       </td>
      </tr>

      <tr>
       <td>-r</td>
       <td>--run</td>
       <td>
        <p class="para">
         Allows execution of PHP included directly on the command line.
         The PHP start and end tags (<code class="literal">&lt;?php</code> and
         <code class="literal">?&gt;</code>) are <strong>not
         needed</strong> and will cause a parse error if present.
        </p>
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <p class="para">
          Care must be taken when using this form of PHP not
          to collide with command line variable substitution done by the
          shell.
         </p>
         <div class="example" id="example-544">
          <p><strong>Example #3 Getting a syntax error when using double quotes</strong></p>
          <div class="example-contents screen">
<div class="cdata"><pre>
$ php -r &quot;$foo = get_defined_constants();&quot;
PHP Parse error:  syntax error, unexpected &#039;=&#039; in Command line code on line 1

Parse error: syntax error, unexpected &#039;=&#039; in Command line code on line 1
</pre></div>
          </div>
         </div>
         <p class="para">
          The problem here is that sh/bash performs variable substitution
          even when using double quotes <code class="literal">&quot;</code>. Since the
          variable <var class="varname">$foo</var> is unlikely to be defined, it
          expands to nothing which results in the code passed to
          PHP for execution actually reading:
         </p>
         <div class="informalexample">
          <div class="example-contents screen">
<div class="cdata"><pre>
$ php -r &quot; = get_defined_constants();&quot;
</pre></div>
          </div>
         </div>
         
         <p class="para">
          The correct way would be to use single quotes <code class="literal">&#039;</code>.
          Variables in single-quoted strings are not expanded
          by sh/bash.
         </p>
         <div class="example" id="example-545">
          <p><strong>Example #4 Using single quotes to prevent the shell&#039;s variable
          substitution</strong></p>
          <div class="example-contents screen">
<div class="cdata"><pre>
$ php -r &#039;$foo = get_defined_constants(); var_dump($foo);&#039;
array(370) {
  [&quot;E_ERROR&quot;]=&gt;
  int(1)
  [&quot;E_WARNING&quot;]=&gt;
  int(2)
  [&quot;E_PARSE&quot;]=&gt;
  int(4)
  [&quot;E_NOTICE&quot;]=&gt;
  int(8)
  [&quot;E_CORE_ERROR&quot;]=&gt;
  [...]
</pre></div>
          </div>
         </div>
         <p class="para">
          If using a shell other than sh/bash, further issues might be
          experienced - if appropriate, a bug report should be opened at
          <a href="https://github.com/php/php-src/issues" class="link external">&raquo;&nbsp;https://github.com/php/php-src/issues</a>.
          It is still easy to run into trouble when trying to use variables
          (shell or PHP) in command-line code, or using backslashes for
          escaping, so take great care when doing so. You have been warned!
         </p>
        </p></blockquote>
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <p class="para">
          <strong class="option unknown">-r</strong> is available in the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr>, but not in the
          <em>CGI</em> <abbr title="Server Application Programming Interface">SAPI</abbr>.
         </p>
        </p></blockquote>
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <p class="para">
          This option is only intended for very basic code, so some
          configuration directives (such as <a href="ini.core.php#ini.auto-prepend-file" class="link">auto_prepend_file</a> and <a href="ini.core.php#ini.auto-append-file" class="link">auto_append_file</a>) are ignored
          in this mode.
         </p>
        </p></blockquote>
       </td>
      </tr>

      <tr>
       <td>-B</td>
       <td>--process-begin</td>
       <td>
        <p class="para">
         PHP code to execute before processing stdin.
        </p>
       </td>
      </tr>

      <tr>
       <td>-R</td>
       <td>--process-code</td>
       <td>
        <p class="para">
         PHP code to execute for every input line.
        </p>
        <p class="para">
         There are two special variables available in this mode:
         <var class="varname">$argn</var> and <var class="varname">$argi</var>.
         <var class="varname">$argn</var> will contain the line PHP is processing at
         that moment, while <var class="varname">$argi</var> will contain the line
         number.
        </p>
       </td>
      </tr>

      <tr>
       <td>-F</td>
       <td>--process-file</td>
       <td>
        <p class="para">
         PHP file to execute for every input line.
        </p>
       </td>
      </tr>

      <tr>
       <td>-E</td>
       <td>--process-end</td>
       <td>
        <p class="para">
         PHP code to execute after processing the input.
        </p>
        <p class="para"><div class="example" id="example-546">
         <p><strong>Example #5 Using the <strong class="option unknown">-B</strong>, <strong class="option unknown">-R</strong> and
          <strong class="option unknown">-E</strong> options to count the number of lines of a
          project.
         </strong></p>
         <div class="example-contents screen">
<div class="cdata"><pre>
$ find my_proj | php -B &#039;$l=0;&#039; -R &#039;$l += count(@file($argn));&#039; -E &#039;echo &quot;Total Lines: $l\n&quot;;&#039;
Total Lines: 37328
</pre></div>
         </div>
        </div></p>
       </td>
      </tr>

      <tr>
       <td>-S</td>
       <td>--server</td>
       <td>
        <p class="para">
         Starts <a href="features.commandline.webserver.php" class="link">built-in web
         server</a>.
        </p>
       </td>
      </tr>

      <tr>
       <td>-t</td>
       <td>--docroot</td>
       <td>
        Specifies document root for <a href="features.commandline.webserver.php" class="link">built-in web server</a>.
       </td>
      </tr>

      <tr>
       <td>-s</td>
       <td>--syntax-highlight and --syntax-highlighting</td>
       <td>
        <p class="para">
         Display colour syntax highlighted source.
        </p>
        <p class="para">
         This option uses the internal mechanism to parse the file and writes
         an HTML highlighted version of it to
         standard output. Note that all it does is generate a block of
         <code class="literal">&lt;code&gt; [...] &lt;/code&gt;</code>
         HTML tags, no HTML headers.
        </p>
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <p class="para">
          This option does not work together with the <strong class="option unknown">-r</strong>
          option.
         </p>
        </p></blockquote>
       </td>
      </tr>

      <tr>
       <td>-v</td>
       <td>--version</td>
       <td>
        <p class="para"><div class="example" id="example-547">
         <p><strong>Example #6 Using <strong class="option unknown">-v</strong> to get the <abbr title="Server Application Programming Interface">SAPI</abbr>
         name and the version of PHP and Zend</strong></p>
         <div class="example-contents screen">
<div class="cdata"><pre>
$ php -v
PHP 5.3.1 (cli) (built: Dec 11 2009 19:55:07)
Copyright (c) 1997-2009 The PHP Group
Zend Engine v2.3.0, Copyright (c) 1998-2009 Zend Technologies
</pre></div>
         </div>
        </div></p>
       </td>
      </tr>

      <tr>
       <td>-w</td>
       <td>--strip</td>
       <td>
        <p class="para">
         Display source with comments and whitespace stripped.
        </p>
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <p class="para">
          This option does not work together with the <strong class="option unknown">-r</strong>
          option.
         </p>
        </p></blockquote>
       </td>
      </tr>

      <tr>
       <td>-z</td>
       <td>--zend-extension</td>
       <td>
        <p class="para">
         Load Zend extension. If only a filename is given, PHP tries to load
         this extension from the current default library path on your system
         (usually <var class="filename">/etc/ld.so.conf</var> on Linux systems, for
         example). Passing a filename with an absolute path will
         not use the system&#039;s library search path. A relative filename including
         directory information will tell PHP to try
         loading the extension relative to the current directory.
        </p>
       </td>
      </tr>

      <tr>
       <td class="empty">&nbsp;</td>
       <td>--ini</td>
       <td>
        <p class="para">
         Show configuration file names and scanned directories.
         <div class="example" id="example-548">
          <p><strong>Example #7 <code class="literal">--ini</code> example</strong></p>
          <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php --ini
Configuration File (php.ini) Path: /usr/dev/php/5.2/lib
Loaded Configuration File:         /usr/dev/php/5.2/lib/php.ini
Scan for additional .ini files in: (none)
Additional .ini files parsed:      (none)</pre>
</div>
          </div>

         </div>
        </p>
       </td>
      </tr>

      <tr>
       <td>--rf</td>
       <td>--rfunction</td>
       <td>
        <p class="para">
         Show information about the given function or class method (e.g.
         number and name of the parameters).
        </p>
        <p class="para">
         This option is only available if PHP was compiled with
         <a href="book.reflection.php" class="link">Reflection</a> support.
        </p>
        <p class="para">
         <div class="example" id="example-549">
          <p><strong>Example #8 basic <code class="literal">--rf</code> usage</strong></p>
          <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php --rf var_dump
Function [ &lt;internal&gt; public function var_dump ] {

  - Parameters [2] {
    Parameter #0 [ &lt;required&gt; $var ]
    Parameter #1 [ &lt;optional&gt; $... ]
  }
}</pre>
</div>
          </div>

         </div>
        </p>
       </td>
      </tr>

      <tr>
       <td>--rc</td>
       <td>--rclass</td>
       <td>
        <p class="para">
         Show information about the given class (list of constants, properties
         and methods).
        </p>
        <p class="para">
         This option is only available if PHP was compiled with
         <a href="book.reflection.php" class="link">Reflection</a> support.
        </p>
        <p class="para">
         <div class="example" id="example-550">
          <p><strong>Example #9 <code class="literal">--rc</code> example</strong></p>
          <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php --rc Directory
Class [ &lt;internal:standard&gt; class Directory ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [3] {
    Method [ &lt;internal&gt; public method close ] {
    }

    Method [ &lt;internal&gt; public method rewind ] {
    }

    Method [ &lt;internal&gt; public method read ] {
    }
  }
}</pre>
</div>
          </div>

         </div>
        </p>
       </td>
      </tr>

      <tr>
       <td>--re</td>
       <td>--rextension</td>
       <td>
        <p class="para">
         Show information about the given extension (list of <var class="filename">php.ini</var> options,
         defined functions, constants and classes).
        </p>
        <p class="para">
         This option is only available if PHP was compiled with
         <a href="book.reflection.php" class="link">Reflection</a> support.
        </p>
        <p class="para">
         <div class="example" id="example-551">
          <p><strong>Example #10 <code class="literal">--re</code> example</strong></p>
          <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php --re json
Extension [ &lt;persistent&gt; extension #19 json version 1.2.1 ] {

  - Functions {
    Function [ &lt;internal&gt; function json_encode ] {
    }
    Function [ &lt;internal&gt; function json_decode ] {
    }
  }
}</pre>
</div>
          </div>

         </div>
        </p>
       </td>
      </tr>

      <tr>
       <td>--rz</td>
       <td>--rzendextension</td>
       <td>
        <p class="para">
         Show the configuration information for the given Zend extension (the
         same information that is returned by <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>).
        </p>
       </td>
      </tr>

      <tr>
       <td>--ri</td>
       <td>--rextinfo</td>
       <td>
        <p class="para">
         Show the configuration information for the given extension (the same
         information that is returned by <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>).
         The core configuration information
         is available using &quot;main&quot; as extension name.
        </p>
        <p class="para">
         <div class="example" id="example-552">
          <p><strong>Example #11 <code class="literal">--ri</code> example</strong></p>
          <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php --ri date

date

date/time support =&gt; enabled
&quot;Olson&quot; Timezone Database Version =&gt; 2009.20
Timezone Database =&gt; internal
Default timezone =&gt; Europe/Oslo

Directive =&gt; Local Value =&gt; Master Value
date.timezone =&gt; Europe/Oslo =&gt; Europe/Oslo
date.default_latitude =&gt; 59.930972 =&gt; 59.930972
date.default_longitude =&gt; 10.776699 =&gt; 10.776699
date.sunset_zenith =&gt; 90.583333 =&gt; 90.583333
date.sunrise_zenith =&gt; 90.583333 =&gt; 90.583333</pre>
</div>
          </div>

         </div>
        </p>
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
  
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Options <code class="literal">-rBRFEH</code>, <code class="literal">--ini</code> and
    <code class="literal">--r[fcezi]</code> are available only in <abbr title="Command Line Interpreter/Interface">CLI</abbr>.
   </p>
  </p></blockquote>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/commandline.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.commandline.options%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.commandline.options&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.options.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128995">  <div class="votes">
    <div id="Vu128995">
    <a href="/manual/vote-note.php?id=128995&amp;page=features.commandline.options&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128995">
    <a href="/manual/vote-note.php?id=128995&amp;page=features.commandline.options&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128995" title="55% like this...">
    1
    </div>
  </div>
  <a href="#128995" class="name">
  <strong class="user"><em>dch</em></strong></a><a class="genanchor" href="#128995"> &para;</a><div class="date" title="2023-11-03 10:33"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128995">
<div class="phpcode"><code><span class="html">If you would like to see the PHP's current configuration using the -i switch from the shell command line with php.ini specified, then the order of arguments is important. Putting -i after -c gives the intended result.<br /><br />Info is printed out for the default php.ini (cli)<br />$ php -i --php-ini /etc/php/7.4/fpm/php.ini | grep -i "loaded conf"<br />Loaded Configuration File =&gt; /etc/php/7.4/cli/php.ini<br /><br />Info is printed out for the desired php.ini (fpm)<br />$ php --php-ini /etc/php/7.4/fpm/php.ini -i | grep -i "loaded conf"<br />Loaded Configuration File =&gt; /etc/php/7.4/fpm/php.ini</span></code></div>
  </div>
 </div>
  <div class="note" id="115853">  <div class="votes">
    <div id="Vu115853">
    <a href="/manual/vote-note.php?id=115853&amp;page=features.commandline.options&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115853">
    <a href="/manual/vote-note.php?id=115853&amp;page=features.commandline.options&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115853" title="46% like this...">
    -4
    </div>
  </div>
  <a href="#115853" class="name">
  <strong class="user"><em>Ap.Muthu</em></strong></a><a class="genanchor" href="#115853"> &para;</a><div class="date" title="2014-10-03 03:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115853">
<div class="phpcode"><code><span class="html">If we start the php's built in webserver (PHP v5.4 onwards) with:<br />        php -S localhost:8000 -t htdocs<br />and have an image file picture.jpg in it<br />and reference it in a html page with:<br />         &lt;img src="picture.jpg"&gt;<br />the rendered page will not show the image and the html code behind the image is:<br />        <a href="http://localhost:8000/index.php/picture.jpg" rel="nofollow" target="_blank">http://localhost:8000/index.php/picture.jpg</a><br /><br />If however, the html code in the page is:<br />         &lt;img src="/picture.jpg"&gt;<br />the picture displays correctly.<br /><br />Hence relative addressing is broken in PHP 5.4.33 Win32 VC9 build.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.commandline.options&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.options.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.commandline.php">Command line usage</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.commandline.differences.php" title="Differences to other SAPIs">Differences to other SAPIs</a>
                        </li>
                                                <li class="current">
                            <a href="features.commandline.options.php" title="Options">Options</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.usage.php" title="Usage">Usage</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.io-streams.php" title="I/O streams">I/O streams</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.interactive.php" title="Interactive shell">Interactive shell</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.webserver.php" title="Built-&#8203;in web server">Built-&#8203;in web server</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.ini.php" title="INI settings">INI settings</a>
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
