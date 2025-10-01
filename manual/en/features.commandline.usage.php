<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Usage - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.commandline.usage.php">
 <link rel="shorturl" href="https://www.php.net/commandline.usage">
 <link rel="alternate" href="https://www.php.net/commandline.usage" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.commandline.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.commandline.options.php">
 <link rel="next" href="https://www.php.net/manual/en/features.commandline.io-streams.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.commandline.usage.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.commandline.usage.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.commandline.usage.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.commandline.usage.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.commandline.usage.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.commandline.usage.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.commandline.usage.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.commandline.usage.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.commandline.usage.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.commandline.usage.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.commandline.usage.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Executing PHP files" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Usage - Manual" />
<meta name="twitter:description" content="Executing PHP files" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Usage - Manual" />
<meta itemprop="description" content="Executing PHP files" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Executing PHP files" />

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
        <a href="features.commandline.io-streams.php">
          I/O streams &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.commandline.options.php">
          &laquo; Options        </a>
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
            <option value='en/features.commandline.usage.php' selected="selected">English</option>
            <option value='de/features.commandline.usage.php'>German</option>
            <option value='es/features.commandline.usage.php'>Spanish</option>
            <option value='fr/features.commandline.usage.php'>French</option>
            <option value='it/features.commandline.usage.php'>Italian</option>
            <option value='ja/features.commandline.usage.php'>Japanese</option>
            <option value='pt_BR/features.commandline.usage.php'>Brazilian Portuguese</option>
            <option value='ru/features.commandline.usage.php'>Russian</option>
            <option value='tr/features.commandline.usage.php'>Turkish</option>
            <option value='uk/features.commandline.usage.php'>Ukrainian</option>
            <option value='zh/features.commandline.usage.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.commandline.usage" class="section">
  <h2 class="title">Executing PHP files</h2>
  
  
  <p class="para">
   There are three different ways of supplying the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> with PHP code
   to be executed:
   <ol type="1">
    <li class="listitem">
     <p class="para">
      Tell PHP to execute a certain file.
     </p>
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
$ php my_script.php

$ php -f my_script.php
</pre></div>
      </div>
     </div>
     <p class="para">
      Both ways (whether using the <strong class="option unknown">-f</strong> switch or not) execute
      the file <var class="filename">my_script.php</var>. Note that there is no
      restriction on which files can be executed; in particular, the filename
      is not required have a <code class="literal">.php</code> extension.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Pass the PHP code to execute directly on the command line.
     </p>
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
$ php -r &#039;print_r(get_defined_constants());&#039;
</pre></div>
      </div>
     </div>
     <p class="para">
      Special care has to be taken with regard to shell variable substitution and
      usage of quotes.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Read the example carefully: there are no beginning or ending tags! The
       <strong class="option unknown">-r</strong> switch simply does not need them, and using them will
       lead to a parse error.
      </p>
     </p></blockquote>
    </li>
    <li class="listitem">
     <p class="para">
      Provide the PHP code to execute via standard input
      (<code class="literal">stdin</code>).
     </p>
     <p class="para">
      This gives the powerful ability to create PHP code dynamically and feed it
      to the binary, as shown in this (fictional) example:
     </p>
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
$ some_application | some_filter | php | sort -u &gt; final_output.txt
</pre></div>
      </div>
     </div>
    </li>
   </ol>
   You cannot combine any of the three ways to execute code.
  </p>
  
  <p class="para">
   As with every shell application, the PHP binary accepts a number of
   arguments; however, the PHP script can also receive further arguments. The
   number of arguments that can be passed to your script is not limited by PHP
   (and although the shell has a limit to the number of characters which can be
   passed, this is not in general likely to be hit). The arguments passed to
   the script are available in the global array <var class="varname"><a href="reserved.variables.argv.php" class="classname">$argv</a></var>. The
   first index (zero) always contains the name of the script as called from the
   command line. Note that, if the code is executed in-line using the command
   line switch <strong class="option unknown">-r</strong>, the value of <var class="varname"><a href="reserved.variables.argv.php" class="classname">$argv[0]</a></var>
   will be <code class="literal">&quot;Standard input code&quot;</code>; prior to PHP 7.2.0, it was a dash (<code class="literal">&quot;-&quot;</code>) instead. The same is true if the code is
   executed via a pipe from <strong><code><a href="reserved.constants.php#constant.stdin">STDIN</a></code></strong>.
  </p>

  <p class="para">
   A second global variable, <var class="varname"><a href="reserved.variables.argc.php" class="classname">$argc</a></var>,
   contains the number of elements in the <var class="varname"><a href="reserved.variables.argv.php" class="classname">$argv</a></var> array
   (<strong>not</strong> the number of arguments passed to the
   script).
  </p>
  
  <p class="para">
   As long as the arguments to be passed to the script do not start with
   the <code class="literal">-</code> character, there&#039;s nothing special to watch out for.
   Passing an argument to the script which starts with a <code class="literal">-</code>
   will cause trouble because the PHP interpreter thinks it has to handle it
   itself, even before executing the script. To prevent this, use the argument
   list separator <code class="literal">--</code>. After this separator has been parsed by
   PHP, every following argument is passed untouched to the script.
  </p>
  
  <div class="informalexample">
   <div class="example-contents screen">
<div class="cdata"><pre>
# This will not execute the given code but will show the PHP usage
$ php -r &#039;var_dump($argv);&#039; -h
Usage: php [options] [-f] &lt;file&gt; [args...]
[...]

# This will pass the &#039;-h&#039; argument to the script and prevent PHP from showing its usage
$ php -r &#039;var_dump($argv);&#039; -- -h
array(2) {
  [0]=&gt;
  string(1) &quot;-&quot;
  [1]=&gt;
  string(2) &quot;-h&quot;
}
</pre></div>
   </div>
  </div>
  
  <p class="para">
   However, on Unix systems there&#039;s another way of using PHP for shell
   scripting: make the first line of the script start with
   <code class="literal">#!/usr/bin/php</code> (or whatever the path to your PHP <abbr title="Command Line Interpreter/Interface">CLI</abbr>
   binary is if different). The rest of the file should contain normal PHP code
   within the usual PHP starting and end tags. Once the execution attributes of
   the file are set appropriately (e.g. <strong class="command">chmod +x test</strong>),
   the script can be executed like any other shell or perl script:
  </p>
  
  <div class="example" id="example-553">
   <p><strong>Example #1 Execute PHP script as shell script</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">#!/usr/bin/php<br /><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$argv</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>
     Assuming this file is named <var class="filename">test</var> in the current
     directory, it is now possible to do the following:
   </p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
$ chmod +x test
$ ./test -h -- foo
array(4) {
  [0]=&gt;
  string(6) &quot;./test&quot;
  [1]=&gt;
  string(2) &quot;-h&quot;
  [2]=&gt;
  string(2) &quot;--&quot;
  [3]=&gt;
  string(3) &quot;foo&quot;
}
</pre></div>
   </div>
  </div>
  
  <p class="para">
   As can be seen, in this case no special care needs to be taken when passing parameters
   starting with <code class="literal">-</code>.
  </p>
  
  <p class="para">
   The PHP executable can be used to run PHP scripts absolutely independent of
   the web server. On Unix systems, the special <code class="literal">#!</code> (or
   &quot;shebang&quot;) first line should be added to PHP scripts so that the system can
   automatically tell which program should run the script. On Windows platforms,
   it&#039;s possible to associate <var class="filename">php.exe</var> with the double
   click option of the <code class="literal">.php</code> extension, or a batch file can
   be created to run scripts through PHP. The special shebang first line for
   Unix does no harm on Windows (as it&#039;s formatted as a PHP comment), so cross
   platform programs can be written by including it. A simple example of
   writing a command line PHP program is shown below.
  </p>
  
  <p class="para">
   <div class="example" id="example-554">
    <p><strong>Example #2 Script intended to be run from command line (script.php)</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">#!/usr/bin/php<br /><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$argc </span><span style="color: #007700">!= </span><span style="color: #0000BB">2 </span><span style="color: #007700">|| </span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">], array(</span><span style="color: #DD0000">'--help'</span><span style="color: #007700">, </span><span style="color: #DD0000">'-help'</span><span style="color: #007700">, </span><span style="color: #DD0000">'-h'</span><span style="color: #007700">, </span><span style="color: #DD0000">'-?'</span><span style="color: #007700">))) {<br /></span><span style="color: #0000BB">?&gt;<br /></span><br />This is a command line PHP script with one option.<br /><br />  Usage:<br />  <span style="color: #0000BB">&lt;?php </span><span style="color: #007700">echo </span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]; </span><span style="color: #0000BB">?&gt;</span> &lt;option&gt;<br /><br />  &lt;option&gt; can be some word you would like<br />  to print out. With the --help, -help, -h,<br />  or -? options, you can get this help.<br /><br /><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">} else {<br />    echo </span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  
  <p class="para">
   The script above includes the Unix shebang first line to indicate that this
   file should be run by PHP. We are working with a <abbr title="Command Line Interpreter/Interface">CLI</abbr> version here, so
   no <abbr title="Hypertext Transfer Protocol">HTTP</abbr> headers will be output.
  </p>
  
  <p class="para">
   The program first checks that there is the required one argument (in
   addition to the script name, which is also counted). If not, or if the
   argument was <strong class="option unknown">--help</strong>, <strong class="option unknown">-help</strong>,
   <strong class="option unknown">-h</strong> or <strong class="option unknown">-?</strong>, the help message is printed out,
   using <var class="varname"><a href="reserved.variables.argv.php" class="classname">$argv[0]</a></var> to dynamically print the script name as
   typed on the command line. Otherwise, the argument is echoed out exactly as
   received.
  </p>
  
  <p class="para">
   To run the above script on Unix, it must be made
   executable, and called simply as <strong class="command">script.php echothis</strong> or
   <strong class="command">script.php -h</strong>. On Windows, a batch file similar to the
   following can be created for this task:
  </p>
  
  <p class="para">
   <div class="example" id="example-555">
    <p><strong>Example #3 Batch file to run a command line PHP script (script.bat)</strong></p>
    <div class="example-contents">
<div class="winbatcode"><pre class="winbatcode">@echo OFF
&quot;C:\php\php.exe&quot; script.php %*</pre>
</div>
    </div>

   </div>
  </p>
  
  <p class="para">
   Assuming the above program is named <var class="filename">script.php</var>, and the
   <abbr title="Command Line Interpreter/Interface">CLI</abbr> <var class="filename">php.exe</var> is in <var class="filename">C:\php\php.exe</var>,
   this batch file will run it, passing on all appended options:
   <strong class="command">script.bat echothis</strong> or <strong class="command">script.bat -h</strong>.
  </p>
  
  <p class="para">
   See also the <a href="ref.readline.php" class="link">Readline</a> extension
   documentation for more functions which can be used to enhance command line
   applications in PHP.
  </p>
  
  <p class="para">
   On Windows, PHP can be configured to run without the need to
   supply the <var class="filename">C:\php\php.exe</var> or the <code class="literal">.php</code>
   extension, as described in <a href="install.windows.commandline.php" class="link">Command
   Line PHP on Microsoft Windows</a>.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    On Windows it is recommended to run PHP under an actual user account.
    When running under a network service certain operations will fail, because
    &quot;No mapping between account names and security IDs was done&quot;.
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.commandline.usage%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.commandline.usage&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.usage.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111816">  <div class="votes">
    <div id="Vu111816">
    <a href="/manual/vote-note.php?id=111816&amp;page=features.commandline.usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111816">
    <a href="/manual/vote-note.php?id=111816&amp;page=features.commandline.usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111816" title="67% like this...">
    53
    </div>
  </div>
  <a href="#111816" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#111816"> &para;</a><div class="date" title="2013-04-01 04:43"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111816">
<div class="phpcode"><code><span class="html">On Linux, the shebang (#!) line is parsed by the kernel into at most two parts. <br />For example:<br /><br />1:  #!/usr/bin/php<br />2:  #!/usr/bin/env  php<br />3:  #!/usr/bin/php -n<br />4:  #!/usr/bin/php -ddisplay_errors=E_ALL<br />5:  #!/usr/bin/php -n -ddisplay_errors=E_ALL<br /><br />1. is the standard way to start a script. (compare "#!/bin/bash".)<br /><br />2. uses "env" to find where PHP is installed: it might be elsewhere in the $PATH, such as /usr/local/bin.<br /><br />3. if you don't need to use env, you can pass ONE parameter here. For example, to ignore the system's PHP.ini, and go with the defaults, use "-n". (See "man php".)<br /><br />4.  or, you can set exactly one configuration variable. I recommend this one, because display_errors actually takes effect if it is set here. Otherwise, the only place you can enable it is system-wide in php.ini. If you try to use ini_set() in your script itself, it's too late: if your script has a parse error, it will silently die. <br /><br />5. This will not (as of 2013) work on Linux. It acts as if the whole string, "-n -ddisplay_errors=E_ALL" were a single argument. But in BSD, the shebang line can take more than 2 arguments, and so it may work as intended.<br /><br />Summary: use (2) for maximum portability, and (4) for maximum debugging.</span></code></div>
  </div>
 </div>
  <div class="note" id="125998">  <div class="votes">
    <div id="Vu125998">
    <a href="/manual/vote-note.php?id=125998&amp;page=features.commandline.usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125998">
    <a href="/manual/vote-note.php?id=125998&amp;page=features.commandline.usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125998" title="62% like this...">
    9
    </div>
  </div>
  <a href="#125998" class="name">
  <strong class="user"><em>email at alexander-bombis dot de</em></strong></a><a class="genanchor" href="#125998"> &para;</a><div class="date" title="2021-04-09 06:47"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125998">
<div class="phpcode"><code><span class="html">For Windows:<br /><br />After the years I also have the fact that I have to use double quotation marks after php -r on Windows shell.<br /><br />But in the Powershell you can use single or double quotation!</span></code></div>
  </div>
 </div>
  <div class="note" id="120251">  <div class="votes">
    <div id="Vu120251">
    <a href="/manual/vote-note.php?id=120251&amp;page=features.commandline.usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120251">
    <a href="/manual/vote-note.php?id=120251&amp;page=features.commandline.usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120251" title="56% like this...">
    6
    </div>
  </div>
  <a href="#120251" class="name">
  <strong class="user"><em>gabriel at figdice dot org</em></strong></a><a class="genanchor" href="#120251"> &para;</a><div class="date" title="2016-12-01 11:02"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120251">
<div class="phpcode"><code><span class="html">Regarding shebang:<br /><br />In both Linux and Windows, when you execute a script in CLI with:<br /><br />    php script.php<br /><br />then PHP will ignore the very first line of your script if it starts with:<br /><br />    #!<br /><br />So, this line is not only absorbed by the kernel when the script file is executable, but it is also ignored by the PHP engine itself.<br /><br />However, the engine will NOT ignore the first #! line of any included files withing your "outer" script.php.<br />Any "shebang" line in an included script, will result in simply outputting the line to STDOUT, just as any other text residing outside a <span class="default">&lt;?php </span><span class="keyword">...  </span><span class="default">?&gt;</span> block.</span></code></div>
  </div>
 </div>
  <div class="note" id="119609">  <div class="votes">
    <div id="Vu119609">
    <a href="/manual/vote-note.php?id=119609&amp;page=features.commandline.usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119609">
    <a href="/manual/vote-note.php?id=119609&amp;page=features.commandline.usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119609" title="52% like this...">
    3
    </div>
  </div>
  <a href="#119609" class="name">
  <strong class="user"><em>david at frankieandshadow dot com</em></strong></a><a class="genanchor" href="#119609"> &para;</a><div class="date" title="2016-07-15 10:27"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119609">
<div class="phpcode"><code><span class="html">A gotcha when using #!/usr/bin/php at the start of the file as noted above:<br /><br />if you originally edited the file on Windows and then attempt to use it on Unix, it won't work because the #! line requires a Unix line ending. Bash gives you the following error message if it has DOS line endings:<br />"bash: /usr/local/bin/wpreplace.php: /usr/bin/php^M: bad interpreter: No such file or directory"<br /><br />(In Emacs I used "CTRL-X ENTER f" then type "unix" and ENTER to convert)</span></code></div>
  </div>
 </div>
  <div class="note" id="105286">  <div class="votes">
    <div id="Vu105286">
    <a href="/manual/vote-note.php?id=105286&amp;page=features.commandline.usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105286">
    <a href="/manual/vote-note.php?id=105286&amp;page=features.commandline.usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105286" title="47% like this...">
    -4
    </div>
  </div>
  <a href="#105286" class="name">
  <strong class="user"><em>spencer at aninternetpresence dot net</em></strong></a><a class="genanchor" href="#105286"> &para;</a><div class="date" title="2011-08-07 05:03"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105286">
<div class="phpcode"><code><span class="html">If you are running the CLI on Windows and use the "-r" option, be sure to enclose your PHP code in double (not single) quotes. Otherwise, your code will not run.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.commandline.usage&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.usage.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.commandline.php">Command line usage</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.commandline.differences.php" title="Differences to other SAPIs">Differences to other SAPIs</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.options.php" title="Options">Options</a>
                        </li>
                                                <li class="current">
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
