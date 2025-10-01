<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Security - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/security.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/security.php">
 <link rel="alternate" href="https://www.php.net/manual/en/security.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/index.php">
 <link rel="prev" href="https://www.php.net/manual/en/wrappers.expect.php">
 <link rel="next" href="https://www.php.net/manual/en/security.intro.php">

 <link rel="alternate" href="https://www.php.net/manual/en/security.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/security.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/security.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/security.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/security.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/security.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/security.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/security.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/security.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/security.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/security.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Security" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Security - Manual" />
<meta name="twitter:description" content="Security" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Security - Manual" />
<meta itemprop="description" content="Security" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Security" />

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
        <a href="security.intro.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="wrappers.expect.php">
          &laquo; expect://        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      </ul>
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
            <option value='en/security.php' selected="selected">English</option>
            <option value='de/security.php'>German</option>
            <option value='es/security.php'>Spanish</option>
            <option value='fr/security.php'>French</option>
            <option value='it/security.php'>Italian</option>
            <option value='ja/security.php'>Japanese</option>
            <option value='pt_BR/security.php'>Brazilian Portuguese</option>
            <option value='ru/security.php'>Russian</option>
            <option value='tr/security.php'>Turkish</option>
            <option value='uk/security.php'>Ukrainian</option>
            <option value='zh/security.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="security" class="book">
  <h1 class="title">Security</h1>
  


 



  


  



  


  



  


  



  

 



  


  



  

  



  


  



  






  


  




  


  




 <ul class="chunklist chunklist_book"><li><a href="security.intro.php">Introduction</a></li><li><a href="security.general.php">General considerations</a></li><li><a href="security.cgi-bin.php">Installed as CGI binary</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="security.cgi-bin.attacks.php">Possible attacks</a></li><li><a href="security.cgi-bin.default.php">Case 1: only public files served</a></li><li><a href="security.cgi-bin.force-redirect.php">Case 2: using cgi.force_redirect</a></li><li><a href="security.cgi-bin.doc-root.php">Case 3: setting doc_root or user_dir</a></li><li><a href="security.cgi-bin.shell.php">Case 4: PHP parser outside of web tree</a></li></ul></li><li><a href="security.apache.php">Installed as an Apache module</a></li><li><a href="security.sessions.php">Session Security</a></li><li><a href="security.filesystem.php">Filesystem Security</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="security.filesystem.nullbytes.php">Null bytes related issues</a></li></ul></li><li><a href="security.database.php">Database Security</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="security.database.design.php">Designing Databases</a></li><li><a href="security.database.connection.php">Connecting to Database</a></li><li><a href="security.database.storage.php">Encrypted Storage Model</a></li><li><a href="security.database.sql-injection.php">SQL Injection</a></li></ul></li><li><a href="security.errors.php">Error Reporting</a></li><li><a href="security.variables.php">User Submitted Data</a></li><li><a href="security.hiding.php">Hiding PHP</a></li><li><a href="security.current.php">Keeping Current</a></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-base/blob/master/manual.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsecurity%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=security&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="72806">  <div class="votes">
    <div id="Vu72806">
    <a href="/manual/vote-note.php?id=72806&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72806">
    <a href="/manual/vote-note.php?id=72806&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72806" title="56% like this...">
    23
    </div>
  </div>
  <a href="#72806" class="name">
  <strong class="user"><em>dangan at blackjaguargaming dot net</em></strong></a><a class="genanchor" href="#72806"> &para;</a><div class="date" title="2007-02-01 06:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72806">
<div class="phpcode"><code><span class="html">I'd recommend a 404 over a 403 considering a 403 proves there is something worth hacking into.<br /><br />index.php:<br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">'isdoc'</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />include(</span><span class="string">'includes/include.sqlfunctions.php'</span><span class="keyword">);<br /></span><span class="comment">// Rest of code for index.php<br /></span><span class="default">?&gt;<br /></span><br />include.sqlfunctions.php (or other include file):<br /><span class="default">&lt;?php<br /></span><span class="keyword">if(</span><span class="default">isdoc </span><span class="keyword">!== </span><span class="default">1</span><span class="keyword">) </span><span class="comment">// Not identical to 1<br /></span><span class="keyword">{<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'HTTP/1.1 404 Not Found'</span><span class="keyword">);<br />    echo </span><span class="string">"&lt;!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\"&gt;\n&lt;html&gt;&lt;head&gt;\n&lt;title&gt;404 Not Found&lt;/title&gt;\n&lt;/head&gt;"</span><span class="keyword">;<br />    echo </span><span class="string">"&lt;body&gt;\n&lt;h1&gt;Not Found&lt;/h1&gt;\n&lt;p&gt;The requested URL "</span><span class="keyword">.</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REQUEST_URI'</span><span class="keyword">].</span><span class="string">" was not found on this server.&lt;/p&gt;\n"</span><span class="keyword">;<br />    echo </span><span class="string">"&lt;hr&gt;\n"</span><span class="keyword">.</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_SIGNATURE'</span><span class="keyword">].</span><span class="string">"\n&lt;/body&gt;&lt;/html&gt;\n"</span><span class="keyword">;<br />    </span><span class="comment">// Echo output similar to Apache's default 404 (if thats what you're using)<br />    </span><span class="keyword">exit;<br />}<br /></span><span class="comment">// Rest of code for this include<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="64840">  <div class="votes">
    <div id="Vu64840">
    <a href="/manual/vote-note.php?id=64840&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64840">
    <a href="/manual/vote-note.php?id=64840&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64840" title="53% like this...">
    18
    </div>
  </div>
  <a href="#64840" class="name">
  <strong class="user"><em>djjokla AT gmail dot com</em></strong></a><a class="genanchor" href="#64840"> &para;</a><div class="date" title="2006-04-21 08:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64840">
<div class="phpcode"><code><span class="html">If a single file has to be included than I use the following<br /><br />index.php ( where the file is gonna be included )<br />___________<br /><span class="default">&lt;?php<br />    define</span><span class="keyword">(</span><span class="string">'thefooter'</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />    include(</span><span class="string">'folder/footer.inc.php'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />and the footer file (for example) looks this way then<br /><br />footer.inc.php ( the file to be inluded )<br />___________<br /><span class="default">&lt;?php<br />    defined</span><span class="keyword">(</span><span class="string">'thefooter'</span><span class="keyword">) or die(</span><span class="string">'Not with me my friend'</span><span class="keyword">);<br />    echo(</span><span class="string">'Copyright to me in the year 2000'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />So when someone tries to access the footer.php file directly he/she/it will get the "Not with me my friend" messages written on the screen. An alternative option is to redirect the person who wants to access the file directly to a different location, so instead of the above code you would have to write the following in the footer.inc.php file.<br /><br /><span class="default">&lt;?php<br />    defined</span><span class="keyword">(</span><span class="string">'thefooter'</span><span class="keyword">) or </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: <a href="http://www.location.com" rel="nofollow" target="_blank">http://www.location.com</a>'</span><span class="keyword">);<br />    echo(</span><span class="string">'Copyright to me in the year 2000'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />In normal case a redirection to an external site would be annoying to the visitor, but since this visitor is more interested in hacking the site than in reading the content, I think it's only fair to create such an redirection. We dont' realy want someome like this on our sites.<br /><br />For the file protection I use .htaccess in which I say to protect the file itself and every .inc file<br /><br />&lt;Files ~ "^.*\.([Hh][Tt]|[Ii][Nn][Cc])"&gt;<br />Order allow,deny<br />Deny from all<br />Satisfy All<br />&lt;/Files&gt;<br /><br />The .htaccess file should result an Error 403 if someone tries to access the files directly. If for some reason this shouldn't work, then the "Not with me my friend" text apears or a redirection (depending what is used)<br /><br />In my eyes this looks o.k. and safe.</span></code></div>
  </div>
 </div>
  <div class="note" id="70740">  <div class="votes">
    <div id="Vu70740">
    <a href="/manual/vote-note.php?id=70740&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70740">
    <a href="/manual/vote-note.php?id=70740&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70740" title="55% like this...">
    11
    </div>
  </div>
  <a href="#70740" class="name">
  <strong class="user"><em>k</em></strong></a><a class="genanchor" href="#70740"> &para;</a><div class="date" title="2006-10-25 04:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70740">
<div class="phpcode"><code><span class="html">How about not putting the php code in the web-root at all...?<br /><br />You can create a public directory with the css, html, etc and index.php there. Then use the include_path setting to point to the actual php code, eg...<br /><br />webstuff<br />  phpcode<br />  public<br />    images<br />    css<br />    index.php<br /><br />then set the include path to "../phpcode" and, as php is executed from the directory of the script, all should be well.<br /><br />I'd also call the main index "main.page", or something else, instead of "index.php" and change the web server default index page. That way you cant get hit by things trawlling the web for index pages.</span></code></div>
  </div>
 </div>
  <div class="note" id="57851">  <div class="votes">
    <div id="Vu57851">
    <a href="/manual/vote-note.php?id=57851&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57851">
    <a href="/manual/vote-note.php?id=57851&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57851" title="55% like this...">
    9
    </div>
  </div>
  <a href="#57851" class="name">
  <strong class="user"><em>Thomas &quot;Balu&quot; Walter</em></strong></a><a class="genanchor" href="#57851"> &para;</a><div class="date" title="2005-10-16 01:24"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57851">
<div class="phpcode"><code><span class="html">Since many users can not modify apache configurations or use htaccess files, the best way to avoid unwanted access to include files would be a line at the beginning of the include-file:<br /><br /><span class="default">&lt;?php </span><span class="keyword">if (!</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'APPLICATION'</span><span class="keyword">)) exit; </span><span class="default">?&gt;<br /></span><br />And in all files that are allowed to be called externally:<br /><br /><span class="default">&lt;?php define</span><span class="keyword">(</span><span class="string">'APPLICATION'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />     Balu</span></code></div>
  </div>
 </div>
  <div class="note" id="33627">  <div class="votes">
    <div id="Vu33627">
    <a href="/manual/vote-note.php?id=33627&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33627">
    <a href="/manual/vote-note.php?id=33627&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33627" title="53% like this...">
    10
    </div>
  </div>
  <a href="#33627" class="name">
  <strong class="user"><em>ocrow at simplexity dot net</em></strong></a><a class="genanchor" href="#33627"> &para;</a><div class="date" title="2003-07-02 05:16"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33627">
<div class="phpcode"><code><span class="html">If your PHP pages include() or require() files that live within the web server document root, for example library files in the same directory as the PHP pages, you must account for the possibility that attackers may call those library files directly.  <br /><br />Any program level code in the library files (ie code not part of function definitions) will be directly executable by the caller outside of the scope of the intended calling sequence.  An attacker may be able to leverage this ability to cause unintended effects.<br /><br />The most robust way to guard against this possibility is to prevent your webserver from calling the library scripts directly, either by moving them out of the document root, or by putting them in a folder configured to refuse web server access. With Apache for example, create a .htaccess file in the library script folder with these directives:<br /><br />Order Allow,Deny<br />Deny from any</span></code></div>
  </div>
 </div>
  <div class="note" id="123517">  <div class="votes">
    <div id="Vu123517">
    <a href="/manual/vote-note.php?id=123517&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123517">
    <a href="/manual/vote-note.php?id=123517&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123517" title="55% like this...">
    4
    </div>
  </div>
  <a href="#123517" class="name">
  <strong class="user"><em>inland14 at live dot com</em></strong></a><a class="genanchor" href="#123517"> &para;</a><div class="date" title="2019-01-13 04:06"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123517">
<div class="phpcode"><code><span class="html">Good Dharma tokens which are basically in the feed somewhere that allow users that are not reprogramming and injecting to get into the site.<br /><br />Change this POST AJAX call URL every couple minutes to exclude users who didn't follow your portal. You can combine this with where they came from. Just in the case of advertised click-thrus.<br /><br />You can make a perfectly good token from time() and some measure away from it every ~5th minute(?). Balance the load by free token grasping at login, or even if they just got to the site. And don't let them into the feed past the designated 5th minute, or algorithmic sum for your timed change of the guard, without knowledge of the token. This can be caught up by passing variables across pages. Directly injecting the POST token with a curl to your own site. And combining that like a session ID.</span></code></div>
  </div>
 </div>
  <div class="note" id="69775">  <div class="votes">
    <div id="Vu69775">
    <a href="/manual/vote-note.php?id=69775&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69775">
    <a href="/manual/vote-note.php?id=69775&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69775" title="52% like this...">
    6
    </div>
  </div>
  <a href="#69775" class="name">
  <strong class="user"><em>steffen at morkland dot com</em></strong></a><a class="genanchor" href="#69775"> &para;</a><div class="date" title="2006-09-20 06:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69775">
<div class="phpcode"><code><span class="html">In Reply to djjokla and others<br /><br />Consider placing all incude files as mentioned before in a seperate folder containing a .htaccess containing a Order Deny,Allow<br /><br />the create a index file, which is intended to handle ALL request made to you php application, then call it with index.php?view=index<br /><br />the index file could look a bit like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">switch(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'view'</span><span class="keyword">]){<br />    case </span><span class="string">'index'</span><span class="keyword">:<br />        include(</span><span class="string">'libs/index.php'</span><span class="keyword">);<br />        break;<br />    default:<br />        include(</span><span class="string">'libs/404.php'</span><span class="keyword">);<br />        break;<br />}<br /></span><span class="default">?&gt;<br /></span><br />this could be an array or something even more creative. it actually does'nt matter how you do it... running all pages through one central script has one big advantage.... CONTROL.<br />at any givin time, you can easily implement access control to functions without forgetting crucial files.</span></code></div>
  </div>
 </div>
  <div class="note" id="120039">  <div class="votes">
    <div id="Vu120039">
    <a href="/manual/vote-note.php?id=120039&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120039">
    <a href="/manual/vote-note.php?id=120039&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120039" title="50% like this...">
    1
    </div>
  </div>
  <a href="#120039" class="name">
  <strong class="user"><em>Ray.Paseur sometimes uses Gmail</em></strong></a><a class="genanchor" href="#120039"> &para;</a><div class="date" title="2016-10-13 02:51"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120039">
<div class="phpcode"><code><span class="html">Password hashing should be linked here:<br /><a href="http://php.net/manual/en/faq.passwords.php" rel="nofollow" target="_blank">http://php.net/manual/en/faq.passwords.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="117637">  <div class="votes">
    <div id="Vu117637">
    <a href="/manual/vote-note.php?id=117637&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117637">
    <a href="/manual/vote-note.php?id=117637&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117637" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117637" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#117637"> &para;</a><div class="date" title="2015-07-13 09:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117637">
<div class="phpcode"><code><span class="html">chroot is NOT a security feature. Don't use it as one. Please read the man pages of chroot to understand what its really used for</span></code></div>
  </div>
 </div>
  <div class="note" id="31678">  <div class="votes">
    <div id="Vu31678">
    <a href="/manual/vote-note.php?id=31678&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31678">
    <a href="/manual/vote-note.php?id=31678&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31678" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#31678" class="name">
  <strong class="user"><em>ManifoldNick at columbus dot rr dot com</em></strong></a><a class="genanchor" href="#31678"> &para;</a><div class="date" title="2003-04-29 10:30"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31678">
<div class="phpcode"><code><span class="html">Remember that security risks often don't involve months of prep work or backdoors or whatever else you saw on Swordfish ;) In fact one of the bigges newbie mistakes is not removing "&lt;" from user input (especially when using message boards) so in theory a user could secerely mess up a page or even have your server run php scripts which would allow them to wreak havoc on your site.</span></code></div>
  </div>
 </div>
  <div class="note" id="33483">  <div class="votes">
    <div id="Vu33483">
    <a href="/manual/vote-note.php?id=33483&amp;page=security&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33483">
    <a href="/manual/vote-note.php?id=33483&amp;page=security&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33483" title="48% like this...">
    -2
    </div>
  </div>
  <a href="#33483" class="name">
  <strong class="user"><em>annonymous at domain dot com</em></strong></a><a class="genanchor" href="#33483"> &para;</a><div class="date" title="2003-06-27 06:08"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33483">
<div class="phpcode"><code><span class="html">best bet is to build php as cgi, run under suexec, with chroot jailed users. Not the best, but fairly unobtrusive, provides several levels of checkpoints, and has only the detriment of being, well, kinda slow. 8)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=security&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="index.php">PHP Manual</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="copyright.php" title="Copyright">Copyright</a>
                        </li>
                                                <li class="">
                            <a href="preface.php" title="Preface">Preface</a>
                        </li>
                                                <li class="">
                            <a href="getting-started.php" title="Getting Started">Getting Started</a>
                        </li>
                                                <li class="">
                            <a href="install.php" title="Installation and Configuration">Installation and Configuration</a>
                        </li>
                                                <li class="">
                            <a href="langref.php" title="Language Reference">Language Reference</a>
                        </li>
                                                <li class="current">
                            <a href="security.php" title="Security">Security</a>
                        </li>
                                                <li class="">
                            <a href="features.php" title="Features">Features</a>
                        </li>
                                                <li class="">
                            <a href="funcref.php" title="Function Reference">Function Reference</a>
                        </li>
                                                <li class="">
                            <a href="faq.php" title="FAQ">FAQ</a>
                        </li>
                                                <li class="">
                            <a href="appendices.php" title="Appendices">Appendices</a>
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
