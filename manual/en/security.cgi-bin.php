<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installed as CGI binary - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/security.cgi-bin.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/security.cgi-bin.php">
 <link rel="alternate" href="https://www.php.net/manual/en/security.cgi-bin.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/security.php">
 <link rel="prev" href="https://www.php.net/manual/en/security.general.php">
 <link rel="next" href="https://www.php.net/manual/en/security.cgi-bin.attacks.php">

 <link rel="alternate" href="https://www.php.net/manual/en/security.cgi-bin.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/security.cgi-bin.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/security.cgi-bin.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/security.cgi-bin.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/security.cgi-bin.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/security.cgi-bin.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/security.cgi-bin.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/security.cgi-bin.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/security.cgi-bin.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/security.cgi-bin.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/security.cgi-bin.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installed as CGI binary" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installed as CGI binary - Manual" />
<meta name="twitter:description" content="Installed as CGI binary" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installed as CGI binary - Manual" />
<meta itemprop="description" content="Installed as CGI binary" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installed as CGI binary" />

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
        <a href="security.cgi-bin.attacks.php">
          Possible attacks &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="security.general.php">
          &laquo; General considerations        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='security.php'>Security</a></li>      </ul>
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
            <option value='en/security.cgi-bin.php' selected="selected">English</option>
            <option value='de/security.cgi-bin.php'>German</option>
            <option value='es/security.cgi-bin.php'>Spanish</option>
            <option value='fr/security.cgi-bin.php'>French</option>
            <option value='it/security.cgi-bin.php'>Italian</option>
            <option value='ja/security.cgi-bin.php'>Japanese</option>
            <option value='pt_BR/security.cgi-bin.php'>Brazilian Portuguese</option>
            <option value='ru/security.cgi-bin.php'>Russian</option>
            <option value='tr/security.cgi-bin.php'>Turkish</option>
            <option value='uk/security.cgi-bin.php'>Ukrainian</option>
            <option value='zh/security.cgi-bin.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="security.cgi-bin" class="chapter">
   <h1 class="title">Installed as CGI binary</h1>
<h2>Table of Contents</h2><ul class="chunklist chunklist_chapter"><li><a href="security.cgi-bin.attacks.php">Possible attacks</a></li><li><a href="security.cgi-bin.default.php">Case 1: only public files served</a></li><li><a href="security.cgi-bin.force-redirect.php">Case 2: using cgi.force_redirect</a></li><li><a href="security.cgi-bin.doc-root.php">Case 3: setting doc_root or user_dir</a></li><li><a href="security.cgi-bin.shell.php">Case 4: PHP parser outside of web tree</a></li></ul>


   

   

   

   

   

  </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/security/cgi-bin.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsecurity.cgi-bin%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=security.cgi-bin&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.cgi-bin.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108524">  <div class="votes">
    <div id="Vu108524">
    <a href="/manual/vote-note.php?id=108524&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108524">
    <a href="/manual/vote-note.php?id=108524&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108524" title="55% like this...">
    23
    </div>
  </div>
  <a href="#108524" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#108524"> &para;</a><div class="date" title="2012-05-03 09:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108524">
<div class="phpcode"><code><span class="html">IMPORTANT INFORMATION<br /><br />There was a serious vulnerability in certain CGI-based PHP setups that has gone unnoticed for at least 8 years.<br /><br />For PHP this means that a request containing ?-s may dump the PHP source code for the page.<br /><br />Make sure to update to current versions and/or use an .htaccess patch, both available here:<br /><br />PHP 5.3.12 and PHP 5.4.2 Released:<br /><a href="http://www.php.net/archive/2012.php#id2012-05-03-1" rel="nofollow" target="_blank">http://www.php.net/archive/2012.php#id2012-05-03-1</a></span></code></div>
  </div>
 </div>
  <div class="note" id="5542">  <div class="votes">
    <div id="Vu5542">
    <a href="/manual/vote-note.php?id=5542&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5542">
    <a href="/manual/vote-note.php?id=5542&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5542" title="59% like this...">
    20
    </div>
  </div>
  <a href="#5542" class="name">
  <strong class="user"><em>kstone at trivergent dot net</em></strong></a><a class="genanchor" href="#5542"> &para;</a><div class="date" title="2000-05-04 02:01"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5542">
<div class="phpcode"><code><span class="html">Better yet, use binfmt_misc:  (linux only)
<br />
<br />echo :php3:E::php3::/usr/bin/php: &gt; /proc/sys/fs/binfmt_misc/register
<br />
<br />Eliminates the need for the #! at the top of the file.</span></code></div>
  </div>
 </div>
  <div class="note" id="25347">  <div class="votes">
    <div id="Vu25347">
    <a href="/manual/vote-note.php?id=25347&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25347">
    <a href="/manual/vote-note.php?id=25347&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25347" title="57% like this...">
    16
    </div>
  </div>
  <a href="#25347" class="name">
  <strong class="user"><em>ruben at puettmann dot net</em></strong></a><a class="genanchor" href="#25347"> &para;</a><div class="date" title="2002-09-20 06:29"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25347">
<div class="phpcode"><code><span class="html">To use php-cgi with suexec it will be nice that each virtual host has ist's own php.ini. This goes with : <br /><br />SetEnv PHPRC /var/www/server/www.test.com/conf<br /><br />But suexec will kill this enviromet cause It don't know that it is "save" so you must edit the suexec.c for compiling ....</span></code></div>
  </div>
 </div>
  <div class="note" id="60508">  <div class="votes">
    <div id="Vu60508">
    <a href="/manual/vote-note.php?id=60508&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60508">
    <a href="/manual/vote-note.php?id=60508&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60508" title="54% like this...">
    8
    </div>
  </div>
  <a href="#60508" class="name">
  <strong class="user"><em>phpD0TnetATmoritzHYPHONnaumannD0Tcom</em></strong></a><a class="genanchor" href="#60508"> &para;</a><div class="date" title="2006-01-09 09:56"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60508">
<div class="phpcode"><code><span class="html">One of the most common reasons why you get 'No input file specified' (AKA 'the second most useful error message in the world') is that you have set 'doc_root' (in php.ini) to a value which is to the 'DocumentRoot' defined in the apache configuration. <br /><br />This is the same for other webservers. For example, on lighttpd, make sure the 'server.document-root' value is the same as what is defined as 'doc_root' in php.ini.</span></code></div>
  </div>
 </div>
  <div class="note" id="51182">  <div class="votes">
    <div id="Vu51182">
    <a href="/manual/vote-note.php?id=51182&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51182">
    <a href="/manual/vote-note.php?id=51182&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51182" title="54% like this...">
    7
    </div>
  </div>
  <a href="#51182" class="name">
  <strong class="user"><em>phil dot ross at gmail dot com</em></strong></a><a class="genanchor" href="#51182"> &para;</a><div class="date" title="2005-03-22 03:56"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51182">
<div class="phpcode"><code><span class="html">In response to grange at club-internet dot fr:<br /><br />There are a couple of errors in the mod_rewrite directives given. I found that the following works:<br /><br />RewriteEngine on<br />RewriteCond %{ENV:REDIRECT_STATUS} !200<br />RewriteRule ^cgi-bin/php.cgi - [F]<br /><br />I removed the = from the RewriteCond and took out the leading / from the RewriteRule.</span></code></div>
  </div>
 </div>
  <div class="note" id="25577">  <div class="votes">
    <div id="Vu25577">
    <a href="/manual/vote-note.php?id=25577&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25577">
    <a href="/manual/vote-note.php?id=25577&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25577" title="53% like this...">
    6
    </div>
  </div>
  <a href="#25577" class="name">
  <strong class="user"><em>matled at gmx dot net</em></strong></a><a class="genanchor" href="#25577"> &para;</a><div class="date" title="2002-09-28 03:53"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25577">
<div class="phpcode"><code><span class="html">If you are using php per cgi and have additionally mod_gzip enabled you have to disable mod_gzip for the php cgi binary to use --enable-cgi-redirect. mod_gzip sets the REDIRECT_STATUS always to 200 which makes it impossible for the php binary to know when it was called directly or when it was called by a redirect.</span></code></div>
  </div>
 </div>
  <div class="note" id="12432">  <div class="votes">
    <div id="Vu12432">
    <a href="/manual/vote-note.php?id=12432&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12432">
    <a href="/manual/vote-note.php?id=12432&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12432" title="53% like this...">
    6
    </div>
  </div>
  <a href="#12432" class="name">
  <strong class="user"><em>yohgaki at hotmail dot com</em></strong></a><a class="genanchor" href="#12432"> &para;</a><div class="date" title="2001-04-12 11:44"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12432">
<div class="phpcode"><code><span class="html">If you care about security, you are better of setting 
<br />
<br />register_globals = off
<br />enable_track_vars = on (Always on from PHP4.0.3)
<br />
<br />Default setting for variable order is 
<br />EGPCS 
<br />(ENV VARS/GET VARS/POST VARS/COOKIE VARS/SESSION VARS)
<br />
<br />Imagine if you are rely on ENV VAR but it was orver written with GET/POST/COOKIE vars?</span></code></div>
  </div>
 </div>
  <div class="note" id="30546">  <div class="votes">
    <div id="Vu30546">
    <a href="/manual/vote-note.php?id=30546&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30546">
    <a href="/manual/vote-note.php?id=30546&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30546" title="52% like this...">
    5
    </div>
  </div>
  <a href="#30546" class="name">
  <strong class="user"><em>pookey at pookey dot co dot uk</em></strong></a><a class="genanchor" href="#30546"> &para;</a><div class="date" title="2003-03-21 10:29"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30546">
<div class="phpcode"><code><span class="html">I have setup a guide to installing PHP with SuEXEC in such a way that shebangs (!#/usr/bin/php4) are not needed.  Hope this is of some help to you.
<br />
<br /><a href="http://www.pookey.co.uk/php-security.xml" rel="nofollow" target="_blank">http://www.pookey.co.uk/php-security.xml</a></span></code></div>
  </div>
 </div>
  <div class="note" id="12380">  <div class="votes">
    <div id="Vu12380">
    <a href="/manual/vote-note.php?id=12380&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12380">
    <a href="/manual/vote-note.php?id=12380&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12380" title="52% like this...">
    5
    </div>
  </div>
  <a href="#12380" class="name">
  <strong class="user"><em>michel dot jansens at ulb dot ac dot be</em></strong></a><a class="genanchor" href="#12380"> &para;</a><div class="date" title="2001-04-09 10:21"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12380">
<div class="phpcode"><code><span class="html">If you want to use suexec and reference your php interpreter via #!/usr/local/bin/php,  be shure to compile php WITHOUT  --enable-force-cgi-redirect.
<br />
<br />This might seems obvious, but I spent 2 days on this :-(</span></code></div>
  </div>
 </div>
  <div class="note" id="77041">  <div class="votes">
    <div id="Vu77041">
    <a href="/manual/vote-note.php?id=77041&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77041">
    <a href="/manual/vote-note.php?id=77041&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77041" title="51% like this...">
    3
    </div>
  </div>
  <a href="#77041" class="name">
  <strong class="user"><em>Craig Buchek</em></strong></a><a class="genanchor" href="#77041"> &para;</a><div class="date" title="2007-08-12 09:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77041">
<div class="phpcode"><code><span class="html">NOTE: Running PHP as a CGI program will change the value of $_SERVER['SCRIPT_NAME']. When running via the (normal) mod_PHP mechanism, it will be set to the name of (actually, path to) the PHP script that's running. When running via CGI, it will instead point to the path of the CGI binary.</span></code></div>
  </div>
 </div>
  <div class="note" id="35492">  <div class="votes">
    <div id="Vu35492">
    <a href="/manual/vote-note.php?id=35492&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35492">
    <a href="/manual/vote-note.php?id=35492&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35492" title="51% like this...">
    3
    </div>
  </div>
  <a href="#35492" class="name">
  <strong class="user"><em>geeky at geeky dot de</em></strong></a><a class="genanchor" href="#35492"> &para;</a><div class="date" title="2003-09-02 07:32"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35492">
<div class="phpcode"><code><span class="html">a replacement for suexec is suphp (<a href="http://www.suphp.org" rel="nofollow" target="_blank">http://www.suphp.org</a>).<br /><br />"suPHP is a tool for executing PHP scripts with the permissions of their owners. It consists of an Apache module (mod_suphp) and a setuid root binary (suphp) that is called by the Apache module to change the uid of the process executing the PHP interpreter." (from the website)</span></code></div>
  </div>
 </div>
  <div class="note" id="10714">  <div class="votes">
    <div id="Vu10714">
    <a href="/manual/vote-note.php?id=10714&amp;page=security.cgi-bin&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10714">
    <a href="/manual/vote-note.php?id=10714&amp;page=security.cgi-bin&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10714" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#10714" class="name">
  <strong class="user"><em>steeven at kali dot com dot cn</em></strong></a><a class="genanchor" href="#10714"> &para;</a><div class="date" title="2001-01-18 01:54"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10714">
<div class="phpcode"><code><span class="html">suEXEC require CGI mode, and slow down the scripts. I did them like this:
<br />1. Install php as DSO mode. (for max speed and low secure)
<br />2. Make a seperate CGI install with --enable-force-cgi-redirect, place php to cgi-bin
<br />3 For more secure with suEXEC, choose one of the following method:
<br />3-1: Place a .htaccess file containing this to override main config:
<br />AddType application/x-httpd-wphp php
<br />Action application/x-httpd-wphp /cgi-bin/php
<br />  All php files in subdirectory will be protected.
<br />3-2: add following in httpd.conf:
<br />AddType application/x-httpd-wphp sphp
<br />Action application/x-httpd-wphp /cgi-bin/php
<br />  then each sensitive php file should be renamed to .sphp
<br />
<br />Add "php_value doc_root /home/user/html_docs" to each virtual host directive in httpd.conf</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=security.cgi-bin&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.cgi-bin.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="security.php">Security</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="security.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="security.general.php" title="General considerations">General considerations</a>
                        </li>
                                                <li class="current">
                            <a href="security.cgi-bin.php" title="Installed as CGI binary">Installed as CGI binary</a>
                        </li>
                                                <li class="">
                            <a href="security.apache.php" title="Installed as an Apache module">Installed as an Apache module</a>
                        </li>
                                                <li class="">
                            <a href="security.sessions.php" title="Session Security">Session Security</a>
                        </li>
                                                <li class="">
                            <a href="security.filesystem.php" title="Filesystem Security">Filesystem Security</a>
                        </li>
                                                <li class="">
                            <a href="security.database.php" title="Database Security">Database Security</a>
                        </li>
                                                <li class="">
                            <a href="security.errors.php" title="Error Reporting">Error Reporting</a>
                        </li>
                                                <li class="">
                            <a href="security.variables.php" title="User Submitted Data">User Submitted Data</a>
                        </li>
                                                <li class="">
                            <a href="security.hiding.php" title="Hiding PHP">Hiding PHP</a>
                        </li>
                                                <li class="">
                            <a href="security.current.php" title="Keeping Current">Keeping Current</a>
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
