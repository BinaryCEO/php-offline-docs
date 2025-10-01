<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Properties - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.properties.php">
 <link rel="shorturl" href="https://www.php.net/oop5.properties">
 <link rel="alternate" href="https://www.php.net/oop5.properties" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.basic.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.property-hooks.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.properties.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.properties.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.properties.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.properties.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.properties.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.properties.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.properties.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.properties.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.properties.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.properties.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.properties.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Properties" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Properties - Manual" />
<meta name="twitter:description" content="Properties" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Properties - Manual" />
<meta itemprop="description" content="Properties" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Properties" />

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
        <a href="language.oop5.property-hooks.php">
          Property Hooks &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.basic.php">
          &laquo; The Basics        </a>
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
            <option value='en/language.oop5.properties.php' selected="selected">English</option>
            <option value='de/language.oop5.properties.php'>German</option>
            <option value='es/language.oop5.properties.php'>Spanish</option>
            <option value='fr/language.oop5.properties.php'>French</option>
            <option value='it/language.oop5.properties.php'>Italian</option>
            <option value='ja/language.oop5.properties.php'>Japanese</option>
            <option value='pt_BR/language.oop5.properties.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.properties.php'>Russian</option>
            <option value='tr/language.oop5.properties.php'>Turkish</option>
            <option value='uk/language.oop5.properties.php'>Ukrainian</option>
            <option value='zh/language.oop5.properties.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.properties" class="sect1">
  <h2 class="title">Properties</h2>

  <p class="para">
   Class member variables are called <em>properties</em>.
   They may be referred to using other terms such as <em>fields</em>,
   but for the purposes of this reference <em>properties</em>
   will be used. They are defined by using at least one modifier (such as
   <a href="language.oop5.visibility.php" class="xref">Visibility</a>,
   <a href="language.oop5.static.php" class="xref">Static Keyword</a>,
   or, as of PHP 8.1.0, <a href="language.oop5.properties.php#language.oop5.properties.readonly-properties" class="link">readonly</a>),
   optionally (except for <code class="code">readonly</code> properties), as of PHP 7.4,
   followed by a type declaration, followed by a normal variable declaration.
   This declaration may include an initialization, but this initialization
   must be a <a href="language.constants.php" class="link">constant</a> value.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    An obsolete way of declaring class properties, is by using the
    <code class="literal">var</code> keyword instead of a modifier.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    A property declared without a <a href="language.oop5.visibility.php" class="xref">Visibility</a>
    modifier will be declared as <code class="literal">public</code>.
   </span>
  </p></blockquote>
  <p class="para">
   Within class methods non-static properties may be accessed by using 
   <code class="literal">-&gt;</code> (Object Operator): <var class="varname">$this->property</var> 
   (where <code class="literal">property</code> is the name of the property). 
   Static properties are accessed by using the <code class="literal">::</code> (Double Colon):
   <var class="varname">self::$property</var>. See <a href="language.oop5.static.php" class="xref">Static Keyword</a>
   for more information on the difference between static and non-static properties.
  </p>
  <p class="para">
   The pseudo-variable <var class="varname">$this</var> is available inside
   any class method when that method is called from within an object context.
   <var class="varname">$this</var> is the value of the calling object.
  </p>

  <p class="para">
   <div class="example" id="example-269">
    <p><strong>Example #1 Property declarations</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">SimpleClass<br /></span><span style="color: #007700">{<br />   public </span><span style="color: #0000BB">$var1 </span><span style="color: #007700">= </span><span style="color: #DD0000">'hello ' </span><span style="color: #007700">. </span><span style="color: #DD0000">'world'</span><span style="color: #007700">;<br />   public </span><span style="color: #0000BB">$var2 </span><span style="color: #007700">= &lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">hello world<br /></span><span style="color: #007700">EOD;<br />   public </span><span style="color: #0000BB">$var3 </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">+</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />   </span><span style="color: #FF8000">// invalid property declarations:<br />   </span><span style="color: #007700">public </span><span style="color: #0000BB">$var4 </span><span style="color: #007700">= </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">myStaticMethod</span><span style="color: #007700">();<br />   public </span><span style="color: #0000BB">$var5 </span><span style="color: #007700">= </span><span style="color: #0000BB">$myVar</span><span style="color: #007700">;<br /><br />   </span><span style="color: #FF8000">// valid property declarations:<br />   </span><span style="color: #007700">public </span><span style="color: #0000BB">$var6 </span><span style="color: #007700">= </span><span style="color: #0000BB">myConstant</span><span style="color: #007700">;<br />   public </span><span style="color: #0000BB">$var7 </span><span style="color: #007700">= [</span><span style="color: #0000BB">true</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">];<br /><br />   public </span><span style="color: #0000BB">$var8 </span><span style="color: #007700">= &lt;&lt;&lt;'EOD'<br /></span><span style="color: #DD0000">hello world<br /></span><span style="color: #007700">EOD;<br /><br />   </span><span style="color: #FF8000">// Without visibility modifier:<br />   </span><span style="color: #007700">static </span><span style="color: #0000BB">$var9</span><span style="color: #007700">;<br />   readonly </span><span style="color: #0000BB">int $var10</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>
   
   </div>
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    There are various functions to handle classes and objects.
    See the <a href="ref.classobj.php" class="link">Class/Object Functions</a>
    reference.
   </p>
  </p></blockquote>

  <div class="sect2" id="language.oop5.properties.typed-properties">
   <h3 class="title">Type declarations</h3>
   <p class="para">
    As of PHP 7.4.0, property definitions can include
    <a href="language.types.declarations.php" class="xref">Type declarations</a>,
    with the exception of <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>.
    <div class="example" id="example-270">
     <p><strong>Example #2 Example of typed properties</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">User<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">int $id</span><span style="color: #007700">;<br />    public ?</span><span style="color: #0000BB">string $name</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">int $id</span><span style="color: #007700">, ?</span><span style="color: #0000BB">string $name</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id </span><span style="color: #007700">= </span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name </span><span style="color: #007700">= </span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$user </span><span style="color: #007700">= new </span><span style="color: #0000BB">User</span><span style="color: #007700">(</span><span style="color: #0000BB">1234</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
int(1234)
NULL
</pre></div>
     </div>
    </div>
   </p>

   <p class="para">
    Typed properties must be initialized before accessing, otherwise an
    <span class="classname"><a href="class.error.php" class="classname">Error</a></span> is thrown.
    <div class="example" id="example-271">
     <p><strong>Example #3 Accessing properties</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Shape<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">int $numberOfSides</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">string $name</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">setNumberOfSides</span><span style="color: #007700">(</span><span style="color: #0000BB">int $numberOfSides</span><span style="color: #007700">): </span><span style="color: #0000BB">void<br />    </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">numberOfSides </span><span style="color: #007700">= </span><span style="color: #0000BB">$numberOfSides</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">setName</span><span style="color: #007700">(</span><span style="color: #0000BB">string $name</span><span style="color: #007700">): </span><span style="color: #0000BB">void<br />    </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name </span><span style="color: #007700">= </span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">getNumberOfSides</span><span style="color: #007700">(): </span><span style="color: #0000BB">int<br />    </span><span style="color: #007700">{<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">numberOfSides</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">getName</span><span style="color: #007700">(): </span><span style="color: #0000BB">string<br />    </span><span style="color: #007700">{<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$triangle </span><span style="color: #007700">= new </span><span style="color: #0000BB">Shape</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$triangle</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setName</span><span style="color: #007700">(</span><span style="color: #DD0000">"triangle"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$triangle</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setNumberofSides</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$triangle</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$triangle</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNumberOfSides</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">$circle </span><span style="color: #007700">= new </span><span style="color: #0000BB">Shape</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$circle</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setName</span><span style="color: #007700">(</span><span style="color: #DD0000">"circle"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$circle</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$circle</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNumberOfSides</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
string(8) &quot;triangle&quot;
int(3)
string(6) &quot;circle&quot;

Fatal error: Uncaught Error: Typed property Shape::$numberOfSides must not be accessed before initialization
</pre></div>
     </div>
    </div>
   </p>
  </div>

  <div class="sect2" id="language.oop5.properties.readonly-properties">
   <h3 class="title">Readonly properties</h3>
   <p class="para">
    As of PHP 8.1.0, a property can be declared with the <code class="literal">readonly</code> modifier,
    which prevents modification of the property after initialization.  Prior to PHP 8.4.0
    a <code class="literal">readonly</code> property is implicitly private-set, and may only be written to
    from the same class.  As of PHP 8.4.0, <code class="literal">readonly</code> properties are implicitly
    <a href="language.oop5.visibility.php#language.oop5.visibility-members-aviz" class="link"><code class="literal">protected(set)</code></a>,
    so may be set from child classes.  That may be overridden
    explicitly if desired.
    <div class="example" id="example-272">
     <p><strong>Example #4 Example of readonly properties</strong></p>
     <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test </span><span style="color: #007700">{<br />   public readonly </span><span style="color: #0000BB">string $prop</span><span style="color: #007700">;<br /><br />   public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">string $prop</span><span style="color: #007700">) {<br />       </span><span style="color: #FF8000">// Legal initialization.<br />       </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop </span><span style="color: #007700">= </span><span style="color: #0000BB">$prop</span><span style="color: #007700">;<br />   }<br />}<br /><br /></span><span style="color: #0000BB">$test </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test</span><span style="color: #007700">(</span><span style="color: #DD0000">"foobar"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Legal read.<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop</span><span style="color: #007700">); </span><span style="color: #FF8000">// string(6) "foobar"<br /><br />// Illegal reassignment. It does not matter that the assigned value is the same.<br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop </span><span style="color: #007700">= </span><span style="color: #DD0000">"foobar"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Error: Cannot modify readonly property Test::$prop<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      The readonly modifier can only be applied to <a href="language.oop5.properties.php#language.oop5.properties.typed-properties" class="link">typed properties</a>.
      A readonly property without type constraints can be created using the <a href="language.types.mixed.php" class="xref">Mixed</a> type.
     </p>
    </p></blockquote>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Readonly static properties are not supported.
     </p>
    </p></blockquote>
   </p>
   <p class="para">
    A readonly property can only be initialized once, and only from the scope where it has been declared. Any other assignment or modification of the property will result in an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception.
    <div class="example" id="example-273">
     <p><strong>Example #5 Illegal initialization of readonly properties</strong></p>
     <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test1 </span><span style="color: #007700">{<br />    public readonly </span><span style="color: #0000BB">string $prop</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$test1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test1</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Illegal initialization outside of private scope.<br /></span><span style="color: #0000BB">$test1</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop </span><span style="color: #007700">= </span><span style="color: #DD0000">"foobar"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Error: Cannot initialize readonly property Test1::$prop from global scope<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Specifying an explicit default value on readonly properties is not allowed, because a readonly property with a default value is essentially the same as a constant, and thus not particularly useful.
     <div class="informalexample">
      <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test </span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Fatal error: Readonly property Test::$prop cannot have default value<br />    </span><span style="color: #007700">public readonly </span><span style="color: #0000BB">int $prop </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
   </p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Readonly properties cannot be <span class="function"><a href="function.unset.php" class="function">unset()</a></span> once they are initialized. However, it is possible to unset a readonly property prior to initialization, from the scope where the property has been declared.
    </p>
   </p></blockquote>
   <p class="para">
    Modifications are not necessarily plain assignments, all of the following will also result in an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception:
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(<br />        public readonly </span><span style="color: #0000BB">int $i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">,<br />        public readonly array </span><span style="color: #0000BB">$ary </span><span style="color: #007700">= [],<br />    ) {}<br />}<br /><br /></span><span style="color: #0000BB">$test </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">i </span><span style="color: #007700">+= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">i</span><span style="color: #007700">++;<br />++</span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">i</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ary</span><span style="color: #007700">[] = </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ary</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][] = </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$ref </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">i</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">i </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$ref</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">byRef</span><span style="color: #007700">(</span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">i</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$test </span><span style="color: #007700">as &amp;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    However, readonly properties do not preclude interior mutability. Objects (or resources) stored in readonly properties may still be modified internally:
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(public readonly </span><span style="color: #0000BB">object $obj</span><span style="color: #007700">) {}<br />}<br /><br /></span><span style="color: #0000BB">$test </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test</span><span style="color: #007700">(new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Legal interior mutation.<br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Illegal reassignment.<br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    As of PHP 8.3.0, readonly properties can be reinitialized when cloning an object
    using the <a href="language.oop5.cloning.php#object.clone" class="link">__clone()</a> method.
    <div class="example" id="example-274">
     <p><strong>Example #6 Readonly properties and cloning</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test1 </span><span style="color: #007700">{<br />    public readonly ?</span><span style="color: #0000BB">string $prop</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__clone</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">setProp</span><span style="color: #007700">(</span><span style="color: #0000BB">string $prop</span><span style="color: #007700">): </span><span style="color: #0000BB">void </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop </span><span style="color: #007700">= </span><span style="color: #0000BB">$prop</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$test1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$test1</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setProp</span><span style="color: #007700">(</span><span style="color: #DD0000">'foobar'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$test2 </span><span style="color: #007700">= clone </span><span style="color: #0000BB">$test1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$test2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop</span><span style="color: #007700">); </span><span style="color: #FF8000">// NULL<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect2" id="language.oop5.properties.dynamic-properties">
   <h3 class="title">Dynamic properties</h3>
   <p class="para">
    If trying to assign to a non-existent property on an <span class="type"><a href="language.types.object.php" class="type object">object</a></span>,
    PHP will automatically create a corresponding property.
    This dynamically created property will <em>only</em> be
    available on this class instance.
   </p>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Dynamic properties are deprecated as of PHP 8.2.0.
     It is recommended to declare the property instead.
     To handle arbitrary property names, the class should implement the magic
     methods <a href="language.oop5.overloading.php#object.get" class="link">__get()</a> and
     <a href="language.oop5.overloading.php#object.set" class="link">__set()</a>.
     At last resort the class can be marked with the
     <code class="code">#[\AllowDynamicProperties]</code> attribute.
    </p>
   </div>
  </div>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/properties.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.properties%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.properties&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.properties.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117617">  <div class="votes">
    <div id="Vu117617">
    <a href="/manual/vote-note.php?id=117617&amp;page=language.oop5.properties&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117617">
    <a href="/manual/vote-note.php?id=117617&amp;page=language.oop5.properties&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117617" title="68% like this...">
    88
    </div>
  </div>
  <a href="#117617" class="name">
  <strong class="user"><em>anca at techliminal dot com</em></strong></a><a class="genanchor" href="#117617"> &para;</a><div class="date" title="2015-07-08 11:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117617">
<div class="phpcode"><code><span class="html">You can access property names with dashes in them (for example, because you converted an XML file to an object) in the following way:<br /><br /><span class="default">&lt;?php<br />$ref </span><span class="keyword">= new </span><span class="default">StdClass</span><span class="keyword">();<br /></span><span class="default">$ref</span><span class="keyword">-&gt;{</span><span class="string">'ref-type'</span><span class="keyword">} = </span><span class="string">'Journal Article'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$ref</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102880">  <div class="votes">
    <div id="Vu102880">
    <a href="/manual/vote-note.php?id=102880&amp;page=language.oop5.properties&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102880">
    <a href="/manual/vote-note.php?id=102880&amp;page=language.oop5.properties&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102880" title="64% like this...">
    67
    </div>
  </div>
  <a href="#102880" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#102880"> &para;</a><div class="date" title="2011-03-11 03:18"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102880">
<div class="phpcode"><code><span class="html">$this can be cast to array.  But when doing so, it prefixes the property names/new array keys with certain data depending on the property classification.  Public property names are not changed.  Protected properties are prefixed with a space-padded '*'.  Private properties are prefixed with the space-padded class name...
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">test
<br /></span><span class="keyword">{
<br />    public </span><span class="default">$var1 </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />    protected </span><span class="default">$var2 </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;
<br />    private </span><span class="default">$var3 </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;
<br />    static </span><span class="default">$var4 </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;
<br />    
<br />    public function </span><span class="default">toArray</span><span class="keyword">()
<br />    {
<br />        return (array) </span><span class="default">$this</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">test</span><span class="keyword">;
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">toArray</span><span class="keyword">());
<br />
<br /></span><span class="comment">/* outputs:
<br />
<br />Array
<br />(
<br />    [var1] =&gt; 1
<br />    [ * var2] =&gt; 2
<br />    [ test var3] =&gt; 3
<br />)
<br />
<br />*/
<br /></span><span class="default">?&gt;
<br /></span>
<br />This is documented behavior when converting any object to an array (see &lt;/language.types.array.php#language.types.array.casting&gt; PHP manual page).  All properties regardless of visibility will be shown when casting an object to array (with exceptions of a few built-in objects).
<br />
<br />To get an array with all property names unaltered, use the 'get_object_vars($this)' function in any method within class scope to retrieve an array of all properties regardless of external visibility, or 'get_object_vars($object)' outside class scope to retrieve an array of only public properties (see: &lt;/function.get-object-vars.php&gt; PHP manual page).</span></code></div>
  </div>
 </div>
  <div class="note" id="98267">  <div class="votes">
    <div id="Vu98267">
    <a href="/manual/vote-note.php?id=98267&amp;page=language.oop5.properties&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98267">
    <a href="/manual/vote-note.php?id=98267&amp;page=language.oop5.properties&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98267" title="57% like this...">
    27
    </div>
  </div>
  <a href="#98267" class="name">
  <strong class="user"><em>zzzzBov</em></strong></a><a class="genanchor" href="#98267"> &para;</a><div class="date" title="2010-06-04 09:21"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98267">
<div class="phpcode"><code><span class="html">Do not confuse php's version of properties with properties in other languages (C++ for example).  In php, properties are the same as attributes, simple variables without functionality.  They should be called attributes, not properties.<br /><br />Properties have implicit accessor and mutator functionality.  I've created an abstract class that allows implicit property functionality.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">abstract class </span><span class="default">PropertyObject<br /></span><span class="keyword">{<br />  public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)<br />  {<br />    if (</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, (</span><span class="default">$method </span><span class="keyword">= </span><span class="string">'get_'</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">)))<br />    {<br />      return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">();<br />    }<br />    else return;<br />  }<br />  <br />  public function </span><span class="default">__isset</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)<br />  {<br />    if (</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, (</span><span class="default">$method </span><span class="keyword">= </span><span class="string">'isset_'</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">)))<br />    {<br />      return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">();<br />    }<br />    else return;<br />  }<br />  <br />  public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)<br />  {<br />    if (</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, (</span><span class="default">$method </span><span class="keyword">= </span><span class="string">'set_'</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">)))<br />    {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />    }<br />  }<br />  <br />  public function </span><span class="default">__unset</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)<br />  {<br />    if (</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, (</span><span class="default">$method </span><span class="keyword">= </span><span class="string">'unset_'</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">)))<br />    {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">();<br />    }<br />  }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />after extending this class, you can create accessors and mutators that will be called automagically, using php's magic methods, when the corresponding property is accessed.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.properties&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.properties.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
