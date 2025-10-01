<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MongoDB\Driver\Query - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.mongodb-driver-query.php">
 <link rel="shorturl" href="https://www.php.net/mongodb-driver-query">
 <link rel="alternate" href="https://www.php.net/mongodb-driver-query" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mongodb.mongodb.php">
 <link rel="prev" href="https://www.php.net/manual/en/mongodb-driver-command.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/mongodb-driver-query.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.mongodb-driver-query.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.mongodb-driver-query.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.mongodb-driver-query.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.mongodb-driver-query.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.mongodb-driver-query.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.mongodb-driver-query.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.mongodb-driver-query.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.mongodb-driver-query.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.mongodb-driver-query.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.mongodb-driver-query.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.mongodb-driver-query.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The MongoDB\Driver\Query class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MongoDB\Driver\Query - Manual" />
<meta name="twitter:description" content="The MongoDB\Driver\Query class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MongoDB\Driver\Query - Manual" />
<meta itemprop="description" content="The MongoDB\Driver\Query class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The MongoDB\Driver\Query class" />

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
        <a href="mongodb-driver-query.construct.php">
          MongoDB\Driver\Query::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mongodb-driver-command.construct.php">
          &laquo; MongoDB\Driver\Command::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.mongodb.php'>MongoDB</a></li>      <li><a href='mongodb.mongodb.php'>MongoDB\Driver</a></li>      </ul>
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
            <option value='en/class.mongodb-driver-query.php' selected="selected">English</option>
            <option value='de/class.mongodb-driver-query.php'>German</option>
            <option value='es/class.mongodb-driver-query.php'>Spanish</option>
            <option value='fr/class.mongodb-driver-query.php'>French</option>
            <option value='it/class.mongodb-driver-query.php'>Italian</option>
            <option value='ja/class.mongodb-driver-query.php'>Japanese</option>
            <option value='pt_BR/class.mongodb-driver-query.php'>Brazilian Portuguese</option>
            <option value='ru/class.mongodb-driver-query.php'>Russian</option>
            <option value='tr/class.mongodb-driver-query.php'>Turkish</option>
            <option value='uk/class.mongodb-driver-query.php'>Ukrainian</option>
            <option value='zh/class.mongodb-driver-query.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.mongodb-driver-query" class="reference">

 <h1 class="title">The MongoDB\Driver\Query class</h1>
 

 <div class="partintro"><p class="verinfo">(mongodb &gt;=1.0.0)</p>


  <div class="section" id="mongodb-driver-query.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The <span class="classname"><strong class="classname">MongoDB\Driver\Query</strong></span> class is a value object that
    represents a database query.
   </p>
  </div>


  <div class="section" id="mongodb-driver-query.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="modifier">final</span>
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">MongoDB\Driver\Query</strong>
     </span>
     {</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-query.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$filter</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$queryOptions</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

   }</div>


  </div>
  

 </div>

 







<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="mongodb-driver-query.construct.php">MongoDB\Driver\Query::__construct</a> — Create a new Query</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mongodb/mongodb/driver/query.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.mongodb-driver-query%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.mongodb-driver-query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.mongodb-driver-query.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119142">  <div class="votes">
    <div id="Vu119142">
    <a href="/manual/vote-note.php?id=119142&amp;page=class.mongodb-driver-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119142">
    <a href="/manual/vote-note.php?id=119142&amp;page=class.mongodb-driver-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119142" title="58% like this...">
    13
    </div>
  </div>
  <a href="#119142" class="name">
  <strong class="user"><em>maha88a</em></strong></a><a class="genanchor" href="#119142"> &para;</a><div class="date" title="2016-04-09 05:38"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119142">
<div class="phpcode"><code><span class="html">Here is an example of Query to retrieve the records from MangoDB collection using a filter. It will return in this case just one record that satisfy the filter id = 2.<br /><br />Considering the following MangoDB collection:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* my_collection */<br /><br />/* 1 */<br /></span><span class="keyword">{<br />    </span><span class="string">"_id" </span><span class="keyword">: </span><span class="default">ObjectId</span><span class="keyword">(</span><span class="string">"5707f007639a94cbc600f282"</span><span class="keyword">),<br />    </span><span class="string">"id" </span><span class="keyword">: </span><span class="default">1</span><span class="keyword">,<br />    </span><span class="string">"name" </span><span class="keyword">: </span><span class="string">"Name 1"<br /></span><span class="keyword">}<br /><br /></span><span class="comment">/* 2 */<br /></span><span class="keyword">{<br />    </span><span class="string">"_id" </span><span class="keyword">: </span><span class="default">ObjectId</span><span class="keyword">(</span><span class="string">"5707f0a8639a94f4cd2c84b1"</span><span class="keyword">),<br />    </span><span class="string">"id" </span><span class="keyword">: </span><span class="default">2</span><span class="keyword">,<br />    </span><span class="string">"name" </span><span class="keyword">: </span><span class="string">"Name 2"<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />I'm using the following code:<br /><span class="default">&lt;?php<br />$filter </span><span class="keyword">= [</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">];<br /></span><span class="default">$options </span><span class="keyword">= [<br />   </span><span class="string">'projection' </span><span class="keyword">=&gt; [</span><span class="string">'_id' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">],<br />];<br /></span><span class="default">$query </span><span class="keyword">= new </span><span class="default">MongoDB\Driver\Query</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /></span><span class="default">$rows </span><span class="keyword">= </span><span class="default">$mongo</span><span class="keyword">-&gt;</span><span class="default">executeQuery</span><span class="keyword">(</span><span class="string">'db_name.my_collection'</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">); </span><span class="comment">// $mongo contains the connection object to MongoDB<br /></span><span class="keyword">foreach(</span><span class="default">$rows </span><span class="keyword">as </span><span class="default">$r</span><span class="keyword">){<br />   </span><span class="default">print_</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120590">  <div class="votes">
    <div id="Vu120590">
    <a href="/manual/vote-note.php?id=120590&amp;page=class.mongodb-driver-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120590">
    <a href="/manual/vote-note.php?id=120590&amp;page=class.mongodb-driver-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120590" title="58% like this...">
    9
    </div>
  </div>
  <a href="#120590" class="name">
  <strong class="user"><em>yatiny3007 at gmail dot com</em></strong></a><a class="genanchor" href="#120590"> &para;</a><div class="date" title="2017-02-04 07:03"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120590">
<div class="phpcode"><code><span class="html">Find By _id <br /><br />$mongo = new \MongoDB\Driver\Manager('mongodb://root:root@192.168.0.127/db');<br /><br />$id           = new \MongoDB\BSON\ObjectId("588c78ce02ac660426003d87");<br />$filter      = ['_id' =&gt; $id];<br />$options = [];<br /><br />$query = new \MongoDB\Driver\Query($filter, $options);<br />$rows   = $mongo-&gt;executeQuery('db.collectionName', $query); <br /><br />foreach ($rows as $document) {<br />  pr($document);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="122838">  <div class="votes">
    <div id="Vu122838">
    <a href="/manual/vote-note.php?id=122838&amp;page=class.mongodb-driver-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122838">
    <a href="/manual/vote-note.php?id=122838&amp;page=class.mongodb-driver-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122838" title="62% like this...">
    4
    </div>
  </div>
  <a href="#122838" class="name">
  <strong class="user"><em>tiwaritusharudayan at gmail dot com</em></strong></a><a class="genanchor" href="#122838"> &para;</a><div class="date" title="2018-06-15 09:29"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122838">
<div class="phpcode"><code><span class="html">This format displays the documents returned from the query as stdClass Objects. For display purposes, it's fine, but if certain computations need to be performed using the returned documents and their corresponding fields, use this:<br /><br />------------------------------------Code Snippet-----------------------------------<br /><br />$connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");<br />    <br />$filter = ["name"=&gt;"insert_desired_name_here"];<br />/* the following condition, and others similar to it, work as well<br /><br />$filter = ["age"=&gt;["$gt"=&gt;"18"]]; /*/<br />    <br />$options = []; /* put desired options here, should you need any */<br />    <br />$query = new MongoDB\Driver\Query($filter,$options);<br />    <br />$documents = $connection-&gt;executeQuery('trial.trial' /*dbname.collection_name*/,$query);<br />    <br />foreach($documents as $document){<br />    $document = json_decode(json_encode($document),true);<br />    echo $document[name];<br />}<br /><br />--------------------------------------------------------------------------------------<br /><br />The first executable statement inside the foreach encodes the returned stdClass object to a json object, and the same is immediately decoded to an associative array, which can then be used as and when needed</span></code></div>
  </div>
 </div>
  <div class="note" id="121806">  <div class="votes">
    <div id="Vu121806">
    <a href="/manual/vote-note.php?id=121806&amp;page=class.mongodb-driver-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121806">
    <a href="/manual/vote-note.php?id=121806&amp;page=class.mongodb-driver-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121806" title="58% like this...">
    4
    </div>
  </div>
  <a href="#121806" class="name">
  <strong class="user"><em>dvdogrady at gmail dot com</em></strong></a><a class="genanchor" href="#121806"> &para;</a><div class="date" title="2017-10-29 03:58"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121806">
<div class="phpcode"><code><span class="html">Hello<br /><br />Im just writing this note to help people out who want to write $filter arrays with query operators in them.<br /><br />I have copied this code off maha88a's note but I changed the $filter to give you an idea of how it would work with the query operators<br /><br />Considering the following MangoDB collection:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* my_collection */<br /><br />/* 1 */<br /></span><span class="keyword">{<br />    </span><span class="string">"_id" </span><span class="keyword">: </span><span class="default">ObjectId</span><span class="keyword">(</span><span class="string">"5707f007639a94cbc600f282"</span><span class="keyword">),<br />    </span><span class="string">"id" </span><span class="keyword">: </span><span class="default">1</span><span class="keyword">,<br />    </span><span class="string">"name" </span><span class="keyword">: </span><span class="string">"Name 1"<br /></span><span class="keyword">}<br /><br /></span><span class="comment">/* 2 */<br /></span><span class="keyword">{<br />    </span><span class="string">"_id" </span><span class="keyword">: </span><span class="default">ObjectId</span><span class="keyword">(</span><span class="string">"5707f0a8639a94f4cd2c84b1"</span><span class="keyword">),<br />    </span><span class="string">"id" </span><span class="keyword">: </span><span class="default">2</span><span class="keyword">,<br />    </span><span class="string">"name" </span><span class="keyword">: </span><span class="string">"Name 2"<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />I'm using the following code:<br /><span class="default">&lt;?php<br /></span><span class="comment">// This $filter will return any id's qualing to 2 but what if we want all the id's above 0.<br />// $filter = ['id' =&gt; 2];<br />// This is how we would do this.<br /></span><span class="default">$filter </span><span class="keyword">= [</span><span class="string">'id' </span><span class="keyword">=&gt; [</span><span class="string">'$gt' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">]]<br /></span><span class="default">$options </span><span class="keyword">= [<br />   </span><span class="string">'projection' </span><span class="keyword">=&gt; [</span><span class="string">'_id' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">],<br />];<br /></span><span class="default">$query </span><span class="keyword">= new </span><span class="default">MongoDB\Driver\Query</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /></span><span class="default">$rows </span><span class="keyword">= </span><span class="default">$mongo</span><span class="keyword">-&gt;</span><span class="default">executeQuery</span><span class="keyword">(</span><span class="string">'db_name.my_collection'</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">); </span><span class="comment">// $mongo contains the connection object to MongoDB<br /></span><span class="keyword">foreach(</span><span class="default">$rows </span><span class="keyword">as </span><span class="default">$r</span><span class="keyword">){<br />   </span><span class="default">print_</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125690">  <div class="votes">
    <div id="Vu125690">
    <a href="/manual/vote-note.php?id=125690&amp;page=class.mongodb-driver-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125690">
    <a href="/manual/vote-note.php?id=125690&amp;page=class.mongodb-driver-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125690" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125690" class="name">
  <strong class="user"><em>jaimegarbanzo at gmail dot com</em></strong></a><a class="genanchor" href="#125690"> &para;</a><div class="date" title="2021-01-18 09:46"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125690">
<div class="phpcode"><code><span class="html"># constructing a to a remote server and querry and limiting the result to the latest 3 results<br /><br />$username ="yourusername";<br />$password = "yourpasswort";<br /><br />$manager = new MongoDB\Driver\Manager("mongodb://yourserver.com/",<br />     array("username" =&gt; $username, "password" =&gt; $password )<br />    );    <br /><br /># setting your options and filter<br />$filter  = [];<br />$options = ['sort'=&gt;array('_id'=&gt;-1),'limit'=&gt;3]; # limit -1 from newest to oldest <br /><br />#constructing the querry<br />$query = new MongoDB\Driver\Query($filter, $options);<br /><br />#executing <br />$cursor = $manager-&gt;executeQuery('resultdb.test', $query);<br /><br />echo "dumping results&lt;br&gt;";<br />foreach ($cursor as $document) {<br />    var_dump($document);<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.mongodb-driver-query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.mongodb-driver-query.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mongodb.mongodb.php">MongoDB\Driver</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.mongodb-driver-manager.php" title="MongoDB\Driver\Manager">MongoDB\Driver\Manager</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-command.php" title="MongoDB\Driver\Command">MongoDB\Driver\Command</a>
                        </li>
                                                <li class="current">
                            <a href="class.mongodb-driver-query.php" title="MongoDB\Driver\Query">MongoDB\Driver\Query</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-bulkwrite.php" title="MongoDB\Driver\BulkWrite">MongoDB\Driver\BulkWrite</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-bulkwritecommand.php" title="MongoDB\Driver\BulkWriteCommand">MongoDB\Driver\BulkWriteCommand</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-session.php" title="MongoDB\Driver\Session">MongoDB\Driver\Session</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-clientencryption.php" title="MongoDB\Driver\ClientEncryption">MongoDB\Driver\ClientEncryption</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-serverapi.php" title="MongoDB\Driver\ServerApi">MongoDB\Driver\ServerApi</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-writeconcern.php" title="MongoDB\Driver\WriteConcern">MongoDB\Driver\WriteConcern</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-readpreference.php" title="MongoDB\Driver\ReadPreference">MongoDB\Driver\ReadPreference</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-readconcern.php" title="MongoDB\Driver\ReadConcern">MongoDB\Driver\ReadConcern</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-cursor.php" title="MongoDB\Driver\Cursor">MongoDB\Driver\Cursor</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-cursorinterface.php" title="MongoDB\Driver\CursorInterface">MongoDB\Driver\CursorInterface</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-server.php" title="MongoDB\Driver\Server">MongoDB\Driver\Server</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-serverdescription.php" title="MongoDB\Driver\ServerDescription">MongoDB\Driver\ServerDescription</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-topologydescription.php" title="MongoDB\Driver\TopologyDescription">MongoDB\Driver\TopologyDescription</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-writeconcernerror.php" title="MongoDB\Driver\WriteConcernError">MongoDB\Driver\WriteConcernError</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-writeerror.php" title="MongoDB\Driver\WriteError">MongoDB\Driver\WriteError</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-writeresult.php" title="MongoDB\Driver\WriteResult">MongoDB\Driver\WriteResult</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-bulkwritecommandresult.php" title="MongoDB\Driver\BulkWriteCommandResult">MongoDB\Driver\BulkWriteCommandResult</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="class.mongodb-driver-cursorid.php" title="MongoDB\Driver\CursorId">MongoDB\Driver\CursorId</a>
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
