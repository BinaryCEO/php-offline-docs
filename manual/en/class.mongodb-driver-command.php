<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MongoDB\Driver\Command - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.mongodb-driver-command.php">
 <link rel="shorturl" href="https://www.php.net/mongodb-driver-command">
 <link rel="alternate" href="https://www.php.net/mongodb-driver-command" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mongodb.mongodb.php">
 <link rel="prev" href="https://www.php.net/manual/en/mongodb-driver-manager.startsession.php">
 <link rel="next" href="https://www.php.net/manual/en/mongodb-driver-command.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.mongodb-driver-command.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.mongodb-driver-command.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.mongodb-driver-command.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.mongodb-driver-command.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.mongodb-driver-command.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.mongodb-driver-command.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.mongodb-driver-command.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.mongodb-driver-command.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.mongodb-driver-command.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.mongodb-driver-command.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.mongodb-driver-command.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The MongoDB\Driver\Command class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MongoDB\Driver\Command - Manual" />
<meta name="twitter:description" content="The MongoDB\Driver\Command class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MongoDB\Driver\Command - Manual" />
<meta itemprop="description" content="The MongoDB\Driver\Command class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The MongoDB\Driver\Command class" />

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
        <a href="mongodb-driver-command.construct.php">
          MongoDB\Driver\Command::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mongodb-driver-manager.startsession.php">
          &laquo; MongoDB\Driver\Manager::startSession        </a>
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
            <option value='en/class.mongodb-driver-command.php' selected="selected">English</option>
            <option value='de/class.mongodb-driver-command.php'>German</option>
            <option value='es/class.mongodb-driver-command.php'>Spanish</option>
            <option value='fr/class.mongodb-driver-command.php'>French</option>
            <option value='it/class.mongodb-driver-command.php'>Italian</option>
            <option value='ja/class.mongodb-driver-command.php'>Japanese</option>
            <option value='pt_BR/class.mongodb-driver-command.php'>Brazilian Portuguese</option>
            <option value='ru/class.mongodb-driver-command.php'>Russian</option>
            <option value='tr/class.mongodb-driver-command.php'>Turkish</option>
            <option value='uk/class.mongodb-driver-command.php'>Ukrainian</option>
            <option value='zh/class.mongodb-driver-command.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.mongodb-driver-command" class="reference">

 <h1 class="title">The MongoDB\Driver\Command class</h1>
 

 <div class="partintro"><p class="verinfo">(mongodb &gt;=1.0.0)</p>


  <div class="section" id="mongodb-driver-command.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The <span class="classname"><strong class="classname">MongoDB\Driver\Command</strong></span> class is a value object
    that represents a database command.
   </p>
   <p class="para">
    To provide <q class="quote">Command Helpers</q> the <span class="classname"><strong class="classname">MongoDB\Driver\Command</strong></span> object should be composed.
   </p>
  </div>


  <div class="section" id="mongodb-driver-command.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="modifier">final</span>
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">MongoDB\Driver\Command</strong>
     </span>
     {</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-command.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$document</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$commandOptions</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

   }</div>


  </div>

  <div class="section" id="mongodb-driver-command.examples">
   <h2 class="title">Examples</h2>

   <div class="example" id="example-1407">
    <p><strong>Example #1 Composing <span class="classname"><strong class="classname">MongoDB\Driver\Command</strong></span> to provide a helper to create collections</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">CreateCollection </span><span style="color: #007700">{<br />    protected </span><span style="color: #0000BB">$cmd </span><span style="color: #007700">= array();<br /><br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$collectionName</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cmd</span><span style="color: #007700">[</span><span style="color: #DD0000">"create"</span><span style="color: #007700">] = (string) </span><span style="color: #0000BB">$collectionName</span><span style="color: #007700">;<br />    }<br />    function </span><span style="color: #0000BB">setCappedCollection</span><span style="color: #007700">(</span><span style="color: #0000BB">$maxBytes</span><span style="color: #007700">, </span><span style="color: #0000BB">$maxDocuments </span><span style="color: #007700">= </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cmd</span><span style="color: #007700">[</span><span style="color: #DD0000">"capped"</span><span style="color: #007700">] = </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cmd</span><span style="color: #007700">[</span><span style="color: #DD0000">"size"</span><span style="color: #007700">]   = (int) </span><span style="color: #0000BB">$maxBytes</span><span style="color: #007700">;<br /><br />        if (</span><span style="color: #0000BB">$maxDocuments</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cmd</span><span style="color: #007700">[</span><span style="color: #DD0000">"max"</span><span style="color: #007700">] = (int) </span><span style="color: #0000BB">$maxDocuments</span><span style="color: #007700">;<br />        }<br />    }<br />    function </span><span style="color: #0000BB">usePowerOf2Sizes</span><span style="color: #007700">(</span><span style="color: #0000BB">$bool</span><span style="color: #007700">) {<br />        if (</span><span style="color: #0000BB">$bool</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cmd</span><span style="color: #007700">[</span><span style="color: #DD0000">"flags"</span><span style="color: #007700">] = </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />        } else {<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cmd</span><span style="color: #007700">[</span><span style="color: #DD0000">"flags"</span><span style="color: #007700">] = </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />        }<br />    }<br />    function </span><span style="color: #0000BB">setFlags</span><span style="color: #007700">(</span><span style="color: #0000BB">$flags</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cmd</span><span style="color: #007700">[</span><span style="color: #DD0000">"flags"</span><span style="color: #007700">] = (int) </span><span style="color: #0000BB">$flags</span><span style="color: #007700">;<br />    }<br />    function </span><span style="color: #0000BB">getCommand</span><span style="color: #007700">() {<br />        return new </span><span style="color: #0000BB">MongoDB\Driver\Command</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cmd</span><span style="color: #007700">);<br />    }<br />    function </span><span style="color: #0000BB">getCollectionName</span><span style="color: #007700">() {<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cmd</span><span style="color: #007700">[</span><span style="color: #DD0000">"create"</span><span style="color: #007700">];<br />    }<br />}<br /><br /><br /></span><span style="color: #0000BB">$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">(</span><span style="color: #DD0000">"mongodb://localhost:27017"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$createCollection </span><span style="color: #007700">= new </span><span style="color: #0000BB">CreateCollection</span><span style="color: #007700">(</span><span style="color: #DD0000">"cappedCollection"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$createCollection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setCappedCollection</span><span style="color: #007700">(</span><span style="color: #0000BB">64 </span><span style="color: #007700">* </span><span style="color: #0000BB">1024</span><span style="color: #007700">);<br /><br />try {<br />    </span><span style="color: #0000BB">$command </span><span style="color: #007700">= </span><span style="color: #0000BB">$createCollection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommand</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">$cursor </span><span style="color: #007700">= </span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"databaseName"</span><span style="color: #007700">, </span><span style="color: #0000BB">$command</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">$cursor</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">()[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">$collstats </span><span style="color: #007700">= [</span><span style="color: #DD0000">"collstats" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$createCollection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCollectionName</span><span style="color: #007700">()];<br />    </span><span style="color: #0000BB">$cursor </span><span style="color: #007700">= </span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"databaseName"</span><span style="color: #007700">, new </span><span style="color: #0000BB">MongoDB\Driver\Command</span><span style="color: #007700">(</span><span style="color: #0000BB">$collstats</span><span style="color: #007700">));<br />    </span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">$cursor</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">()[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">);<br />} catch(</span><span style="color: #0000BB">MongoDB\Driver\Exception $e</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    exit;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
object(MongoDB\Driver\Command)#3 (1) {
  [&quot;command&quot;]=&gt;
  array(3) {
    [&quot;create&quot;]=&gt;
    string(16) &quot;cappedCollection&quot;
    [&quot;capped&quot;]=&gt;
    bool(true)
    [&quot;size&quot;]=&gt;
    int(65536)
  }
}
array(1) {
  [&quot;ok&quot;]=&gt;
  float(1)
}
array(16) {
  [&quot;ns&quot;]=&gt;
  string(29) &quot;databaseName.cappedCollection&quot;
  [&quot;count&quot;]=&gt;
  int(0)
  [&quot;size&quot;]=&gt;
  int(0)
  [&quot;numExtents&quot;]=&gt;
  int(1)
  [&quot;storageSize&quot;]=&gt;
  int(65536)
  [&quot;nindexes&quot;]=&gt;
  int(1)
  [&quot;lastExtentSize&quot;]=&gt;
  float(65536)
  [&quot;paddingFactor&quot;]=&gt;
  float(1)
  [&quot;paddingFactorNote&quot;]=&gt;
  string(101) &quot;paddingFactor is unused and unmaintained in 2.8. It remains hard coded to 1.0 for compatibility only.&quot;
  [&quot;userFlags&quot;]=&gt;
  int(0)
  [&quot;capped&quot;]=&gt;
  bool(true)
  [&quot;max&quot;]=&gt;
  int(9223372036854775807)
  [&quot;maxSize&quot;]=&gt;
  int(65536)
  [&quot;totalIndexSize&quot;]=&gt;
  int(8176)
  [&quot;indexSizes&quot;]=&gt;
  object(stdClass)#4 (1) {
    [&quot;_id_&quot;]=&gt;
    int(8176)
  }
  [&quot;ok&quot;]=&gt;
  float(1)
}
</pre></div>
   </div>
  </div>

 </div>

 







<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="mongodb-driver-command.construct.php">MongoDB\Driver\Command::__construct</a> — Create a new Command</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mongodb/mongodb/driver/command.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.mongodb-driver-command%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.mongodb-driver-command&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.mongodb-driver-command.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119717">  <div class="votes">
    <div id="Vu119717">
    <a href="/manual/vote-note.php?id=119717&amp;page=class.mongodb-driver-command&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119717">
    <a href="/manual/vote-note.php?id=119717&amp;page=class.mongodb-driver-command&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119717" title="65% like this...">
    15
    </div>
  </div>
  <a href="#119717" class="name">
  <strong class="user"><em>tdrpic</em></strong></a><a class="genanchor" href="#119717"> &para;</a><div class="date" title="2016-08-09 05:28"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119717">
<div class="phpcode"><code><span class="html">In case you're wondering how to perform a 'distinct' query:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Sample MongoDB command:<br />// db.product.distinct("scent", {"prodCat": "10 oz can"})<br /><br /></span><span class="default">$manager </span><span class="keyword">= new </span><span class="default">MongoDB\Driver\Manager</span><span class="keyword">(</span><span class="string">"mongodb://localhost:27017"</span><span class="keyword">);<br /><br /></span><span class="default">$query </span><span class="keyword">= [</span><span class="string">'prodCat' </span><span class="keyword">=&gt; </span><span class="string">'10 oz can'</span><span class="keyword">]; </span><span class="comment">// your typical MongoDB query<br /></span><span class="default">$cmd </span><span class="keyword">= new </span><span class="default">MongoDB\Driver\Command</span><span class="keyword">([<br />    </span><span class="comment">// build the 'distinct' command<br />    </span><span class="string">'distinct' </span><span class="keyword">=&gt; </span><span class="string">'product'</span><span class="keyword">, </span><span class="comment">// specify the collection name<br />    </span><span class="string">'key' </span><span class="keyword">=&gt; </span><span class="string">'scent'</span><span class="keyword">, </span><span class="comment">// specify the field for which we want to get the distinct values<br />    </span><span class="string">'query' </span><span class="keyword">=&gt; </span><span class="default">$query </span><span class="comment">// criteria to filter documents<br /></span><span class="keyword">]);<br /></span><span class="default">$cursor </span><span class="keyword">= </span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">executeCommand</span><span class="keyword">(</span><span class="string">'catalog'</span><span class="keyword">, </span><span class="default">$cmd</span><span class="keyword">); </span><span class="comment">// retrieve the results<br /></span><span class="default">$scents </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">-&gt;</span><span class="default">toArray</span><span class="keyword">())-&gt;</span><span class="default">values</span><span class="keyword">; </span><span class="comment">// get the distinct values as an array<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$scents</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123163">  <div class="votes">
    <div id="Vu123163">
    <a href="/manual/vote-note.php?id=123163&amp;page=class.mongodb-driver-command&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123163">
    <a href="/manual/vote-note.php?id=123163&amp;page=class.mongodb-driver-command&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123163" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123163" class="name">
  <strong class="user"><em>jonny dot b dot 112 at gmail dot com</em></strong></a><a class="genanchor" href="#123163"> &para;</a><div class="date" title="2018-09-27 09:14"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123163">
<div class="phpcode"><code><span class="html">0) Read the official MongoDB documentation for understand what db commands you can use and what parameters they requires - <a href="https://docs.mongodb.com/manual/reference/command/" rel="nofollow" target="_blank">https://docs.mongodb.com/manual/reference/command/</a><br /><br />1) Wrong:<br />$cmd = new \MongoDB\Driver\Command([<br />    'aggregate' =&gt; 'collection',<br />    'pipeline' =&gt; ['$group' =&gt; ['_id' =&gt; null, 'count' =&gt; ['$sum' =&gt; '$total']]]<br />]);<br />because pipeline is array of objects in json words (index array of associative arrays in php words) - pipeline: [ {&lt;stage&gt;}, ... ]<br />What does it mean? It means that  'pipeline' must be like this:<br />[<br />    ['$group' =&gt; ['_id' =&gt; null, 'count' =&gt; ['$sum' =&gt; '$total']]],    // this is {&lt;stage&gt;}<br />    ['$match' =&gt; [...]],    // and this<br />    ...<br />    [...]    // and all of that<br />]<br />Just see <a href="https://docs.mongodb.com/manual/reference/operator/aggregation-pipeline/" rel="nofollow" target="_blank">https://docs.mongodb.com/manual/reference/operator/aggregation-pipeline/</a><br /><br />2) The first pair in associative array for __construct's argument $document (if it is an array) must be a command name (e. g. 'count' =&gt; 'collectionName' or 'findAndModify' =&gt; 'collectionName'). I found this out experimentally, but you can examine source code  <a href="https://github.com/mongodb/mongo-php-driver/blob/master/src/MongoDB/Command.c" rel="nofollow" target="_blank">https://github.com/mongodb/mongo-php-driver/blob/master/src/MongoDB/Command.c</a> for understand why it happens.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.mongodb-driver-command&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.mongodb-driver-command.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mongodb.mongodb.php">MongoDB\Driver</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.mongodb-driver-manager.php" title="MongoDB\Driver\Manager">MongoDB\Driver\Manager</a>
                        </li>
                                                <li class="current">
                            <a href="class.mongodb-driver-command.php" title="MongoDB\Driver\Command">MongoDB\Driver\Command</a>
                        </li>
                                                <li class="">
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
