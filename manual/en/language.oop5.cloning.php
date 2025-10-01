<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Object Cloning - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.cloning.php">
 <link rel="shorturl" href="https://www.php.net/oop5.cloning">
 <link rel="alternate" href="https://www.php.net/oop5.cloning" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.final.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.object-comparison.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.cloning.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.cloning.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.cloning.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.cloning.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.cloning.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.cloning.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.cloning.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.cloning.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.cloning.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.cloning.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.cloning.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Object Cloning" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Object Cloning - Manual" />
<meta name="twitter:description" content="Object Cloning" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Object Cloning - Manual" />
<meta itemprop="description" content="Object Cloning" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Object Cloning" />

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
        <a href="language.oop5.object-comparison.php">
          Comparing Objects &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.final.php">
          &laquo; Final Keyword        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
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
            <option value='en/language.oop5.cloning.php' selected="selected">English</option>
            <option value='de/language.oop5.cloning.php'>German</option>
            <option value='es/language.oop5.cloning.php'>Spanish</option>
            <option value='fr/language.oop5.cloning.php'>French</option>
            <option value='it/language.oop5.cloning.php'>Italian</option>
            <option value='ja/language.oop5.cloning.php'>Japanese</option>
            <option value='pt_BR/language.oop5.cloning.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.cloning.php'>Russian</option>
            <option value='tr/language.oop5.cloning.php'>Turkish</option>
            <option value='uk/language.oop5.cloning.php'>Ukrainian</option>
            <option value='zh/language.oop5.cloning.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.cloning" class="sect1">
  <h2 class="title">Object Cloning</h2>
  
  <p class="para">
   Creating a copy of an object with fully replicated properties is not
   always the wanted behavior. A good example of the need for copy
   constructors, is if you have an object which represents a GTK window and the
   object holds the resource of this GTK window, when you create a duplicate
   you might want to create a new window with the same properties and have the
   new object hold the resource of the new window. Another example is if your
   object holds a reference to another object which it uses and when you
   replicate the parent object you want to create a new instance of this other
   object so that the replica has its own separate copy.
  </p>

  <p class="para">
   An object copy is created by using the <code class="literal">clone</code> keyword
   (which calls the object&#039;s <a href="language.oop5.cloning.php#object.clone" class="link">__clone()</a>
   method if possible).
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="annotation-interactive cdata"><pre>
$copy_of_object = clone $object;
</pre></div>
   </div>

  </div>

  <p class="para">
   When an object is cloned, PHP will perform a shallow copy of all of the
   object&#039;s properties. Any properties that are references to other variables
   will remain references.
  </p>

  <div class="methodsynopsis dc-description" id="object.clone">
   <span class="methodname"><strong>__clone</strong></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


  <p class="para">
   Once the cloning is complete, if a <a href="language.oop5.cloning.php#object.clone" class="link">__clone()</a> method is defined, then
   the newly created object&#039;s <a href="language.oop5.cloning.php#object.clone" class="link">__clone()</a> method will be called, to allow any
   necessary properties that need to be changed.
  </p>

  <div class="example" id="example-360">
   <p><strong>Example #1 Cloning an object</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">SubObject<br /></span><span style="color: #007700">{<br />    static </span><span style="color: #0000BB">$instances </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$instance</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">instance </span><span style="color: #007700">= ++</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$instances</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">__clone</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">instance </span><span style="color: #007700">= ++</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$instances</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">MyCloneable<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$object1</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$object2</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">__clone</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #FF8000">// Force a copy of this-&gt;object, otherwise<br />        // it will point to same object.<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">object1 </span><span style="color: #007700">= clone </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">object1</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyCloneable</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">object1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">SubObject</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">object2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">SubObject</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$obj2 </span><span style="color: #007700">= clone </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br /><br /><br />print </span><span style="color: #DD0000">"Original Object:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">"Cloned Object:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj2</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Original Object:
MyCloneable Object
(
    [object1] =&gt; SubObject Object
        (
            [instance] =&gt; 1
        )

    [object2] =&gt; SubObject Object
        (
            [instance] =&gt; 2
        )

)
Cloned Object:
MyCloneable Object
(
    [object1] =&gt; SubObject Object
        (
            [instance] =&gt; 3
        )

    [object2] =&gt; SubObject Object
        (
            [instance] =&gt; 2
        )

)
</pre></div>

   </div>

  </div>

  <p class="para">
   It is possible to access a member of a freshly cloned
   object in a single expression:
  </p>
  <div class="example" id="example-361">
   <p><strong>Example #2 Access member of freshly cloned object</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$dateTime </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">();<br />echo (clone </span><span style="color: #0000BB">$dateTime</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
2016
</pre></div>
   </div>
  </div>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/cloning.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.cloning%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.cloning&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.cloning.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="51439">  <div class="votes">
    <div id="Vu51439">
    <a href="/manual/vote-note.php?id=51439&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51439">
    <a href="/manual/vote-note.php?id=51439&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51439" title="77% like this...">
    74
    </div>
  </div>
  <a href="#51439" class="name">
  <strong class="user"><em>jorge dot villalobos at gmail dot com</em></strong></a><a class="genanchor" href="#51439"> &para;</a><div class="date" title="2005-03-30 03:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51439">
<div class="phpcode"><code><span class="html">I think it's relevant to note that __clone is NOT an override. As the example shows, the normal cloning process always occurs, and it's the responsibility of the __clone method to "mend" any "wrong" action performed by it.</span></code></div>
  </div>
 </div>
  <div class="note" id="98297">  <div class="votes">
    <div id="Vu98297">
    <a href="/manual/vote-note.php?id=98297&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98297">
    <a href="/manual/vote-note.php?id=98297&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98297" title="67% like this...">
    46
    </div>
  </div>
  <a href="#98297" class="name">
  <strong class="user"><em>jojor at gmx dot net</em></strong></a><a class="genanchor" href="#98297"> &para;</a><div class="date" title="2010-06-07 01:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98297">
<div class="phpcode"><code><span class="html">Here is test script i wrote to test the behaviour of clone when i have arrays with primitive values in my class - as an additonal test of the note below by jeffrey at whinger dot nl<br /><br />&lt;pre&gt;<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{<br /><br />    private </span><span class="default">$myArray </span><span class="keyword">= array();<br />    function </span><span class="default">pushSomethingToArray</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) {<br />        </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">);<br />    }<br />    function </span><span class="default">getArray</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myArray</span><span class="keyword">;<br />    }<br /><br />}<br /><br /></span><span class="comment">//push some values to the myArray of Mainclass<br /></span><span class="default">$myObj </span><span class="keyword">= new </span><span class="default">MyClass</span><span class="keyword">();<br /></span><span class="default">$myObj</span><span class="keyword">-&gt;</span><span class="default">pushSomethingToArray</span><span class="keyword">(</span><span class="string">'blue'</span><span class="keyword">);<br /></span><span class="default">$myObj</span><span class="keyword">-&gt;</span><span class="default">pushSomethingToArray</span><span class="keyword">(</span><span class="string">'orange'</span><span class="keyword">);<br /></span><span class="default">$myObjClone </span><span class="keyword">= clone </span><span class="default">$myObj</span><span class="keyword">;<br /></span><span class="default">$myObj</span><span class="keyword">-&gt;</span><span class="default">pushSomethingToArray</span><span class="keyword">(</span><span class="string">'pink'</span><span class="keyword">);<br /><br /></span><span class="comment">//testing<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$myObj</span><span class="keyword">-&gt;</span><span class="default">getArray</span><span class="keyword">());     </span><span class="comment">//Array([0] =&gt; blue,[1] =&gt; orange,[2] =&gt; pink)<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$myObjClone</span><span class="keyword">-&gt;</span><span class="default">getArray</span><span class="keyword">());</span><span class="comment">//Array([0] =&gt; blue,[1] =&gt; orange)<br />//so array  cloned <br /><br /></span><span class="default">?&gt;<br /></span>&lt;/pre&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="72502">  <div class="votes">
    <div id="Vu72502">
    <a href="/manual/vote-note.php?id=72502&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72502">
    <a href="/manual/vote-note.php?id=72502&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72502" title="61% like this...">
    27
    </div>
  </div>
  <a href="#72502" class="name">
  <strong class="user"><em>MakariVerslund at gmail dot com</em></strong></a><a class="genanchor" href="#72502"> &para;</a><div class="date" title="2007-01-21 04:30"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72502">
<div class="phpcode"><code><span class="html">I ran into the same problem of an array of objects inside of an object that I wanted to clone all pointing to the same objects. However, I agreed that serializing the data was not the answer. It was relatively simple, really:
<br />
<br />public function __clone() {
<br />    foreach ($this-&gt;varName as &amp;$a) {
<br />        foreach ($a as &amp;$b) {
<br />            $b = clone $b;
<br />        }
<br />    }
<br />}
<br />
<br />Note, that I was working with a multi-dimensional array and I was not using the Key=&gt;Value pair system, but basically, the point is that if you use foreach, you need to specify that the copied data is to be accessed by reference.</span></code></div>
  </div>
 </div>
  <div class="note" id="96493">  <div class="votes">
    <div id="Vu96493">
    <a href="/manual/vote-note.php?id=96493&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96493">
    <a href="/manual/vote-note.php?id=96493&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96493" title="64% like this...">
    13
    </div>
  </div>
  <a href="#96493" class="name">
  <strong class="user"><em>emile at webflow dot nl</em></strong></a><a class="genanchor" href="#96493"> &para;</a><div class="date" title="2010-03-02 01:27"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96493">
<div class="phpcode"><code><span class="html">Another gotcha I encountered: like __construct and __desctruct, you must call parent::__clone() yourself from inside a child's __clone() function. The manual kind of got me on the wrong foot here: "An object's __clone() method cannot be called directly."</span></code></div>
  </div>
 </div>
  <div class="note" id="91323">  <div class="votes">
    <div id="Vu91323">
    <a href="/manual/vote-note.php?id=91323&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91323">
    <a href="/manual/vote-note.php?id=91323&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91323" title="61% like this...">
    13
    </div>
  </div>
  <a href="#91323" class="name">
  <strong class="user"><em>ben at last dot fm</em></strong></a><a class="genanchor" href="#91323"> &para;</a><div class="date" title="2009-06-05 10:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91323">
<div class="phpcode"><code><span class="html">Here are some cloning and reference gotchas we came up against at Last.fm.<br /><br />1. PHP treats variables as either 'values types' or 'reference types', where the difference is supposed to be transparent. Object cloning is one of the few times when it can make a big difference. I know of no programmatic way to tell if a variable is intrinsically a value or reference type. There IS however a non-programmatic ways to tell if an object property is value or reference type:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{ var </span><span class="default">$p</span><span class="keyword">; }<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">p </span><span class="keyword">= </span><span class="string">'Hello'</span><span class="keyword">; </span><span class="comment">// $a-&gt;p is a value type<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />object(A)#1 (1) {<br />  ["p"]=&gt;<br />  string(5) "Hello" // &lt;-- no &amp;<br />}<br />*/<br /><br /></span><span class="default">$ref </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">p</span><span class="keyword">; </span><span class="comment">// note that this CONVERTS $a-&gt;p into a reference type!!<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />object(A)#1 (1) {<br />  ["p"]=&gt;<br />  &amp;string(5) "Hello" // &lt;-- note the &amp;, this indicates it's a reference.<br />}<br />*/<br /><br /></span><span class="default">?&gt;<br /></span><br />2. unsetting all-but-one of the references will convert the remaining reference back into a value. Continuing from the previous example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">unset(</span><span class="default">$ref</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />object(A)#1 (1) {<br />  ["p"]=&gt;<br />  string(5) "Hello"<br />}<br />*/<br /><br /></span><span class="default">?&gt;<br /></span><br />I interpret this as the reference-count jumping from 2 straight to 0. However...<br /><br />2. It IS possible to create a reference with a reference count of 1 - i.e. to convert an property from value type to reference type, without any extra references. All you have to do is declare that it refers to itself. This is HIGHLY idiosyncratic, but nevertheless it works. This leads to the observation that although the manual states that 'Any properties that are references to other variables, will remain references,' this is not strictly true. Any variables that are references, even to *themselves* (not necessarily to other variables), will be copied by reference rather than by value. <br /><br />Here's an example to demonstrate:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">ByVal<br /></span><span class="keyword">{<br />    var </span><span class="default">$prop</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">ByRef<br /></span><span class="keyword">{<br />    var </span><span class="default">$prop</span><span class="keyword">;<br />    function </span><span class="default">__construct</span><span class="keyword">() { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prop</span><span class="keyword">; }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">ByVal</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= clone </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// $a-&gt;prop remains at 1<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">ByRef</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= clone </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// $a-&gt;prop is now 2<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124149">  <div class="votes">
    <div id="Vu124149">
    <a href="/manual/vote-note.php?id=124149&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124149">
    <a href="/manual/vote-note.php?id=124149&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124149" title="54% like this...">
    2
    </div>
  </div>
  <a href="#124149" class="name">
  <strong class="user"><em>tolgakaragol at gmail dot com</em></strong></a><a class="genanchor" href="#124149"> &para;</a><div class="date" title="2019-08-28 07:53"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124149">
<div class="phpcode"><code><span class="html">Here is a basic example about clone issue. If we use clone in getClassB method. Return value will be same as new B() result. But it we dont use clone we can effect B::$varA. <br /><br />class A <br />{<br />    protected $classB;<br />    <br />    public function __construct(){<br />        $this-&gt;classB = new B();<br />    }<br />    <br />    public function getClassB()<br />    {<br />        return clone $this-&gt;classB;<br />    }<br />}<br /><br />class B<br />{<br />    protected $varA = 2;<br />    <br />    public function getVarA()<br />    {<br />        return $this-&gt;varA;<br />    }<br />    <br />    public function setVarA()<br />    {<br />        $this-&gt;varA = 3;<br />    }<br />}<br /><br />$a = new A();<br /><br />$classB = $a-&gt;getClassB();<br /><br />$classB-&gt;setVarA();<br /><br />echo $a-&gt;getClassB()-&gt;getVarA() . PHP_EOL;// with clone -&gt; 2, without clone it returns -&gt; 3<br /><br />echo $classB-&gt;getVarA() . PHP_EOL; // returns always 3</span></code></div>
  </div>
 </div>
  <div class="note" id="116329">  <div class="votes">
    <div id="Vu116329">
    <a href="/manual/vote-note.php?id=116329&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116329">
    <a href="/manual/vote-note.php?id=116329&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116329" title="52% like this...">
    2
    </div>
  </div>
  <a href="#116329" class="name">
  <strong class="user"><em>stanislav dot eckert at vizson dot de</em></strong></a><a class="genanchor" href="#116329"> &para;</a><div class="date" title="2014-12-13 12:53"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116329">
<div class="phpcode"><code><span class="html">This base class automatically clones attributes of type object or array values of type object recursively. Just inherit your own classes from this base class.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">clone_base<br />    </span><span class="keyword">{<br />        public function </span><span class="default">__clone</span><span class="keyword">()<br />        {<br />            </span><span class="default">$object_vars </span><span class="keyword">= </span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br /><br />            foreach (</span><span class="default">$object_vars </span><span class="keyword">as </span><span class="default">$attr_name </span><span class="keyword">=&gt; </span><span class="default">$attr_value</span><span class="keyword">)<br />            {<br />                if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$attr_name</span><span class="keyword">))<br />                {<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$attr_name </span><span class="keyword">= clone </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$attr_name</span><span class="keyword">;<br />                }<br />                else if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$attr_name</span><span class="keyword">))<br />                {<br />                    </span><span class="comment">// Note: This copies only one dimension arrays<br />                    </span><span class="keyword">foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$attr_name </span><span class="keyword">as &amp;</span><span class="default">$attr_array_value</span><span class="keyword">)<br />                    {<br />                        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$attr_array_value</span><span class="keyword">))<br />                        {<br />                            </span><span class="default">$attr_array_value </span><span class="keyword">= clone </span><span class="default">$attr_array_value</span><span class="keyword">;<br />                        }<br />                        unset(</span><span class="default">$attr_array_value</span><span class="keyword">);<br />                    }<br />                }<br />            }<br />        }<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">extends </span><span class="default">clone_base<br />    </span><span class="keyword">{<br />        public </span><span class="default">$attr </span><span class="keyword">= </span><span class="string">"Hello"</span><span class="keyword">;<br />        public </span><span class="default">$b </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        public </span><span class="default">$attr2 </span><span class="keyword">= array();<br /><br />        public function </span><span class="default">__construct</span><span class="keyword">()<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= new </span><span class="default">bar</span><span class="keyword">(</span><span class="string">"World"</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">attr2</span><span class="keyword">[] = new </span><span class="default">bar</span><span class="keyword">(</span><span class="string">"What's"</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">attr2</span><span class="keyword">[] = new </span><span class="default">bar</span><span class="keyword">(</span><span class="string">"up?"</span><span class="keyword">);<br />        }<br />    }<br /><br />    class </span><span class="default">bar </span><span class="keyword">extends </span><span class="default">clone_base<br />    </span><span class="keyword">{<br />        public </span><span class="default">$attr</span><span class="keyword">;<br /><br />        public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$attr_value</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">attr </span><span class="keyword">= </span><span class="default">$attr_value</span><span class="keyword">;<br />        }<br />    }<br /><br />    echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /><br />    </span><span class="default">$f1 </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">();<br />    </span><span class="default">$f2 </span><span class="keyword">= clone </span><span class="default">$f1</span><span class="keyword">;<br />    </span><span class="default">$f2</span><span class="keyword">-&gt;</span><span class="default">attr </span><span class="keyword">= </span><span class="string">"James"</span><span class="keyword">;<br />    </span><span class="default">$f2</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">-&gt;</span><span class="default">attr </span><span class="keyword">= </span><span class="string">"Bond"</span><span class="keyword">;<br />    </span><span class="default">$f2</span><span class="keyword">-&gt;</span><span class="default">attr2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">attr </span><span class="keyword">= </span><span class="string">"Agent"</span><span class="keyword">;<br />    </span><span class="default">$f2</span><span class="keyword">-&gt;</span><span class="default">attr2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">attr </span><span class="keyword">= </span><span class="string">"007"</span><span class="keyword">;<br /><br />    echo </span><span class="string">"f1.attr = " </span><span class="keyword">. </span><span class="default">$f1</span><span class="keyword">-&gt;</span><span class="default">attr </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"f1.b.attr = " </span><span class="keyword">. </span><span class="default">$f1</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">-&gt;</span><span class="default">attr </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"f1.attr2[0] = " </span><span class="keyword">. </span><span class="default">$f1</span><span class="keyword">-&gt;</span><span class="default">attr2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">attr </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"f1.attr2[1] = " </span><span class="keyword">. </span><span class="default">$f1</span><span class="keyword">-&gt;</span><span class="default">attr2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">attr </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"f2.attr = " </span><span class="keyword">. </span><span class="default">$f2</span><span class="keyword">-&gt;</span><span class="default">attr </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"f2.b.attr = " </span><span class="keyword">. </span><span class="default">$f2</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">-&gt;</span><span class="default">attr </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"f2.attr2[0] = " </span><span class="keyword">. </span><span class="default">$f2</span><span class="keyword">-&gt;</span><span class="default">attr2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">attr </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"f2.attr2[1] = " </span><span class="keyword">. </span><span class="default">$f2</span><span class="keyword">-&gt;</span><span class="default">attr2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">attr </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79886">  <div class="votes">
    <div id="Vu79886">
    <a href="/manual/vote-note.php?id=79886&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79886">
    <a href="/manual/vote-note.php?id=79886&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79886" title="52% like this...">
    4
    </div>
  </div>
  <a href="#79886" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#79886"> &para;</a><div class="date" title="2007-12-17 03:51"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79886">
<div class="phpcode"><code><span class="html">It should go without saying that if you have circular references, where a property of object A refers to object B while a property of B refers to A (or more indirect loops than that), then you'll be glad that clone does NOT automatically make a deep copy!<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Foo<br /></span><span class="keyword">{<br />    var </span><span class="default">$that</span><span class="keyword">;<br /><br />function </span><span class="default">__clone</span><span class="keyword">()<br />{<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">that </span><span class="keyword">= clone </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">that</span><span class="keyword">;<br />}<br /><br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">that </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">that </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">;<br /><br /></span><span class="default">$c </span><span class="keyword">= clone </span><span class="default">$a</span><span class="keyword">;<br />echo </span><span class="string">'What happened?'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118877">  <div class="votes">
    <div id="Vu118877">
    <a href="/manual/vote-note.php?id=118877&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118877">
    <a href="/manual/vote-note.php?id=118877&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118877" title="44% like this...">
    -5
    </div>
  </div>
  <a href="#118877" class="name">
  <strong class="user"><em>fabio at naoimporta dot com</em></strong></a><a class="genanchor" href="#118877"> &para;</a><div class="date" title="2016-02-21 09:53"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118877">
<div class="phpcode"><code><span class="html">It's possible to know how many clones have been created of a  object. I'm think that is correct:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Classe </span><span class="keyword">{<br /><br />    public static </span><span class="default">$howManyClones </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    public function </span><span class="default">__clone</span><span class="keyword">() {<br />        ++static::</span><span class="default">$howManyClones</span><span class="keyword">;<br />    }<br /><br />    public static function </span><span class="default">howManyClones</span><span class="keyword">() {<br />        return static::</span><span class="default">$howManyClones</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">__destruct</span><span class="keyword">() {<br />        --static::</span><span class="default">$howManyClones</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">Classe</span><span class="keyword">;<br /><br /></span><span class="default">$b </span><span class="keyword">= clone </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= clone </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="default">$d </span><span class="keyword">= clone </span><span class="default">$c</span><span class="keyword">;<br /><br />echo </span><span class="string">'Clones:' </span><span class="keyword">. </span><span class="default">Classe</span><span class="keyword">::</span><span class="default">howManyClones</span><span class="keyword">() . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />unset(</span><span class="default">$d</span><span class="keyword">);<br /><br />echo </span><span class="string">'Clones:' </span><span class="keyword">. </span><span class="default">Classe</span><span class="keyword">::</span><span class="default">howManyClones</span><span class="keyword">() . </span><span class="default">PHP_EOL</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119554">  <div class="votes">
    <div id="Vu119554">
    <a href="/manual/vote-note.php?id=119554&amp;page=language.oop5.cloning&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119554">
    <a href="/manual/vote-note.php?id=119554&amp;page=language.oop5.cloning&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119554" title="41% like this...">
    -5
    </div>
  </div>
  <a href="#119554" class="name">
  <strong class="user"><em>yinzw at chuchujie dot com</em></strong></a><a class="genanchor" href="#119554"> &para;</a><div class="date" title="2016-07-05 01:10"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119554">
<div class="phpcode"><code><span class="html">It's clearly depicted in the manual, about the mechanism of clone process:<br />- First, shallow copy: properties of references will keep references (refer to the same target/variable)<br />- Then, change content/property as requested (calling __clone method which is defined by user).<br /><br />To illustrate this process, the following example codes seems better, comparing the the original version:<br /><br />class SubObject<br />{<br />    static $num_cons = 0;<br />    static $num_clone = 0;<br /><br />    public $construct_value;<br />    public $clone_value;<br /><br />    public function __construct() {<br />        $this-&gt;construct_value = ++self::$num_cons;<br />    }<br /><br />    public function __clone() {<br />        $this-&gt;clone_value = ++self::$num_clone;<br />    }<br />}<br /><br />class MyCloneable<br />{<br />    public $object1;<br />    public $object2;<br /><br />    function __clone()<br />    {<br />        // 强制复制一份this-&gt;object， 否则仍然指向同一个对象<br />        $this-&gt;object1 = clone $this-&gt;object1;<br />    }<br />}<br /><br />$obj = new MyCloneable();<br /><br />$obj-&gt;object1 = new SubObject();<br />$obj-&gt;object2 = new SubObject();<br /><br />$obj2 = clone $obj;<br /><br />print("Original Object:\n");<br />print_r($obj);<br />echo '&lt;br&gt;';<br />print("Cloned Object:\n");<br />print_r($obj2);<br /><br />==================<br /><br />the output is as below<br /><br />Original Object:<br />MyCloneable Object<br />(<br />    [object1] =&gt; SubObject Object<br />        (<br />            [construct_value] =&gt; 1<br />            [clone_value] =&gt; <br />        )<br /><br />    [object2] =&gt; SubObject Object<br />        (<br />            [construct_value] =&gt; 2<br />            [clone_value] =&gt; <br />        )<br /><br />)<br />&lt;br&gt;Cloned Object:<br />MyCloneable Object<br />(<br />    [object1] =&gt; SubObject Object<br />        (<br />            [construct_value] =&gt; 1<br />            [clone_value] =&gt; 1<br />        )<br /><br />    [object2] =&gt; SubObject Object<br />        (<br />            [construct_value] =&gt; 2<br />            [clone_value] =&gt; <br />        )<br /><br />)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.cloning&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.cloning.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.property-hooks.php" title="Property Hooks">Property Hooks</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.lazy-objects.php" title="Lazy Objects">Lazy Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
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
