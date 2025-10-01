<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Compiling shared PECL extensions with the pecl command - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.pecl.pear.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.pecl.pear.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.pecl.pear.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.pecl.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.pecl.windows.php">
 <link rel="next" href="https://www.php.net/manual/en/install.pecl.phpize.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.pecl.pear.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.pecl.pear.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.pecl.pear.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.pecl.pear.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.pecl.pear.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.pecl.pear.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.pecl.pear.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.pecl.pear.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.pecl.pear.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.pecl.pear.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.pecl.pear.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Compiling shared PECL extensions with the pecl command" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Compiling shared PECL extensions with the pecl command - Manual" />
<meta name="twitter:description" content="Compiling shared PECL extensions with the pecl command" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Compiling shared PECL extensions with the pecl command - Manual" />
<meta itemprop="description" content="Compiling shared PECL extensions with the pecl command" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Compiling shared PECL extensions with the pecl command" />

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
        <a href="install.pecl.phpize.php">
          Compiling shared PECL extensions with phpize &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.pecl.windows.php">
          &laquo; Installing a PHP extension on Windows        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      <li><a href='install.pecl.php'>Installation of PECL extensions</a></li>      </ul>
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
            <option value='en/install.pecl.pear.php' selected="selected">English</option>
            <option value='de/install.pecl.pear.php'>German</option>
            <option value='es/install.pecl.pear.php'>Spanish</option>
            <option value='fr/install.pecl.pear.php'>French</option>
            <option value='it/install.pecl.pear.php'>Italian</option>
            <option value='ja/install.pecl.pear.php'>Japanese</option>
            <option value='pt_BR/install.pecl.pear.php'>Brazilian Portuguese</option>
            <option value='ru/install.pecl.pear.php'>Russian</option>
            <option value='tr/install.pecl.pear.php'>Turkish</option>
            <option value='uk/install.pecl.pear.php'>Ukrainian</option>
            <option value='zh/install.pecl.pear.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.pecl.pear" class="sect1">
  <h2 class="title">Compiling shared PECL extensions with the pecl command</h2>
  <p class="simpara">
   PECL makes it easy to create shared PHP extensions.
   Using the
   <a href="https://pear.php.net/manual/en/guide.users.commandline.cli.php" class="link external">&raquo;&nbsp;pecl command</a>,
   do the following:
  </p>
  <div class="example-contents screen">
<div class="cdata"><pre>
$ pecl install extname
</pre></div>
  </div>
  <p class="simpara">
   This will download the source for <em>extname</em>,
   compile, and install <var class="filename">extname.so</var> into the
   <a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a>.
   <var class="filename">extname.so</var>
   may then be loaded via <var class="filename">php.ini</var>.
  </p>
  <p class="simpara">
   By default, the <strong class="command">pecl</strong> command will not install packages
   that are marked with the <code class="literal">alpha</code> or
   <code class="literal">beta</code>
   state.
   If no <code class="literal">stable</code> packages are available,
   a <code class="literal">beta</code> package may be installed using the following
   command:
  </p>
  <div class="example-contents screen">
<div class="cdata"><pre>
$ pecl install extname-beta
</pre></div>
  </div>
  <p class="para">
   A specific version may also be installed using this variant:
  </p>
  <div class="example-contents screen">
<div class="cdata"><pre>
$ pecl install extname-0.1
</pre></div>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    After enabling the extension in <var class="filename">php.ini</var>, restarting the web service is
    required for the changes to be picked up.
   </p>
  </p></blockquote>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/pecl.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.pecl.pear%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.pecl.pear&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.pecl.pear.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124926">  <div class="votes">
    <div id="Vu124926">
    <a href="/manual/vote-note.php?id=124926&amp;page=install.pecl.pear&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124926">
    <a href="/manual/vote-note.php?id=124926&amp;page=install.pecl.pear&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124926" title="75% like this...">
    20
    </div>
  </div>
  <a href="#124926" class="name">
  <strong class="user"><em>giulliano dot scatalon dot rossi at gmail dot com</em></strong></a><a class="genanchor" href="#124926"> &para;</a><div class="date" title="2020-04-18 05:41"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124926">
<div class="phpcode"><code><span class="html">To install the PECL on debian based linux distros (ubuntu, mint, kali, etc.)<br />Use the apitude command:<br /><br />sudo apt-get install php-pear<br /><br />I hope helped someone</span></code></div>
  </div>
 </div>
  <div class="note" id="128831">  <div class="votes">
    <div id="Vu128831">
    <a href="/manual/vote-note.php?id=128831&amp;page=install.pecl.pear&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128831">
    <a href="/manual/vote-note.php?id=128831&amp;page=install.pecl.pear&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128831" title="92% like this...">
    11
    </div>
  </div>
  <a href="#128831" class="name">
  <strong class="user"><em>ezekial aikle</em></strong></a><a class="genanchor" href="#128831"> &para;</a><div class="date" title="2023-08-27 06:22"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128831">
<div class="phpcode"><code><span class="html">Options to pass to configure (with -D or --configureoptions=) need to be specified this way in a Dockerfile RUN command:<br /><br />RUN pecl install -D 'with-example-dir="/dir" enable-example-thing="yes"' package<br />or<br />RUN pecl install --configureoptions='with-example-dir="/dir" enable-example-thing="yes"' package<br /><br />Otherwise, docker build might quote the command in a way that pecl doesn't parse correctly, and the build will fail with an error like this one:<br /><br />PHP Fatal error:  Uncaught TypeError: array_key_exists(): Argument #2 ($array) must be of type array, null given in /usr/local/lib/php/PEAR/Builder.php:397</span></code></div>
  </div>
 </div>
  <div class="note" id="120466">  <div class="votes">
    <div id="Vu120466">
    <a href="/manual/vote-note.php?id=120466&amp;page=install.pecl.pear&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120466">
    <a href="/manual/vote-note.php?id=120466&amp;page=install.pecl.pear&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120466" title="84% like this...">
    9
    </div>
  </div>
  <a href="#120466" class="name">
  <strong class="user"><em>Bichis Paul</em></strong></a><a class="genanchor" href="#120466"> &para;</a><div class="date" title="2017-01-13 03:37"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120466">
<div class="phpcode"><code><span class="html">on Mageia Linux use urpmi<br /><br />[afk@mageia5][~]$ sudo urpmi php-pear</span></code></div>
  </div>
 </div>
  <div class="note" id="103315">  <div class="votes">
    <div id="Vu103315">
    <a href="/manual/vote-note.php?id=103315&amp;page=install.pecl.pear&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103315">
    <a href="/manual/vote-note.php?id=103315&amp;page=install.pecl.pear&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103315" title="64% like this...">
    10
    </div>
  </div>
  <a href="#103315" class="name">
  <strong class="user"><em>ktcox at mail dot com</em></strong></a><a class="genanchor" href="#103315"> &para;</a><div class="date" title="2011-04-06 05:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103315">
<div class="phpcode"><code><span class="html">The Arch Linux package that contains PECL is 'php-pear'<br /><br /># pacman -S php-pear</span></code></div>
  </div>
 </div>
  <div class="note" id="113707">  <div class="votes">
    <div id="Vu113707">
    <a href="/manual/vote-note.php?id=113707&amp;page=install.pecl.pear&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113707">
    <a href="/manual/vote-note.php?id=113707&amp;page=install.pecl.pear&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113707" title="66% like this...">
    8
    </div>
  </div>
  <a href="#113707" class="name">
  <strong class="user"><em>ericn at amazon dot com</em></strong></a><a class="genanchor" href="#113707"> &para;</a><div class="date" title="2013-11-18 11:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113707">
<div class="phpcode"><code><span class="html">To compile pecl extensions on Amazon Linux AMIs, follow the tutorial at <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/install-LAMP.html" rel="nofollow" target="_blank">http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/install-LAMP.html</a> and then install these additional required packages with the following command:<br /><br />[ec2-user ~]$ sudo yum install php-devel zlib-devel curl-devel gcc<br /><br />You should then be able to compile pecl extensions; for example, enter the following command to compile the pecl_http extension:<br /><br />[ec2-user ~]$ sudo pecl install pecl_http</span></code></div>
  </div>
 </div>
  <div class="note" id="83601">  <div class="votes">
    <div id="Vu83601">
    <a href="/manual/vote-note.php?id=83601&amp;page=install.pecl.pear&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83601">
    <a href="/manual/vote-note.php?id=83601&amp;page=install.pecl.pear&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83601" title="63% like this...">
    8
    </div>
  </div>
  <a href="#83601" class="name">
  <strong class="user"><em>zir dot echo at gmail dot com</em></strong></a><a class="genanchor" href="#83601"> &para;</a><div class="date" title="2008-06-03 11:43"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83601">
<div class="phpcode"><code><span class="html">Install pecl for gentoo:<br /><br />emerge dev-php/PEAR-PEAR</span></code></div>
  </div>
 </div>
  <div class="note" id="82173">  <div class="votes">
    <div id="Vu82173">
    <a href="/manual/vote-note.php?id=82173&amp;page=install.pecl.pear&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82173">
    <a href="/manual/vote-note.php?id=82173&amp;page=install.pecl.pear&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82173" title="53% like this...">
    3
    </div>
  </div>
  <a href="#82173" class="name">
  <strong class="user"><em>pedro dot fonini at gmail dot com</em></strong></a><a class="genanchor" href="#82173"> &para;</a><div class="date" title="2008-03-30 05:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82173">
<div class="phpcode"><code><span class="html">to use the pecl, pear, or phpize commands in fedora, install the php-devel package:<br />$ yum install php-devel</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.pecl.pear&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.pecl.pear.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.pecl.php">Installation of PECL extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="install.pecl.intro.php" title="Introduction to PECL Installations">Introduction to PECL Installations</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.downloads.php" title="Downloading PECL extensions">Downloading PECL extensions</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.windows.php" title="Installing a PHP extension on Windows">Installing a PHP extension on Windows</a>
                        </li>
                                                <li class="current">
                            <a href="install.pecl.pear.php" title="Compiling shared PECL extensions with the pecl command">Compiling shared PECL extensions with the pecl command</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.phpize.php" title="Compiling shared PECL extensions with phpize">Compiling shared PECL extensions with phpize</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.php-config.php" title="php-&#8203;config">php-&#8203;config</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.static.php" title="Compiling PECL extensions statically into PHP">Compiling PECL extensions statically into PHP</a>
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
