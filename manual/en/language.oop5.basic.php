<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: The Basics - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.basic.php">
 <link rel="shorturl" href="https://www.php.net/oop5.basic">
 <link rel="alternate" href="https://www.php.net/oop5.basic" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/oop5.intro.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.properties.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.basic.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.basic.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.basic.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.basic.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.basic.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.basic.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.basic.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.basic.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.basic.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.basic.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.basic.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Basics" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: The Basics - Manual" />
<meta name="twitter:description" content="The Basics" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: The Basics - Manual" />
<meta itemprop="description" content="The Basics" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Basics" />

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
        <a href="language.oop5.properties.php">
          Properties &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oop5.intro.php">
          &laquo; Introduction        </a>
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
            <option value='en/language.oop5.basic.php' selected="selected">English</option>
            <option value='de/language.oop5.basic.php'>German</option>
            <option value='es/language.oop5.basic.php'>Spanish</option>
            <option value='fr/language.oop5.basic.php'>French</option>
            <option value='it/language.oop5.basic.php'>Italian</option>
            <option value='ja/language.oop5.basic.php'>Japanese</option>
            <option value='pt_BR/language.oop5.basic.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.basic.php'>Russian</option>
            <option value='tr/language.oop5.basic.php'>Turkish</option>
            <option value='uk/language.oop5.basic.php'>Ukrainian</option>
            <option value='zh/language.oop5.basic.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.basic" class="sect1">
  <h2 class="title">The Basics</h2>

  <div class="sect2" id="language.oop5.basic.class">
   <h3 class="title">class</h3>
   <p class="para">
    Basic class definitions begin with the
    keyword <code class="literal">class</code>, followed by a class name,
    followed by a pair of curly braces which enclose the definitions
    of the properties and methods belonging to the class.
   </p>
   <p class="para">
    The class name can be any valid label, provided it is not a
    PHP <a href="reserved.php" class="link">reserved word</a>.
    As of PHP 8.4.0, using a single underscore <code class="literal">_</code> as a
    class name is deprecated.
    A valid class name starts with a letter or underscore,
    followed by any number of letters, numbers, or underscores.
    As a regular expression, it would be expressed thus:
    <code class="code">^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</code>.
   </p>
   <p class="para">
    A class may contain its
    own <a href="language.oop5.constants.php" class="link">constants</a>, <a href="language.oop5.properties.php" class="link">variables</a>
    (called &quot;properties&quot;), and functions (called &quot;methods&quot;).
   </p>
   <div class="example" id="example-251">
    <p><strong>Example #1 Simple Class definition</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">SimpleClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// property declaration<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">$var </span><span style="color: #007700">= </span><span style="color: #DD0000">'a default value'</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// method declaration<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">displayVar</span><span style="color: #007700">() {<br />        echo </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="para">
    The pseudo-variable <var class="varname">$this</var> is available when a
    method is called from within an object context.
    <var class="varname">$this</var> is the value of the calling object.
   </p>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
     Calling a non-static method statically throws an
     <span class="classname"><a href="class.error.php" class="classname">Error</a></span>.
     Prior to PHP 8.0.0, this would generate a deprecation notice,
     and <var class="varname">$this</var> would be undefined.
    </p>
    <div class="example" id="language.oop5.basic.class.this">
     <p><strong>Example #2 Some examples of the <var class="varname">$this</var> pseudo-variable</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />    {<br />        if (isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">)) {<br />            echo </span><span style="color: #DD0000">'$this is defined ('</span><span style="color: #007700">;<br />            echo </span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />            echo </span><span style="color: #DD0000">")\n"</span><span style="color: #007700">;<br />        } else {<br />            echo </span><span style="color: #DD0000">"\$this is not defined.\n"</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">B<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">bar</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= new </span><span style="color: #0000BB">B</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">bar</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>Output of the above example in PHP 7:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
$this is defined (A)

Deprecated: Non-static method A::foo() should not be called statically in %s  on line 27
$this is not defined.

Deprecated: Non-static method A::foo() should not be called statically in %s  on line 20
$this is not defined.

Deprecated: Non-static method B::bar() should not be called statically in %s  on line 32

Deprecated: Non-static method A::foo() should not be called statically in %s  on line 20
$this is not defined.
</pre></div>
     </div>
     <div class="example-contents"><p>Output of the above example in PHP 8:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
$this is defined (A)

Fatal error: Uncaught Error: Non-static method A::foo() cannot be called statically in %s :27
Stack trace:
#0 {main}
  thrown in %s  on line 27
</pre></div>
     </div>
    </div>
   </div>

   <div class="sect3" id="language.oop5.basic.class.readonly">
    <h4 class="title">Readonly classes</h4>
    <p class="para">
     As of PHP 8.2.0, a class can be marked with the
     <span class="modifier">readonly</span> modifier.
     Marking a class as <span class="modifier">readonly</span> will add the
     <a href="language.oop5.properties.php#language.oop5.properties.readonly-properties" class="link"><span class="modifier">readonly</span> modifier</a>
     to every declared property, and prevent the creation of
     <a href="language.oop5.properties.php#language.oop5.properties.dynamic-properties" class="link">dynamic properties</a>.
     Moreover, it is impossible to add support for them by using the
     <span class="classname"><a href="class.allowdynamicproperties.php" class="classname">AllowDynamicProperties</a></span> attribute. Attempting to do so
     will trigger a compile-time error.
    </p>
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">#[</span><span style="color: #0000BB">\AllowDynamicProperties</span><span style="color: #007700">]<br />readonly class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{<br />}<br /><br /></span><span style="color: #FF8000">// Fatal error: Cannot apply #[AllowDynamicProperties] to readonly class Foo<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <p class="para">
     As neither untyped nor static properties can be marked with the
     <code class="literal">readonly</code> modifier, readonly classes cannot declare
     them either:
    </p>
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">readonly class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$bar</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Fatal error: Readonly property Foo::$bar must have type<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">readonly class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public static </span><span style="color: #0000BB">int $bar</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Fatal error: Readonly class Foo cannot declare static properties<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    <p class="para">
     A <span class="modifier">readonly</span> class can be
     <a href="language.oop5.basic.php#language.oop5.basic.extends" class="link">extended</a>
     if, and only if, the child class is also a
     <span class="modifier">readonly</span> class.
    </p>
   </div>
  </div>

  <div class="sect2" id="language.oop5.basic.new">
   <h3 class="title">new</h3>
   <p class="para">
    To create an instance of a class, the <code class="literal">new</code> keyword must
    be used.  An object will always be created unless the object has a
    <a href="language.oop5.decon.php" class="link">constructor</a> defined that throws an
    <a href="language.exceptions.php" class="link">exception</a> on error. Classes
    should be defined before instantiation (and in some cases this is a
    requirement).
   </p>
   <p class="para">
    If a variable containing a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> with the name of a class is used with
    <code class="literal">new</code>, a new instance of that class will be created. If
    the class is in a namespace, its fully qualified name must be used when
    doing this.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     If there are no arguments to be passed to the class&#039;s constructor,
     parentheses after the class name may be omitted.
    </p>
   </p></blockquote>

   <div class="example" id="example-253">
    <p><strong>Example #3 Creating an instance</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">SimpleClass </span><span style="color: #007700">{<br />}<br /><br /></span><span style="color: #0000BB">$instance </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleClass</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$instance</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// This can also be done with a variable:<br /></span><span style="color: #0000BB">$className </span><span style="color: #007700">= </span><span style="color: #DD0000">'SimpleClass'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$instance </span><span style="color: #007700">= new </span><span style="color: #0000BB">$className</span><span style="color: #007700">(); </span><span style="color: #FF8000">// new SimpleClass()<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$instance</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="para">
    As of PHP 8.0.0, using <code class="literal">new</code> with arbitrary expressions
    is supported. This allows more complex instantiation if the expression
    produces a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>. The expressions must be wrapped in parentheses.
   </p>
   <div class="example" id="example-254">
    <p><strong>Example #4 Creating an instance using an arbitrary expression</strong></p>
    <div class="example-contents"><p>
     In the given example we show multiple examples of valid arbitrary expressions that produce a class name.
     This shows a call to a function, string concatenation, and the <strong><code>::class</code></strong> constant.
    </p></div>
    <div class="example-contents">
     <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">ClassA </span><span style="color: #007700">extends </span><span style="color: #0000BB">\stdClass </span><span style="color: #007700">{}<br />class </span><span style="color: #0000BB">ClassB </span><span style="color: #007700">extends </span><span style="color: #0000BB">\stdClass </span><span style="color: #007700">{}<br />class </span><span style="color: #0000BB">ClassC </span><span style="color: #007700">extends </span><span style="color: #0000BB">ClassB </span><span style="color: #007700">{}<br />class </span><span style="color: #0000BB">ClassD </span><span style="color: #007700">extends </span><span style="color: #0000BB">ClassA </span><span style="color: #007700">{}<br /><br />function </span><span style="color: #0000BB">getSomeClass</span><span style="color: #007700">(): </span><span style="color: #0000BB">string<br /></span><span style="color: #007700">{<br />    return </span><span style="color: #DD0000">'ClassA'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new (</span><span style="color: #0000BB">getSomeClass</span><span style="color: #007700">()));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new (</span><span style="color: #DD0000">'Class' </span><span style="color: #007700">. </span><span style="color: #DD0000">'B'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new (</span><span style="color: #DD0000">'Class' </span><span style="color: #007700">. </span><span style="color: #DD0000">'C'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new (</span><span style="color: #0000BB">ClassD</span><span style="color: #007700">::class));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example in PHP 8:</p></div>
    <div class="example-contents screen">
     <div class="annotation-interactive cdata"><pre>
object(ClassA)#1 (0) {
}
object(ClassB)#1 (0) {
}
object(ClassC)#1 (0) {
}
object(ClassD)#1 (0) {
}

</pre></div>
    </div>
   </div>
   <p class="para">
    In the class context, it is possible to create a new object by
    <code class="literal">new self</code> and <code class="literal">new parent</code>.
   </p>
   <p class="para">
    When assigning an already created instance of a class to a new variable, the new variable
    will access the same instance as the object that was assigned. This
    behaviour is the same when passing instances to a function. A copy
    of an already created object can be made by
    <a href="language.oop5.cloning.php" class="link">cloning</a> it.
   </p>
   <div class="example" id="example-255">
    <p><strong>Example #5 Object Assignment</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">SimpleClass </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $var</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$instance </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleClass</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$assigned   </span><span style="color: #007700">=  </span><span style="color: #0000BB">$instance</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$reference  </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$instance</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$instance</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var </span><span style="color: #007700">= </span><span style="color: #DD0000">'$assigned will have this value'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$instance </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">; </span><span style="color: #FF8000">// $instance and $reference become null<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$instance</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$reference</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$assigned</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
NULL
NULL
object(SimpleClass)#1 (1) {
   [&quot;var&quot;]=&gt;
     string(30) &quot;$assigned will have this value&quot;
}
</pre></div>
    </div>
   </div>
   <p class="para">
    It&#039;s possible to create instances of an object in a couple of ways:
   </p>
   <div class="example" id="example-256">
    <p><strong>Example #6 Creating new objects</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test<br /></span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">getNew</span><span style="color: #007700">()<br />    {<br />        return new static();<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Child </span><span style="color: #007700">extends </span><span style="color: #0000BB">Test </span><span style="color: #007700">{}<br /><br /></span><span style="color: #0000BB">$obj1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test</span><span style="color: #007700">(); </span><span style="color: #FF8000">// By the class name<br /></span><span style="color: #0000BB">$obj2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">$obj1</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Through the variable containing an object<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj1 </span><span style="color: #007700">!== </span><span style="color: #0000BB">$obj2</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$obj3 </span><span style="color: #007700">= </span><span style="color: #0000BB">Test</span><span style="color: #007700">::</span><span style="color: #0000BB">getNew</span><span style="color: #007700">(); </span><span style="color: #FF8000">// By the class method<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj3 </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">Test</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$obj4 </span><span style="color: #007700">= </span><span style="color: #0000BB">Child</span><span style="color: #007700">::</span><span style="color: #0000BB">getNew</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Through a child class method<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj4 </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">Child</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
bool(true)
bool(true)
</pre></div>
    </div>
   </div>

   <p class="para">
    It is possible to access a member of a newly created object
    in a single expression:
   </p>
   <div class="example" id="example-257">
    <p><strong>Example #7 Access member of newly created object</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo (new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">())-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// surrounding parentheses are optional as of PHP 8.4.0<br /></span><span style="color: #007700">echo new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
2025
2025
</pre></div>
    </div>
   </div>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Prior to PHP 7.1, the arguments are not evaluated if there is no constructor
     function defined.
    </span>
   </p></blockquote>
  </div>
  
  <div class="sect2" id="language.oop5.basic.properties-methods">
   <h3 class="title">Properties and methods</h3>
   <p class="para">
    Class properties and methods live in separate &quot;namespaces&quot;, so it is
    possible to have a property and a method with the same name. Referring to
    both a property and a method has the same notation, and whether a property
    will be accessed or a method will be called, solely depends on the context,
    i.e. whether the usage is a variable access or a function call.
   </p>
   <div class="example" id="example-258">
    <p><strong>Example #8 Property access vs. method call</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'property'</span><span style="color: #007700">;<br />    <br />    public function </span><span style="color: #0000BB">bar</span><span style="color: #007700">() {<br />        return </span><span style="color: #DD0000">'method'</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
property
method
</pre></div>
    </div>
   </div>
   <p class="para">
    That means that calling an <a href="functions.anonymous.php" class="link">anonymous
    function</a> which has been assigned to a property is not directly
    possible. Instead the property has to be assigned to a variable first, for
    instance. It is possible to call such a property directly
    by enclosing it in parentheses.
   </p>
   <div class="example" id="example-259">
    <p><strong>Example #9 Calling an anonymous function stored in a property</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$bar</span><span style="color: #007700">;<br />    <br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar </span><span style="color: #007700">= function() {<br />            return </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br />        };<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br /><br />echo (</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar</span><span style="color: #007700">)(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
42
</pre></div>
    </div>
   </div>
  </div>

  <div class="sect2" id="language.oop5.basic.extends">
   
   
   <h3 class="title">extends</h3>
   <p class="para">
    A class can inherit the constants, methods, and properties of another class by
    using the keyword <code class="literal">extends</code> in the class
    declaration. It is not possible to extend multiple classes; a
    class can only inherit from one base class.
   </p>
   <p class="para">
    The inherited constants, methods, and properties can be overridden by
    redeclaring them with the same name defined in the parent
    class. However, if the parent class has defined a method or constant
    as <a href="language.oop5.final.php" class="link">final</a>,
    they may not be overridden.  It is possible to access the overridden
    methods or static properties by referencing them
    with <a href="language.oop5.paamayim-nekudotayim.php" class="link">parent::</a>.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     As of PHP 8.1.0, constants may be declared as final.
    </span>
   </p></blockquote>
   <div class="example" id="example-260">
    <p><strong>Example #10 Simple Class Inheritance</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">SimpleClass<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">displayVar</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">"Parent class\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">ExtendClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">SimpleClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Redefine the parent method<br />    </span><span style="color: #007700">function </span><span style="color: #0000BB">displayVar</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">"Extending class\n"</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">displayVar</span><span style="color: #007700">();<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$extended </span><span style="color: #007700">= new </span><span style="color: #0000BB">ExtendClass</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$extended</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayVar</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Extending class
a default value
</pre></div>
    </div>
   </div>

   <div class="sect3" id="language.oop.lsp">
    <h4 class="title">Signature compatibility rules</h4>
    <p class="para">
     When overriding a method, its signature must be compatible with the parent
     method. Otherwise, a fatal error is emitted, or, prior to PHP 8.0.0, an
     <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level error is generated.
     A signature is compatible if it respects the
     <a href="language.oop5.variance.php" class="link">variance</a> rules, makes a
     mandatory parameter optional, adds only optional new parameters and
     doesn&#039;t restrict but only relaxes the visibility.
     This is known as the Liskov Substitution Principle, or LSP for short.
     The <a href="language.oop5.decon.php#language.oop5.decon.constructor" class="link">constructor</a>,
     and <code class="literal">private</code> methods are exempt from these signature
     compatibility rules, and thus won&#039;t emit a fatal error in case of a
     signature mismatch.
    </p>
    <div class="example" id="example-261">
     <p><strong>Example #11 Compatible child methods</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Base<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">int $a</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"Valid\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Extend1 </span><span style="color: #007700">extends </span><span style="color: #0000BB">Base<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">int $a </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Extend2 </span><span style="color: #007700">extends </span><span style="color: #0000BB">Base<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">int $a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$extended1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Extend1</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$extended1</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$extended2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Extend2</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$extended2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Valid
Valid
</pre></div>
     </div>
    </div>

    <p class="para">
     The following examples demonstrate that a child method which removes a parameter, or makes an optional
     parameter mandatory, is not compatible with the parent method.
    </p>
    <div class="example" id="example-262">
     <p><strong>Example #12 Fatal error when a child method removes a parameter</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Base<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">int $a </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"Valid\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Extend </span><span style="color: #007700">extends </span><span style="color: #0000BB">Base<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />    }<br />}</span></span></code></div>
     </div>

     <div class="example-contents"><p>Output of the above example in PHP 8 is similar to:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Fatal error: Declaration of Extend::foo() must be compatible with Base::foo(int $a = 5) in /in/evtlq on line 13
</pre></div>
     </div>
    </div>
    <div class="example" id="example-263">
     <p><strong>Example #13 Fatal error when a child method makes an optional parameter mandatory</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Base<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">int $a </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"Valid\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Extend </span><span style="color: #007700">extends </span><span style="color: #0000BB">Base<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">int $a</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br />    }<br />}</span></span></code></div>
     </div>

     <div class="example-contents"><p>Output of the above example in PHP 8 is similar to:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Fatal error: Declaration of Extend::foo(int $a) must be compatible with Base::foo(int $a = 5) in /in/qJXVC on line 13
</pre></div>
     </div>
    </div>

    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      Renaming a method&#039;s parameter in a child class is not a signature
      incompatibility. However, this is discouraged as it will result in a
      runtime <span class="classname"><a href="class.error.php" class="classname">Error</a></span> if
      <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>
      are used.
     </p>
     <div class="example" id="example-264">
      <p><strong>Example #14 Error when using named arguments and parameters were renamed in a child class</strong></p>
      <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">, </span><span style="color: #0000BB">$bar</span><span style="color: #007700">) {}<br />}<br /><br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {}<br />}<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">B</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Pass parameters according to A::test() contract<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">foo</span><span style="color: #007700">: </span><span style="color: #DD0000">"foo"</span><span style="color: #007700">, </span><span style="color: #0000BB">bar</span><span style="color: #007700">: </span><span style="color: #DD0000">"bar"</span><span style="color: #007700">); </span><span style="color: #FF8000">// ERROR!</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output
something similar to:</p></div>
      <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Fatal error: Uncaught Error: Unknown named parameter $foo in /in/XaaeN:14
Stack trace:
#0 {main}
  thrown in /in/XaaeN on line 14
</pre></div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <div class="sect2" id="language.oop5.basic.class.class">
   <h3 class="title">::class</h3>

   <p class="para">
    The <code class="literal">class</code> keyword is also used for class
    name resolution.
    To obtain the fully qualified name of a class <code class="literal">ClassName</code>
    use <code class="literal">ClassName::class</code>. This is particularly useful with
    <a href="language.namespaces.php" class="link">namespaced</a> classes.
   </p>
   <p class="para">
    <div class="example" id="language.oop5.basic.class.class.name">
     <p><strong>Example #15 Class name resolution</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">NS </span><span style="color: #007700">{<br />    class </span><span style="color: #0000BB">ClassName </span><span style="color: #007700">{<br />    }<br />    <br />    echo </span><span style="color: #0000BB">ClassName</span><span style="color: #007700">::class;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
NS\ClassName
</pre></div>
     </div>
    </div>
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">The class name resolution using <code class="literal">::class</code> is a
     compile time transformation. That means at the time the class name string
     is created no autoloading has happened yet. As a consequence, class names
     are expanded even if the class does not exist. No error is issued in
     that case.
    </p>
    <div class="example" id="language.oop5.basic.class.class.fail">
     <p><strong>Example #16 Missing class name resolution</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">print </span><span style="color: #0000BB">Does\Not\Exist</span><span style="color: #007700">::class;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Does\Not\Exist
</pre></div>
     </div>
    </div>
   </p></blockquote>
   <p class="para">
    As of PHP 8.0.0, <code class="literal">::class</code> may also be used on
    objects. This resolution happens at runtime, not compile time. Its effect is
    the same as calling <span class="function"><a href="function.get-class.php" class="function">get_class()</a></span> on the object.
   </p>
   <div class="example" id="language.oop5.basic.class.class.object">
    <p><strong>Example #17 Object name resolution</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">NS </span><span style="color: #007700">{<br />    class </span><span style="color: #0000BB">ClassName </span><span style="color: #007700">{<br />    }<br /><br />    </span><span style="color: #0000BB">$c </span><span style="color: #007700">= new </span><span style="color: #0000BB">ClassName</span><span style="color: #007700">();<br />    print </span><span style="color: #0000BB">$c</span><span style="color: #007700">::class;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
NS\ClassName
</pre></div>
    </div>
   </div>
  </div>
 <div class="sect2" id="language.oop5.basic.nullsafe">
  <h3 class="title">Nullsafe methods and properties</h3>
  <p class="para">
   As of PHP 8.0.0, properties and methods may also be accessed with the
   &quot;nullsafe&quot; operator instead: <code class="literal">?-&gt;</code>. The nullsafe operator
   works the same as property or method access as above, except that if the
   object being dereferenced is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> then <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
   will be returned rather than an exception thrown. If the dereference is part of a
   chain, the rest of the chain is skipped.
  </p>
  <p class="para">
   The effect is similar to wrapping each access in an <span class="function"><a href="function.is-null.php" class="function">is_null()</a></span>
   check first, but more compact.
  </p>
  <p class="para">
   <div class="example" id="example-268">
    <p><strong>Example #18 Nullsafe Operator</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// As of PHP 8.0.0, this line:<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$repository</span><span style="color: #007700">?-&gt;</span><span style="color: #0000BB">getUser</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">)?-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Is equivalent to the following code block:<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$repository</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />} else {<br />    </span><span style="color: #0000BB">$user </span><span style="color: #007700">= </span><span style="color: #0000BB">$repository</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUser</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">);<br />    if (</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />    } else {<br />        </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The nullsafe operator is best used when null is considered a valid and expected
    possible value for a property or method return. For indicating an error,
    a thrown exception is preferable.
   </p>
  </p></blockquote>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/basic.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.basic%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.basic&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.basic.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79856">  <div class="votes">
    <div id="Vu79856">
    <a href="/manual/vote-note.php?id=79856&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79856">
    <a href="/manual/vote-note.php?id=79856&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79856" title="74% like this...">
    654
    </div>
  </div>
  <a href="#79856" class="name">
  <strong class="user"><em>aaron at thatone dot com</em></strong></a><a class="genanchor" href="#79856"> &para;</a><div class="date" title="2007-12-15 06:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79856">
<div class="phpcode"><code><span class="html">I was confused at first about object assignment, because it's not quite the same as normal assignment or assignment by reference. But I think I've figured out what's going on.<br /><br />First, think of variables in PHP as data slots. Each one is a name that points to a data slot that can hold a value that is one of the basic data types: a number, a string, a boolean, etc. When you create a reference, you are making a second name that points at the same data slot. When you assign one variable to another, you are copying the contents of one data slot to another data slot.<br /><br />Now, the trick is that object instances are not like the basic data types. They cannot be held in the data slots directly. Instead, an object's "handle" goes in the data slot. This is an identifier that points at one particular instance of an obect. So, the object handle, although not directly visible to the programmer, is one of the basic datatypes. <br /><br />What makes this tricky is that when you take a variable which holds an object handle, and you assign it to another variable, that other variable gets a copy of the same object handle. This means that both variables can change the state of the same object instance. But they are not references, so if one of the variables is assigned a new value, it does not affect the other variable.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Assignment of an object<br /></span><span class="keyword">Class </span><span class="default">Object</span><span class="keyword">{<br />   public </span><span class="default">$foo</span><span class="keyword">=</span><span class="string">"bar"</span><span class="keyword">;<br />};<br /><br /></span><span class="default">$objectVar </span><span class="keyword">= new </span><span class="default">Object</span><span class="keyword">();<br /></span><span class="default">$reference </span><span class="keyword">=&amp; </span><span class="default">$objectVar</span><span class="keyword">;<br /></span><span class="default">$assignment </span><span class="keyword">= </span><span class="default">$objectVar<br /><br /></span><span class="comment">//<br />// $objectVar ---&gt;+---------+<br />//                |(handle1)----+<br />// $reference ---&gt;+---------+   |<br />//                              |<br />//                +---------+   |<br />// $assignment --&gt;|(handle1)----+<br />//                +---------+   |<br />//                              |<br />//                              v<br />//                  Object(1):foo="bar"<br />//<br /></span><span class="default">?&gt;<br /></span><br />$assignment has a different data slot from $objectVar, but its data slot holds a handle to the same object. This makes it behave in some ways like a reference. If you use the variable $objectVar to change the state of the Object instance, those changes also show up under $assignment, because it is pointing at that same Object instance.<br /><br /><span class="default">&lt;?php<br />$objectVar</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="string">"qux"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$objectVar </span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$reference </span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$assignment </span><span class="keyword">);<br /><br /></span><span class="comment">//<br />// $objectVar ---&gt;+---------+<br />//                |(handle1)----+<br />// $reference ---&gt;+---------+   |<br />//                              |<br />//                +---------+   |<br />// $assignment --&gt;|(handle1)----+<br />//                +---------+   |<br />//                              |<br />//                              v<br />//                  Object(1):foo="qux"<br />//<br /></span><span class="default">?&gt;<br /></span><br />But it is not exactly the same as a reference. If you null out $objectVar, you replace the handle in its data slot with NULL. This means that $reference, which points at the same data slot, will also be NULL. But $assignment, which is a different data slot, will still hold its copy of the handle to the Object instance, so it will not be NULL.<br /><br /><span class="default">&lt;?php<br />$objectVar </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$objectVar</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$reference</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$assignment</span><span class="keyword">);<br /><br /></span><span class="comment">//<br />// $objectVar ---&gt;+---------+<br />//                |  NULL   | <br />// $reference ---&gt;+---------+<br />//                           <br />//                +---------+<br />// $assignment --&gt;|(handle1)----+<br />//                +---------+   |<br />//                              |<br />//                              v<br />//                  Object(1):foo="qux"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120909">  <div class="votes">
    <div id="Vu120909">
    <a href="/manual/vote-note.php?id=120909&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120909">
    <a href="/manual/vote-note.php?id=120909&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120909" title="74% like this...">
    90
    </div>
  </div>
  <a href="#120909" class="name">
  <strong class="user"><em>kStarbe at gmail point com</em></strong></a><a class="genanchor" href="#120909"> &para;</a><div class="date" title="2017-03-30 07:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120909">
<div class="phpcode"><code><span class="html">You start using :: in second example although the static concept has not been explained. This is not easy to discover when you are starting from the basics.</span></code></div>
  </div>
 </div>
  <div class="note" id="100314">  <div class="votes">
    <div id="Vu100314">
    <a href="/manual/vote-note.php?id=100314&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100314">
    <a href="/manual/vote-note.php?id=100314&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100314" title="62% like this...">
    131
    </div>
  </div>
  <a href="#100314" class="name">
  <strong class="user"><em>Doug</em></strong></a><a class="genanchor" href="#100314"> &para;</a><div class="date" title="2010-10-07 07:29"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100314">
<div class="phpcode"><code><span class="html">What is the difference between  $this  and  self ?<br /><br />Inside a class definition, $this refers to the current object, while  self  refers to the current class.<br /><br />It is necessary to refer to a class element using  self ,<br />and refer to an object element using  $this .<br />Note also how an object variable must be preceded by a keyword in its definition.<br /><br />The following example illustrates a few cases:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Classy </span><span class="keyword">{<br /><br />const       </span><span class="default">STAT </span><span class="keyword">= </span><span class="string">'S' </span><span class="keyword">; </span><span class="comment">// no dollar sign for constants (they are always static)<br /></span><span class="keyword">static     </span><span class="default">$stat </span><span class="keyword">= </span><span class="string">'Static' </span><span class="keyword">;<br />public     </span><span class="default">$publ </span><span class="keyword">= </span><span class="string">'Public' </span><span class="keyword">;<br />private    </span><span class="default">$priv </span><span class="keyword">= </span><span class="string">'Private' </span><span class="keyword">;<br />protected  </span><span class="default">$prot </span><span class="keyword">= </span><span class="string">'Protected' </span><span class="keyword">;<br /><br />function </span><span class="default">__construct</span><span class="keyword">( ){  }<br /><br />public function </span><span class="default">showMe</span><span class="keyword">( ){<br />    print </span><span class="string">'&lt;br&gt; self::STAT: '  </span><span class="keyword">.  </span><span class="default">self</span><span class="keyword">::</span><span class="default">STAT </span><span class="keyword">; </span><span class="comment">// refer to a (static) constant like this<br />    </span><span class="keyword">print </span><span class="string">'&lt;br&gt; self::$stat: ' </span><span class="keyword">. </span><span class="default">self</span><span class="keyword">::</span><span class="default">$stat </span><span class="keyword">; </span><span class="comment">// static variable<br />    </span><span class="keyword">print </span><span class="string">'&lt;br&gt;$this-&gt;stat: '  </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stat </span><span class="keyword">; </span><span class="comment">// legal, but not what you might think: empty result<br />    </span><span class="keyword">print </span><span class="string">'&lt;br&gt;$this-&gt;publ: '  </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">publ </span><span class="keyword">; </span><span class="comment">// refer to an object variable like this<br />    </span><span class="keyword">print </span><span class="string">'&lt;br&gt;' </span><span class="keyword">;<br />}<br />}<br /></span><span class="default">$me </span><span class="keyword">= new </span><span class="default">Classy</span><span class="keyword">( ) ;<br /></span><span class="default">$me</span><span class="keyword">-&gt;</span><span class="default">showMe</span><span class="keyword">( ) ;<br /><br /></span><span class="comment">/* Produces this output:<br />self::STAT: S<br />self::$stat: Static<br />$this-&gt;stat:<br />$this-&gt;publ: Public<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126640">  <div class="votes">
    <div id="Vu126640">
    <a href="/manual/vote-note.php?id=126640&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126640">
    <a href="/manual/vote-note.php?id=126640&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126640" title="66% like this...">
    8
    </div>
  </div>
  <a href="#126640" class="name">
  <strong class="user"><em>johannes dot kingma at gmail dot com</em></strong></a><a class="genanchor" href="#126640"> &para;</a><div class="date" title="2021-11-25 11:29"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126640">
<div class="phpcode"><code><span class="html">BEWARE! <br /><br />Like Hayley Watson pointed out class names are not case sensitive. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo</span><span class="keyword">{}<br />class </span><span class="default">foo</span><span class="keyword">{} </span><span class="comment">// Fatal error: Cannot declare class foo, because the name is already in use<br /></span><span class="default">?&gt;<br /></span>As well as<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">BAR</span><span class="keyword">{}<br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">Bar</span><span class="keyword">();<br />echo </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">);<br /></span><span class="default">?&gt;</span> <br /><br />Is perfectly fine and will return 'BAR'.<br /><br />This has implications on autoloading classes though. The standard spl_autoload function will strtolower the class name to cope with case in-sensitiveness and thus the class BAR can only be found if the file name is bar.php (or another variety if an extension was registered with spl_autoload_extensions(); ) not BAR.php for a case sensitive file and operating system like linux. Windows file system is case sensitive but the OS is not  and there for autoloading BAR.php will work.</span></code></div>
  </div>
 </div>
  <div class="note" id="85220">  <div class="votes">
    <div id="Vu85220">
    <a href="/manual/vote-note.php?id=85220&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85220">
    <a href="/manual/vote-note.php?id=85220&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85220" title="62% like this...">
    72
    </div>
  </div>
  <a href="#85220" class="name">
  <strong class="user"><em>wbcarts at juno dot com</em></strong></a><a class="genanchor" href="#85220"> &para;</a><div class="date" title="2008-08-20 06:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85220">
<div class="phpcode"><code><span class="html">CLASSES and OBJECTS that represent the "Ideal World"<br /><br />Wouldn't it be great to get the lawn mowed by saying $son-&gt;mowLawn()? Assuming the function mowLawn() is defined, and you have a son that doesn't throw errors, the lawn will be mowed. <br /><br />In the following example; let objects of type Line3D measure their own length in 3-dimensional space. Why should I or PHP have to provide another method from outside this class to calculate length, when the class itself holds all the neccessary data and has the education to make the calculation for itself?<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br /> * Point3D.php<br /> *<br /> * Represents one locaton or position in 3-dimensional space<br /> * using an (x, y, z) coordinate system.<br /> */<br /></span><span class="keyword">class </span><span class="default">Point3D<br /></span><span class="keyword">{<br />    public </span><span class="default">$x</span><span class="keyword">;<br />    public </span><span class="default">$y</span><span class="keyword">;<br />    public </span><span class="default">$z</span><span class="keyword">;                  </span><span class="comment">// the x coordinate of this Point.<br /><br />    /*<br />     * use the x and y variables inherited from Point.php.<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$xCoord</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$yCoord</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$zCoord</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">= </span><span class="default">$xCoord</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y </span><span class="keyword">= </span><span class="default">$yCoord</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">z </span><span class="keyword">= </span><span class="default">$zCoord</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/*<br />     * the (String) representation of this Point as "Point3D(x, y, z)".<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__toString</span><span class="keyword">()<br />    {<br />        return </span><span class="string">'Point3D(x=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">. </span><span class="string">', y=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y </span><span class="keyword">. </span><span class="string">', z=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">z </span><span class="keyword">. </span><span class="string">')'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">/*<br /> * Line3D.php<br /> *<br /> * Represents one Line in 3-dimensional space using two Point3D objects.<br /> */<br /></span><span class="keyword">class </span><span class="default">Line3D<br /></span><span class="keyword">{<br />    </span><span class="default">$start</span><span class="keyword">;<br />    </span><span class="default">$end</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$xCoord1</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$yCoord1</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$zCoord1</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$xCoord2</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">, </span><span class="default">$yCoord2</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">, </span><span class="default">$zCoord2</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start </span><span class="keyword">= new </span><span class="default">Point3D</span><span class="keyword">(</span><span class="default">$xCoord1</span><span class="keyword">, </span><span class="default">$yCoord1</span><span class="keyword">, </span><span class="default">$zCoord1</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">end </span><span class="keyword">= new </span><span class="default">Point3D</span><span class="keyword">(</span><span class="default">$xCoord2</span><span class="keyword">, </span><span class="default">$yCoord2</span><span class="keyword">, </span><span class="default">$zCoord2</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/*<br />     * calculate the length of this Line in 3-dimensional space.<br />     */ <br />    </span><span class="keyword">public function </span><span class="default">getLength</span><span class="keyword">()<br />    {<br />        return </span><span class="default">sqrt</span><span class="keyword">(<br />            </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">- </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">end</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) +<br />            </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">-&gt;</span><span class="default">y </span><span class="keyword">- </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">end</span><span class="keyword">-&gt;</span><span class="default">y</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) +<br />            </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">-&gt;</span><span class="default">z </span><span class="keyword">- </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">end</span><span class="keyword">-&gt;</span><span class="default">z</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)<br />        );<br />    }<br /><br />    </span><span class="comment">/*<br />     * The (String) representation of this Line as "Line3D[start, end, length]".<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__toString</span><span class="keyword">()<br />    {<br />        return </span><span class="string">'Line3D[start=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start </span><span class="keyword">.<br />            </span><span class="string">', end=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">end </span><span class="keyword">.<br />            </span><span class="string">', length=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getLength</span><span class="keyword">() . </span><span class="string">']'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">/*<br /> * create and display objects of type Line3D.<br /> */<br /></span><span class="keyword">echo </span><span class="string">'&lt;p&gt;' </span><span class="keyword">. (new </span><span class="default">Line3D</span><span class="keyword">()) . </span><span class="string">"&lt;/p&gt;\n"</span><span class="keyword">;<br />echo </span><span class="string">'&lt;p&gt;' </span><span class="keyword">. (new </span><span class="default">Line3D</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)) . </span><span class="string">"&lt;/p&gt;\n"</span><span class="keyword">;<br />echo </span><span class="string">'&lt;p&gt;' </span><span class="keyword">. (new </span><span class="default">Line3D</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">)) . </span><span class="string">"&lt;/p&gt;\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />  &lt;--  The results look like this  --&gt;<br /><br />Line3D[start=Point3D(x=0, y=0, z=0), end=Point3D(x=1, y=1, z=1), length=1.73205080757]<br /><br />Line3D[start=Point3D(x=0, y=0, z=0), end=Point3D(x=100, y=100, z=0), length=141.421356237]<br /><br />Line3D[start=Point3D(x=0, y=0, z=0), end=Point3D(x=100, y=100, z=100), length=173.205080757]<br /><br />My absolute favorite thing about OOP is that "good" objects keep themselves in check. I mean really, it's the exact same thing in reality... like, if you hire a plumber to fix your kitchen sink, wouldn't you expect him to figure out the best plan of attack? Wouldn't he dislike the fact that you want to control the whole job? Wouldn't you expect him to not give you additional problems? And for god's sake, it is too much to ask that he cleans up before he leaves?<br /><br />I say, design your classes well, so they can do their jobs uninterrupted... who like bad news? And, if your classes and objects are well defined, educated, and have all the necessary data to work on (like the examples above do), you won't have to micro-manage the whole program from outside of the class. In other words... create an object, and LET IT RIP!</span></code></div>
  </div>
 </div>
  <div class="note" id="122293">  <div class="votes">
    <div id="Vu122293">
    <a href="/manual/vote-note.php?id=122293&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122293">
    <a href="/manual/vote-note.php?id=122293&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122293" title="63% like this...">
    25
    </div>
  </div>
  <a href="#122293" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#122293"> &para;</a><div class="date" title="2018-01-21 10:52"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122293">
<div class="phpcode"><code><span class="html">Class names are case-insensitive:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo</span><span class="keyword">{}<br />class </span><span class="default">foo</span><span class="keyword">{} </span><span class="comment">//Fatal error.<br /></span><span class="default">?&gt;<br /></span><br />Any casing can be used to refer to the class<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">bAr</span><span class="keyword">{}<br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">Bar</span><span class="keyword">();<br /></span><span class="default">$u </span><span class="keyword">= new </span><span class="default">bar</span><span class="keyword">();<br />echo (</span><span class="default">$t </span><span class="keyword">instanceof </span><span class="default">$u</span><span class="keyword">) ? </span><span class="string">"true" </span><span class="keyword">: </span><span class="string">"false"</span><span class="keyword">; </span><span class="comment">// "true"<br /></span><span class="keyword">echo (</span><span class="default">$t </span><span class="keyword">instanceof </span><span class="default">BAR</span><span class="keyword">) ? </span><span class="string">"true" </span><span class="keyword">: </span><span class="string">"false"</span><span class="keyword">; </span><span class="comment">// "true"<br /></span><span class="keyword">echo </span><span class="default">is_a</span><span class="keyword">(</span><span class="default">$u</span><span class="keyword">, </span><span class="string">'baR'</span><span class="keyword">) ? </span><span class="string">"true" </span><span class="keyword">: </span><span class="string">"false"</span><span class="keyword">; </span><span class="comment">// "true"<br /></span><span class="default">?&gt;<br /></span><br />But the case used when the class was defined is preserved as "canonical":<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">); </span><span class="comment">// "bAr"<br /></span><span class="default">?&gt;<br /></span><br />And, as always, "case-insensitivity" only applies to ASCII.<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">пасха</span><span class="keyword">{}<br />class </span><span class="default">Пасха</span><span class="keyword">{} </span><span class="comment">// valid<br /></span><span class="default">$p </span><span class="keyword">= new </span><span class="default">ПАСХА</span><span class="keyword">(); </span><span class="comment">// Uncaught warning.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127136">  <div class="votes">
    <div id="Vu127136">
    <a href="/manual/vote-note.php?id=127136&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127136">
    <a href="/manual/vote-note.php?id=127136&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127136" title="61% like this...">
    7
    </div>
  </div>
  <a href="#127136" class="name">
  <strong class="user"><em>pawel dot zimnowodzki at gmail dot com</em></strong></a><a class="genanchor" href="#127136"> &para;</a><div class="date" title="2022-05-26 11:28"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127136">
<div class="phpcode"><code><span class="html">Although there is no null-safe operator for not existed array keys I found workaround for it: ($array['not_existed_key'] ?? null)?-&gt;methodName()</span></code></div>
  </div>
 </div>
  <div class="note" id="92958">  <div class="votes">
    <div id="Vu92958">
    <a href="/manual/vote-note.php?id=92958&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92958">
    <a href="/manual/vote-note.php?id=92958&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92958" title="62% like this...">
    31
    </div>
  </div>
  <a href="#92958" class="name">
  <strong class="user"><em>moty66 at gmail dot com</em></strong></a><a class="genanchor" href="#92958"> &para;</a><div class="date" title="2009-08-16 07:59"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92958">
<div class="phpcode"><code><span class="html">I hope that this will help to understand how to work with static variables inside a class<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">a </span><span class="keyword">{<br /><br />    public static </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'I am foo'</span><span class="keyword">;<br />    public </span><span class="default">$bar </span><span class="keyword">= </span><span class="string">'I am bar'</span><span class="keyword">;<br />    <br />    public static function </span><span class="default">getFoo</span><span class="keyword">() { echo </span><span class="default">self</span><span class="keyword">::</span><span class="default">$foo</span><span class="keyword">;    }<br />    public static function </span><span class="default">setFoo</span><span class="keyword">() { </span><span class="default">self</span><span class="keyword">::</span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'I am a new foo'</span><span class="keyword">; }<br />    public function </span><span class="default">getBar</span><span class="keyword">() { echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">;    }            <br />}<br /><br /></span><span class="default">$ob </span><span class="keyword">= new </span><span class="default">a</span><span class="keyword">();<br /></span><span class="default">a</span><span class="keyword">::</span><span class="default">getFoo</span><span class="keyword">();     </span><span class="comment">// output: I am foo    <br /></span><span class="default">$ob</span><span class="keyword">-&gt;</span><span class="default">getFoo</span><span class="keyword">();    </span><span class="comment">// output: I am foo<br />//a::getBar();     // fatal error: using $this not in object context<br /></span><span class="default">$ob</span><span class="keyword">-&gt;</span><span class="default">getBar</span><span class="keyword">();    </span><span class="comment">// output: I am bar<br />                // If you keep $bar non static this will work<br />                // but if bar was static, then var_dump($this-&gt;bar) will output null <br /><br />// unset($ob);<br /></span><span class="default">a</span><span class="keyword">::</span><span class="default">setFoo</span><span class="keyword">();    </span><span class="comment">// The same effect as if you called $ob-&gt;setFoo(); because $foo is static<br /></span><span class="default">$ob </span><span class="keyword">= new </span><span class="default">a</span><span class="keyword">();     </span><span class="comment">// This will have no effects on $foo<br /></span><span class="default">$ob</span><span class="keyword">-&gt;</span><span class="default">getFoo</span><span class="keyword">();    </span><span class="comment">// output: I am a new foo <br /><br /></span><span class="default">?&gt;<br /></span><br />Regards<br />Motaz Abuthiab</span></code></div>
  </div>
 </div>
  <div class="note" id="92123">  <div class="votes">
    <div id="Vu92123">
    <a href="/manual/vote-note.php?id=92123&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92123">
    <a href="/manual/vote-note.php?id=92123&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92123" title="59% like this...">
    38
    </div>
  </div>
  <a href="#92123" class="name">
  <strong class="user"><em>Notes on stdClass</em></strong></a><a class="genanchor" href="#92123"> &para;</a><div class="date" title="2009-07-09 03:26"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92123">
<div class="phpcode"><code><span class="html">stdClass is the default PHP object. stdClass has no properties, methods or parent. It does not support magic methods, and implements no interfaces.<br /><br />When you cast a scalar or array as Object, you get an instance of stdClass. You can use stdClass whenever you need a generic object instance.<br /><span class="default">&lt;?php<br /></span><span class="comment">// ways of creating stdClass instances<br /></span><span class="default">$x </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">;<br /></span><span class="default">$y </span><span class="keyword">= (object) </span><span class="default">null</span><span class="keyword">;        </span><span class="comment">// same as above<br /></span><span class="default">$z </span><span class="keyword">= (object) </span><span class="string">'a'</span><span class="keyword">;         </span><span class="comment">// creates property 'scalar' = 'a'<br /></span><span class="default">$a </span><span class="keyword">= (object) array(</span><span class="string">'property1' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'property2' </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />stdClass is NOT a base class! PHP classes do not automatically inherit from any class. All classes are standalone, unless they explicitly extend another class. PHP differs from many object-oriented languages in this respect.<br /><span class="default">&lt;?php<br /></span><span class="comment">// CTest does not derive from stdClass<br /></span><span class="keyword">class </span><span class="default">CTest </span><span class="keyword">{<br />    public </span><span class="default">$property1</span><span class="keyword">;<br />}<br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">CTest</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$t </span><span class="keyword">instanceof </span><span class="default">stdClass</span><span class="keyword">);            </span><span class="comment">// false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_subclass_of</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">, </span><span class="string">'stdClass'</span><span class="keyword">));    </span><span class="comment">// false<br /></span><span class="keyword">echo </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;                   </span><span class="comment">// 'CTest'<br /></span><span class="keyword">echo </span><span class="default">get_parent_class</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;            </span><span class="comment">// false (no parent)<br /></span><span class="default">?&gt;<br /></span><br />You cannot define a class named 'stdClass' in your code. That name is already used by the system. You can define a class named 'Object'.<br /><br />You could define a class that extends stdClass, but you would get no benefit, as stdClass does nothing.<br /><br />(tested on PHP 5.2.8)</span></code></div>
  </div>
 </div>
  <div class="note" id="86235">  <div class="votes">
    <div id="Vu86235">
    <a href="/manual/vote-note.php?id=86235&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86235">
    <a href="/manual/vote-note.php?id=86235&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86235" title="55% like this...">
    21
    </div>
  </div>
  <a href="#86235" class="name">
  <strong class="user"><em>Jeffrey</em></strong></a><a class="genanchor" href="#86235"> &para;</a><div class="date" title="2008-10-08 03:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86235">
<div class="phpcode"><code><span class="html">A PHP Class can be used for several things, but at the most basic level, you'll use classes to "organize and deal with like-minded data". Here's what I mean by "organizing like-minded data". First, start with unorganized data.<br /><br /><span class="default">&lt;?php<br />$customer_name</span><span class="keyword">;<br /></span><span class="default">$item_name</span><span class="keyword">;<br /></span><span class="default">$item_price</span><span class="keyword">;<br /></span><span class="default">$customer_address</span><span class="keyword">;<br /></span><span class="default">$item_qty</span><span class="keyword">;<br /></span><span class="default">$item_total</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Now to organize the data into PHP classes:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Customer </span><span class="keyword">{<br />  </span><span class="default">$name</span><span class="keyword">;          </span><span class="comment">// same as $customer_name<br />  </span><span class="default">$address</span><span class="keyword">;       </span><span class="comment">// same as $customer_address<br /></span><span class="keyword">}<br /><br />class </span><span class="default">Item </span><span class="keyword">{<br />  </span><span class="default">$name</span><span class="keyword">;          </span><span class="comment">// same as $item_name<br />  </span><span class="default">$price</span><span class="keyword">;         </span><span class="comment">// same as $item_price<br />  </span><span class="default">$qty</span><span class="keyword">;           </span><span class="comment">// same as $item_qty<br />  </span><span class="default">$total</span><span class="keyword">;         </span><span class="comment">// same as $item_total<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Now here's what I mean by "dealing" with the data. Note: The data is already organized, so that in itself makes writing new functions extremely easy.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Customer </span><span class="keyword">{<br />  public </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$address</span><span class="keyword">;                   </span><span class="comment">// the data for this class...<br /><br />  // function to deal with user-input / validation<br />  // function to build string for output<br />  // function to write -&gt; database<br />  // function to  read &lt;- database<br />  // etc, etc<br /></span><span class="keyword">}<br /><br />class </span><span class="default">Item </span><span class="keyword">{<br />  public </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$price</span><span class="keyword">, </span><span class="default">$qty</span><span class="keyword">, </span><span class="default">$total</span><span class="keyword">;        </span><span class="comment">// the data for this class...<br /><br />  // function to calculate total<br />  // function to format numbers<br />  // function to deal with user-input / validation<br />  // function to build string for output<br />  // function to write -&gt; database<br />  // function to  read &lt;- database<br />  // etc, etc<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Imagination that each function you write only calls the bits of data in that class. Some functions may access all the data, while other functions may only access one piece of data. If each function revolves around the data inside, then you have created a good class.</span></code></div>
  </div>
 </div>
  <div class="note" id="122844">  <div class="votes">
    <div id="Vu122844">
    <a href="/manual/vote-note.php?id=122844&amp;page=language.oop5.basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122844">
    <a href="/manual/vote-note.php?id=122844&amp;page=language.oop5.basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122844" title="52% like this...">
    4
    </div>
  </div>
  <a href="#122844" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122844"> &para;</a><div class="date" title="2018-06-15 05:05"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122844">
<div class="phpcode"><code><span class="html">At first I was also confused by the assignment vs referencing but here's how I was finally able to get my head around it. This is another example which is somewhat similar to one of the comments but can be helpful to those who did not understand the first example. Imagine object instances as rooms where you can store and manipulate your properties and functions.  The variable that contains the object simply holds 'a key' to this room and thus access to the object. When you assign this variable to another new variable, what you are doing is you're making a copy of the key and giving it to this new variable. That means these two variable now have access to the same 'room' (object) and can thus get in and manipulate the values. However, when you create a reference, what you doing is you're making the variables SHARE the same key. They both have access to the room. If one of the variable is given a new key, then the key that they are sharing is replaced and they now share a new different key. This does not affect the other variable with a copy of the old key...that variable still has access to the first room</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.basic&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.basic.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="current">
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
                                                <li class="">
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
