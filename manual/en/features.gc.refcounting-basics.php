<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Reference Counting Basics - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.gc.refcounting-basics.php">
 <link rel="shorturl" href="https://www.php.net/gc.refcounting-basics">
 <link rel="alternate" href="https://www.php.net/gc.refcounting-basics" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.gc.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.gc.php">
 <link rel="next" href="https://www.php.net/manual/en/features.gc.collecting-cycles.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.gc.refcounting-basics.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.gc.refcounting-basics.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.gc.refcounting-basics.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.gc.refcounting-basics.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.gc.refcounting-basics.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.gc.refcounting-basics.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.gc.refcounting-basics.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.gc.refcounting-basics.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.gc.refcounting-basics.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.gc.refcounting-basics.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.gc.refcounting-basics.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Reference Counting Basics" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Reference Counting Basics - Manual" />
<meta name="twitter:description" content="Reference Counting Basics" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Reference Counting Basics - Manual" />
<meta itemprop="description" content="Reference Counting Basics" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Reference Counting Basics" />

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
        <a href="features.gc.collecting-cycles.php">
          Collecting Cycles &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.gc.php">
          &laquo; Garbage Collection        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.gc.php'>Garbage Collection</a></li>      </ul>
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
            <option value='en/features.gc.refcounting-basics.php' selected="selected">English</option>
            <option value='de/features.gc.refcounting-basics.php'>German</option>
            <option value='es/features.gc.refcounting-basics.php'>Spanish</option>
            <option value='fr/features.gc.refcounting-basics.php'>French</option>
            <option value='it/features.gc.refcounting-basics.php'>Italian</option>
            <option value='ja/features.gc.refcounting-basics.php'>Japanese</option>
            <option value='pt_BR/features.gc.refcounting-basics.php'>Brazilian Portuguese</option>
            <option value='ru/features.gc.refcounting-basics.php'>Russian</option>
            <option value='tr/features.gc.refcounting-basics.php'>Turkish</option>
            <option value='uk/features.gc.refcounting-basics.php'>Ukrainian</option>
            <option value='zh/features.gc.refcounting-basics.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.gc.refcounting-basics" class="sect1">
   <h2 class="title">Reference Counting Basics</h2>
   <p class="para">
    A PHP variable is stored in a container called a &quot;zval&quot;. A zval container
    contains, besides the variable&#039;s type and value, two additional bits of
    information. The first is called &quot;is_ref&quot; and is a boolean value
    indicating whether or not the variable is part of a &quot;reference set&quot;. With
    this bit, PHP&#039;s engine knows how to differentiate between normal variables
    and references. Since PHP allows user-land references, as created by the
    &amp; operator, a zval container also has an internal reference counting
    mechanism to optimize memory usage. This second piece of additional
    information, called &quot;refcount&quot;, contains how many variable names (also
    called symbols) point to this one zval container. All symbols are stored in
    a symbol table, of which there is one per scope. There is a scope for the
    main script (i.e., the one requested through the browser), as well as one
    for every function or method.
   </p>
   <p class="para">
    A zval container is created when a new variable is created with a constant
    value, such as:
    <div class="example" id="example-565">
     <p><strong>Example #1 Creating a new zval container</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #DD0000">"new string"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    In this case, the new symbol name, <code class="literal">a</code>, is created in the current scope,
    and a new variable container is created with the type <span class="type"><a href="language.types.string.php" class="type string">string</a></span> and the value
    <code class="literal">new string</code>. The &quot;is_ref&quot; bit is by default set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> because no
    user-land reference has been created. The &quot;refcount&quot; is set to <code class="literal">1</code> as
    there is only one symbol that makes use of this variable container. Note
    that references (i.e. &quot;is_ref&quot; is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>) with &quot;refcount&quot; <code class="literal">1</code>, are
    treated as if they are not references (i.e. as &quot;is_ref&quot; was <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>). If you have <a href="http://xdebug.org/" class="link external">&raquo;&nbsp;Xdebug</a> installed, you can display this
    information by calling <span class="function"><strong>xdebug_debug_zval()</strong></span>.
   </p>
   <p class="para">
    <div class="example" id="example-566">
     <p><strong>Example #2 Displaying zval information</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #DD0000">"new string"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">xdebug_debug_zval</span><span style="color: #007700">(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
a: (refcount=1, is_ref=0)=&#039;new string&#039;
</pre></div>
     </div>
    </div>
   </p>
   <p class="para">
    Assigning this variable to another variable name will increase the refcount.
   </p>
   <p class="para">
    <div class="example" id="example-567">
     <p><strong>Example #3 Increasing refcount of a zval</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #DD0000">"new string"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">xdebug_debug_zval</span><span style="color: #007700">( </span><span style="color: #DD0000">'a' </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
a: (refcount=2, is_ref=0)=&#039;new string&#039;
</pre></div>
     </div>
    </div>
   </p>
   <p class="para">
    The refcount is <code class="literal">2</code> here, because the same variable container is linked
    with both <var class="varname">a</var> and <var class="varname">b</var>.
    PHP is smart enough not to copy the actual variable
    container when it is not necessary. Variable containers get destroyed when
    the &quot;refcount&quot; reaches zero. The &quot;refcount&quot; gets decreased by one when any
    symbol linked to the variable container leaves the scope (e.g. when the
    function ends) or when a symbol is unassigned (e.g. by calling <span class="function"><a href="function.unset.php" class="function">unset()</a></span>).
    The following example shows this:
   </p>
   <p class="para">
    <div class="example" id="example-568">
     <p><strong>Example #4 Decreasing zval refcount</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #DD0000">"new string"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">xdebug_debug_zval</span><span style="color: #007700">( </span><span style="color: #DD0000">'a' </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">xdebug_debug_zval</span><span style="color: #007700">( </span><span style="color: #DD0000">'a' </span><span style="color: #007700">);<br />unset( </span><span style="color: #0000BB">$c </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">xdebug_debug_zval</span><span style="color: #007700">( </span><span style="color: #DD0000">'a' </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
a: (refcount=3, is_ref=0)=&#039;new string&#039;
a: (refcount=2, is_ref=0)=&#039;new string&#039;
a: (refcount=1, is_ref=0)=&#039;new string&#039;
</pre></div>
     </div>
    </div>
   </p>
   <p class="para">
    If we now call <code class="literal">unset($a);</code>, the variable container, including the type
    and value, will be removed from memory.
   </p>

   <div class="sect2" id="features.gc.compound-types">
    <h3 class="title">Compound Types</h3>

    <p class="para">
     Things get a tad more complex with compound types such as <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s and
     <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s. As opposed to <span class="type">scalar</span> values, <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s
     and <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s store their
     properties in a symbol table of their own. This means that the following
     example creates three zval containers:
    </p>
    <p class="para">
     <div class="example" id="example-569">
      <p><strong>Example #5 Creating a <span class="type"><a href="language.types.array.php" class="type array">array</a></span> zval</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array( </span><span style="color: #DD0000">'meaning' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'life'</span><span style="color: #007700">, </span><span style="color: #DD0000">'number' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">42 </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">xdebug_debug_zval</span><span style="color: #007700">( </span><span style="color: #DD0000">'a' </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output
something similar to:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
a: (refcount=1, is_ref=0)=array (
   &#039;meaning&#039; =&gt; (refcount=1, is_ref=0)=&#039;life&#039;,
   &#039;number&#039; =&gt; (refcount=1, is_ref=0)=42
)
</pre></div>
      </div>
      <div class="example-contents"><p>Or graphically</p></div>
      <div class="mediaobject">
       
       <div class="imageobject">
        <img src="images/12f37b1c6963c1c5c18f30495416a197-simple-array.png" alt="Zvals for a simple array" width="593" height="143" />
       </div>
      </div>
     </div>
    </p>
    <p class="para">
     The three zval containers are: <var class="varname">a</var>, <var class="varname">meaning</var>, and <var class="varname">number</var>.
     Similar rules apply for increasing and decreasing &quot;refcounts&quot;. Below, we add another
     element to the array, and set its value to the contents of an already
     existing element:
    </p>
    <p class="para">
     <div class="example" id="example-570">
      <p><strong>Example #6 Adding already existing element to an array</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array( </span><span style="color: #DD0000">'meaning' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'life'</span><span style="color: #007700">, </span><span style="color: #DD0000">'number' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">42 </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'life'</span><span style="color: #007700">] = </span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'meaning'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">xdebug_debug_zval</span><span style="color: #007700">( </span><span style="color: #DD0000">'a' </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output
something similar to:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
a: (refcount=1, is_ref=0)=array (
   &#039;meaning&#039; =&gt; (refcount=2, is_ref=0)=&#039;life&#039;,
   &#039;number&#039; =&gt; (refcount=1, is_ref=0)=42,
   &#039;life&#039; =&gt; (refcount=2, is_ref=0)=&#039;life&#039;
)
</pre></div>
      </div>
      <div class="example-contents"><p>Or graphically</p></div>
      <div class="mediaobject">
       
       <div class="imageobject">
        <img src="images/12f37b1c6963c1c5c18f30495416a197-simple-array2.png" alt="Zvals for a simple array with a reference" width="593" height="143" />
       </div>
      </div>
     </div>
    </p>
    <p class="para">
     From the above Xdebug output, we see that both the old and new array
     elements now point to a zval container whose &quot;refcount&quot; is
     <code class="literal">2</code>. Although Xdebug&#039;s output shows two zval containers
     with value <code class="literal">&#039;life&#039;</code>, they are the same one. The
     <span class="function"><strong>xdebug_debug_zval()</strong></span> function does not show this, but
     you could see it by also displaying the memory pointer.
    </p>
    <p class="para">
     Removing an element from the array is like removing a symbol from a scope.
     By doing so, the &quot;refcount&quot; of a container that an array element points to
     is decreased. Again, when the &quot;refcount&quot; reaches zero, the variable
     container is removed from memory.  Again, an example to show this:
    </p>
    <p class="para">
     <div class="example" id="example-571">
      <p><strong>Example #7 Removing an element from an array</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array( </span><span style="color: #DD0000">'meaning' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'life'</span><span style="color: #007700">, </span><span style="color: #DD0000">'number' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">42 </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'life'</span><span style="color: #007700">] = </span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'meaning'</span><span style="color: #007700">];<br />unset( </span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'meaning'</span><span style="color: #007700">], </span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'number'</span><span style="color: #007700">] );<br /></span><span style="color: #0000BB">xdebug_debug_zval</span><span style="color: #007700">( </span><span style="color: #DD0000">'a' </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output
something similar to:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
a: (refcount=1, is_ref=0)=array (
   &#039;life&#039; =&gt; (refcount=1, is_ref=0)=&#039;life&#039;
)
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     Now, things get interesting if we add the array itself as an element of
     the array, which we do in the next example, in which we also sneak in a
     reference operator, since otherwise PHP would create a copy:
    </p>
    <p class="para">
     <div class="example" id="example-572">
      <p><strong>Example #8 Adding the array as an element of itself</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array( </span><span style="color: #DD0000">'one' </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[] =&amp; </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">xdebug_debug_zval</span><span style="color: #007700">( </span><span style="color: #DD0000">'a' </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output
something similar to:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
a: (refcount=2, is_ref=1)=array (
   0 =&gt; (refcount=1, is_ref=0)=&#039;one&#039;,
   1 =&gt; (refcount=2, is_ref=1)=...
)
</pre></div>
      </div>
      <div class="example-contents"><p>Or graphically</p></div>
      <div class="mediaobject">
       
       <div class="imageobject">
        <img src="images/12f37b1c6963c1c5c18f30495416a197-loop-array.png" alt="Zvals for an array with a circular reference" width="533" height="144" />
       </div>
      </div>
     </div>
    </p>
    <p class="para">
     You can see that the array variable (<var class="varname">a</var>) as well as the second element
     (<var class="varname">1</var>) now point to a variable container that has a &quot;refcount&quot; of <code class="literal">2</code>. The
     &quot;...&quot; in the display above shows that there is recursion involved, which,
     of course, in this case means that the &quot;...&quot; points back to the original
     array.
    </p>
    <p class="para">
     Just like before, unsetting a variable removes the symbol, and the
     reference count of the variable container it points to is decreased by
     one. So, if we unset variable <var class="varname">$a</var> after running the above code, the
     reference count of the variable container that <var class="varname">$a</var> and element &quot;1&quot; point to
     gets decreased by one, from &quot;2&quot; to &quot;1&quot;. This can be represented as:
    </p>
    <p class="para">
     <div class="example" id="example-573">
      <p><strong>Example #9 Unsetting <var class="varname">$a</var></strong></p>
      <div class="example-contents screen">
<div class="cdata"><pre>
(refcount=1, is_ref=1)=array (
   0 =&gt; (refcount=1, is_ref=0)=&#039;one&#039;,
   1 =&gt; (refcount=1, is_ref=1)=...
)
</pre></div>
      </div>
      <div class="example-contents"><p>Or graphically</p></div>
      <div class="mediaobject">
       
       <div class="imageobject">
        <img src="images/12f37b1c6963c1c5c18f30495416a197-leak-array.png" alt="Zvals after removal of array with a circular reference demonstrating the memory leak" width="463" height="144" />
       </div>
      </div>
     </div>
    </p>
   </div>

   <div class="sect2" id="features.gc.cleanup-problems">
    <h3 class="title">Cleanup Problems</h3>
    <p class="para">
     Although there is no longer a symbol in any scope pointing to this
     structure, it cannot be cleaned up because the array element &quot;1&quot; still
     points to this same array. Because there is no external symbol pointing to
     it, there is no way for a user to clean up this structure; thus you get a
     memory leak. Fortunately, PHP will clean up this data structure at the end
     of the request, but before then, this is taking up valuable space in
     memory. This situation happens often if you&#039;re implementing parsing
     algorithms or other things where you have a child point back at a &quot;parent&quot;
     element. The same situation can also happen with objects of course, where
     it actually is more likely to occur, as objects are always implicitly used
     &quot;<a href="language.oop5.references.php" class="link">by reference</a>&quot;.
    </p>
    <p class="para">
     This might not be a problem if this only happens once or twice, but if
     there are thousands, or even millions, of these memory losses, this
     obviously starts being a problem. This is especially problematic in long
     running scripts, such as daemons where the request basically never ends,
     or in large sets of unit tests. The latter caused problems while
     running the unit tests for the Template component of the eZ Components
     library. In some cases, it would require over 2 GB of memory, which the
     test server didn&#039;t quite have.
    </p>
   </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/gc.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.gc.refcounting-basics%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.gc.refcounting-basics&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.gc.refcounting-basics.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116295">  <div class="votes">
    <div id="Vu116295">
    <a href="/manual/vote-note.php?id=116295&amp;page=features.gc.refcounting-basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116295">
    <a href="/manual/vote-note.php?id=116295&amp;page=features.gc.refcounting-basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116295" title="63% like this...">
    19
    </div>
  </div>
  <a href="#116295" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116295"> &para;</a><div class="date" title="2014-12-08 02:49"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116295">
<div class="phpcode"><code><span class="html">There seems to be no way to inspect the reference count of a specific class variable but you can view the reference count of all variables in the current class instance with xdebug_debug_zval('this');</span></code></div>
  </div>
 </div>
  <div class="note" id="122283">  <div class="votes">
    <div id="Vu122283">
    <a href="/manual/vote-note.php?id=122283&amp;page=features.gc.refcounting-basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122283">
    <a href="/manual/vote-note.php?id=122283&amp;page=features.gc.refcounting-basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122283" title="66% like this...">
    9
    </div>
  </div>
  <a href="#122283" class="name">
  <strong class="user"><em>shkarbatov at gmail dot com</em></strong></a><a class="genanchor" href="#122283"> &para;</a><div class="date" title="2018-01-18 11:05"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122283">
<div class="phpcode"><code><span class="html">Result of "Example #8 Adding the array itself as an element of it self" will be another for PHP7:<br /><br />a: (refcount=2, is_ref=1)=array (<br />    0 =&gt; (refcount=2, is_ref=0)='one',<br />    1 =&gt; (refcount=2, is_ref=1)=...<br />)<br /><br />insted of:<br />a: (refcount=2, is_ref=1)=array (<br />   0 =&gt; (refcount=1, is_ref=0)='one',<br />   1 =&gt; (refcount=2, is_ref=1)=...<br />)<br /><br />Internal value representation in PHP 7:<br /><a href="https://nikic.github.io/2015/05/05/Internal-value-representation-in-PHP-7-part-1.html" rel="nofollow" target="_blank">https://nikic.github.io/2015/05/05/Internal-value-representation-in-PHP-7-part-1.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="124544">  <div class="votes">
    <div id="Vu124544">
    <a href="/manual/vote-note.php?id=124544&amp;page=features.gc.refcounting-basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124544">
    <a href="/manual/vote-note.php?id=124544&amp;page=features.gc.refcounting-basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124544" title="64% like this...">
    7
    </div>
  </div>
  <a href="#124544" class="name">
  <strong class="user"><em>skymei at skymei dot cn</em></strong></a><a class="genanchor" href="#124544"> &para;</a><div class="date" title="2019-12-27 06:50"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124544">
<div class="phpcode"><code><span class="html">$a = 'new string';<br />$b = 1;<br />xdebug_debug_zval('a');<br />xdebug_debug_zval('b');<br /><br />ouputs with PHP 7.3.12 (cli) <br /><br />a: (interned, is_ref=0)='new string'<br />b: (refcount=0, is_ref=0)=1</span></code></div>
  </div>
 </div>
  <div class="note" id="116294">  <div class="votes">
    <div id="Vu116294">
    <a href="/manual/vote-note.php?id=116294&amp;page=features.gc.refcounting-basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116294">
    <a href="/manual/vote-note.php?id=116294&amp;page=features.gc.refcounting-basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116294" title="57% like this...">
    11
    </div>
  </div>
  <a href="#116294" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116294"> &para;</a><div class="date" title="2014-12-08 02:15"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116294">
<div class="phpcode"><code><span class="html">If a variable is not present in the current scope xdebug_debug_zval　will return null.</span></code></div>
  </div>
 </div>
  <div class="note" id="123601">  <div class="votes">
    <div id="Vu123601">
    <a href="/manual/vote-note.php?id=123601&amp;page=features.gc.refcounting-basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123601">
    <a href="/manual/vote-note.php?id=123601&amp;page=features.gc.refcounting-basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123601" title="57% like this...">
    3
    </div>
  </div>
  <a href="#123601" class="name">
  <strong class="user"><em>yuri1308960477 at gmail dot com</em></strong></a><a class="genanchor" href="#123601"> &para;</a><div class="date" title="2019-02-11 07:35"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123601">
<div class="phpcode"><code><span class="html">my php versoin : HP 7.1.25 (cli) (built: Dec  7 2018 08:20:45) ( NTS )<br /><br />$a = 'new string';<br />$b = 1;<br />xdebug_debug_zval('a');<br />xdebug_debug_zval('b');<br /><br />output:<br /><br />a: (refcount=2, is_ref=0)='new string'<br />b: (refcount=0, is_ref=0)=1<br /><br />if $a is a string value, 'refcount' equal 2 by defalut.</span></code></div>
  </div>
 </div>
  <div class="note" id="123776">  <div class="votes">
    <div id="Vu123776">
    <a href="/manual/vote-note.php?id=123776&amp;page=features.gc.refcounting-basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123776">
    <a href="/manual/vote-note.php?id=123776&amp;page=features.gc.refcounting-basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123776" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123776" class="name">
  <strong class="user"><em>chxt2011 at 163 dot com</em></strong></a><a class="genanchor" href="#123776"> &para;</a><div class="date" title="2019-04-15 03:44"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123776">
<div class="phpcode"><code><span class="html">my php version is PHP 7.1.6 (cli), when I run <br /><br />$a = 'new string';<br />$b = 1;<br />xdebug_debug_zval('a');<br />xdebug_debug_zval('b');<br /><br />it shows:<br />a: (refcount=0, is_ref=0)='new string'<br />b: (refcount=0, is_ref=0)=1</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.gc.refcounting-basics&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.gc.refcounting-basics.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.gc.php">Garbage Collection</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="features.gc.refcounting-basics.php" title="Reference Counting Basics">Reference Counting Basics</a>
                        </li>
                                                <li class="">
                            <a href="features.gc.collecting-cycles.php" title="Collecting Cycles">Collecting Cycles</a>
                        </li>
                                                <li class="">
                            <a href="features.gc.performance-considerations.php" title="Performance Considerations">Performance Considerations</a>
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
