<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Property Hooks - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.property-hooks.php">
 <link rel="shorturl" href="https://www.php.net/oop5.property-hooks">
 <link rel="alternate" href="https://www.php.net/oop5.property-hooks" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.properties.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.property-hooks.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.property-hooks.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.property-hooks.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.property-hooks.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.property-hooks.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.property-hooks.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.property-hooks.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.property-hooks.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.property-hooks.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.property-hooks.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.property-hooks.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Property Hooks" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Property Hooks - Manual" />
<meta name="twitter:description" content="Property Hooks" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Property Hooks - Manual" />
<meta itemprop="description" content="Property Hooks" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Property Hooks" />

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
        <a href="language.oop5.constants.php">
          Class Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.properties.php">
          &laquo; Properties        </a>
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
            <option value='en/language.oop5.property-hooks.php' selected="selected">English</option>
            <option value='de/language.oop5.property-hooks.php'>German</option>
            <option value='es/language.oop5.property-hooks.php'>Spanish</option>
            <option value='fr/language.oop5.property-hooks.php'>French</option>
            <option value='it/language.oop5.property-hooks.php'>Italian</option>
            <option value='ja/language.oop5.property-hooks.php'>Japanese</option>
            <option value='pt_BR/language.oop5.property-hooks.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.property-hooks.php'>Russian</option>
            <option value='tr/language.oop5.property-hooks.php'>Turkish</option>
            <option value='uk/language.oop5.property-hooks.php'>Ukrainian</option>
            <option value='zh/language.oop5.property-hooks.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.property-hooks" class="sect1">
 <h2 class="title">Property Hooks</h2>

 <p class="simpara">
  Property hooks, also known as &quot;property accessors&quot; in some other languages,
  are a way to intercept and override the read and write behavior of a property.
  This functionality serves two purposes:
 </p>
 <ol type="1">
  <li class="listitem">
   <span class="simpara">
    It allows for properties to be used directly, without get- and set- methods,
    while leaving the option open to add additional behavior in the future.
    That renders most boilerplate get/set methods unnecessary,
    even without using hooks.
   </span>
  </li>
  <li class="listitem">
   <span class="simpara">
    It allows for properties that describe an object without needing to store
    a value directly.
   </span>
  </li>
 </ol>
 <p class="simpara">
  There are two hooks available on non-static properties: <code class="literal">get</code> and <code class="literal">set</code>.
  They allow overriding the read and write behavior of a property, respectively.
  Hooks are available for both typed and untyped properties.
 </p>
 <p class="simpara">
  A property may be &quot;backed&quot; or &quot;virtual&quot;.
  A backed property is one that actually stores a value.
  Any property that has no hooks is backed.
  A virtual property is one that has hooks and those hooks do not interact with the property itself.
  In this case, the hooks are effectively the same as methods,
  and the object does not use any space to store a value for that property.
 </p>
 <p class="simpara">
  Property hooks are incompatible with <code class="literal">readonly</code> properties.
  If there is a need to restrict access to a <code class="literal">get</code> or <code class="literal">set</code>
  operation in addition to altering its behavior, use
  <a href="language.oop5.visibility.php#language.oop5.visibility-members-aviz" class="link">asymmetric property visibility</a>.
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <strong>Version Information</strong><br />
  <span class="simpara">
   Property hooks were introduced in PHP 8.4.
  </span>
 </p></blockquote>

 <div class="sect2">
  <h3 class="title">Basic Hook Syntax</h3>
  <p class="simpara">
   The general syntax for declaring a hook is as follows.
  </p>
  <div class="example" id="example-275">
   <p><strong>Example #1 Property hooks (full version)</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">bool $modified </span><span style="color: #007700">= </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />    public </span><span style="color: #0000BB">string $foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'default value' </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get </span><span style="color: #007700">{<br />            if (</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modified</span><span style="color: #007700">) {<br />                return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">. </span><span style="color: #DD0000">' (modified)'</span><span style="color: #007700">;<br />            }<br />            return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br />        }<br />        </span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">string $value</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modified </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$example </span><span style="color: #007700">= new </span><span style="color: #0000BB">Example</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$example</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'changed'</span><span style="color: #007700">;<br />print </span><span style="color: #0000BB">$example</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="simpara">
   The <var class="varname">$foo</var> property ends in <code class="literal">{}</code>, rather than a semicolon.
   That indicates the presence of hooks.
   Both a <code class="literal">get</code> and <code class="literal">set</code> hook are defined,
   although it is allowed to define only one or the other.
   Both hooks have a body, denoted by <code class="literal">{}</code>, that may contain arbitrary code.
  </p>
  <p class="simpara">
   The <code class="literal">set</code> hook additionally allows specifying the type and name of an incoming value,
   using the same syntax as a method.
   The type must be either the same as the type of the property,
   or <a href="language.oop5.variance.php#language.oop5.variance.contravariance" class="link">contravariant</a> (wider) to it.
   For instance, a property of type <span class="type"><a href="language.types.string.php" class="type string">string</a></span> could have a
   <code class="literal">set</code> hook that accepts <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="class.stringable.php" class="type Stringable">Stringable</a></span></span>,
   but not one that only accepts <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
  </p>
  <p class="simpara">
   At least one of the hooks references <code class="code">$this-&gt;foo</code>, the property itself.
   That means the property will be &quot;backed&quot;.
   When calling <code class="code">$example-&gt;foo = &#039;changed&#039;</code>,
   the provided string will be first cast to lowercase, then saved to the backing value.
   When reading from the property, the previously saved value may conditionally be appended
   with additional text.
  </p>
  <p class="simpara">
   There are a number of shorthand syntax variants as well to handle common cases.
  </p>
  <p class="simpara">
   If the <code class="literal">get</code> hook is a single expression,
   then the <code class="literal">{}</code> may be omitted and replaced with an arrow expression.
  </p>
  <div class="example" id="example-276">
   <p><strong>Example #2 Property get expression</strong></p>
   <div class="example-contents"><p>
    This example is equivalent to the previous.
   </p></div>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">bool $modified </span><span style="color: #007700">= </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />    public </span><span style="color: #0000BB">string $foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'default value' </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">. (</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modified </span><span style="color: #007700">? </span><span style="color: #DD0000">' (modified)' </span><span style="color: #007700">: </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br />        </span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">string $value</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modified </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="simpara">
   If the <code class="literal">set</code> hook&#039;s parameter type is the same as the property type (which is typical),
   it may be omitted.  In that case, the value to set is automatically given the name <var class="varname">$value</var>.
  </p>
  <div class="example" id="example-277">
   <p><strong>Example #3 Property set defaults</strong></p>
   <div class="example-contents"><p>
    This example is equivalent to the previous.
   </p></div>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">bool $modified </span><span style="color: #007700">= </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />    public </span><span style="color: #0000BB">string $foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'default value' </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">. (</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modified </span><span style="color: #007700">? </span><span style="color: #DD0000">' (modified)' </span><span style="color: #007700">: </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">{<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modified </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="simpara">
   If the <code class="literal">set</code> hook is only setting a modified version of the passed in value,
   then it may also be simplified to an arrow expression.
   The value the expression evaluates to will be set on the backing value.
  </p>
  <div class="example" id="example-278">
   <p><strong>Example #4 Property set expression</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'default value' </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">. (</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modified </span><span style="color: #007700">? </span><span style="color: #DD0000">' (modified)' </span><span style="color: #007700">: </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="simpara">
   This example is not quite equivalent to the previous,
   as it does not also modify <code class="code">$this-&gt;modified</code>.
   If multiple statements are needed in the set hook body, use the braces version.
  </p>
  <p class="simpara">
   A property may implement zero, one, or both hooks as the situation requires.
   All shorthand versions are mutually-independent.
   That is, using a short-get with a long-set,
   or a short-set with an explicit type, or so on is all valid.
  </p>
  <p class="simpara">
   On a backed property, omitting a <code class="literal">get</code> or <code class="literal">set</code>
   hook means the default read or write behavior will be used.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Hooks can be defined when using
    <a href="language.oop5.decon.php#language.oop5.decon.constructor.promotion" class="link">constructor property promotion</a>.
    However, when doing so, values provided
    to the constructor must match the type associated with the property,
    regardless of what the <code class="literal">set</code> hook might allow.
   </span>
   <span class="simpara">
    Consider the following:
   </span>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(<br />        public private(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">DateTimeInterface $created </span><span style="color: #007700">{<br />            </span><span style="color: #0000BB">set </span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">|</span><span style="color: #0000BB">DateTimeInterface $value</span><span style="color: #007700">) {<br />                if (</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)) {<br />                    </span><span style="color: #0000BB">$value </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />                }<br />                </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">created </span><span style="color: #007700">= </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />            }<br />        },<br />    ) {<br />    }<br />}</span></span></code></div>
   </div>

   <span class="simpara">
    Internally, the engine decomposes this to the following:
   </span>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    public private(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">DateTimeInterface $created </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">|</span><span style="color: #0000BB">DateTimeInterface $value</span><span style="color: #007700">) {<br />            if (</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)) {<br />                </span><span style="color: #0000BB">$value </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />            }<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">created </span><span style="color: #007700">= </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />        }<br />    }<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(<br />        </span><span style="color: #0000BB">DateTimeInterface $created</span><span style="color: #007700">,<br />    ) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">created </span><span style="color: #007700">= </span><span style="color: #0000BB">$created</span><span style="color: #007700">;<br />    }<br />}</span></span></code></div>
   </div>

   <span class="simpara">
    Any attempts to set the property outside the constructor will
    allow either <span class="type"><a href="language.types.string.php" class="type string">string</a></span> or <span class="interfacename"><a href="class.datetimeinterface.php" class="interfacename">DateTimeInterface</a></span>
    values, but the constructor will only allow <span class="interfacename"><a href="class.datetimeinterface.php" class="interfacename">DateTimeInterface</a></span>.
    This is because the defined type for the property (<span class="interfacename"><a href="class.datetimeinterface.php" class="interfacename">DateTimeInterface</a></span>)
    is used as the parameter type within the constructor signature, regardless of what
    the <code class="literal">set</code> hook allows.
   </span>
   <span class="simpara">
    If this kind of behavior is needed from the constructor, constructor
    property promotion cannot be used.
   </span>
  </p></blockquote>
 </div>
 <div class="sect2" id="language.oop5.property-hooks.virtual">
  <h3 class="title">Virtual properties</h3>
  <p class="simpara">
   Virtual properties are properties that have no backing value.
   A property is virtual if neither its <code class="literal">get</code>
   nor <code class="literal">set</code> hook references the property itself using exact syntax.
   That is, a property named <code class="code">$foo</code> whose hook contains <code class="code">$this-&gt;foo</code> will be backed.
   But the following is not a backed property, and will error:
  </p>
  <div class="example" id="example-279">
   <p><strong>Example #5 Invalid virtual property</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $foo </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get </span><span style="color: #007700">{<br />            </span><span style="color: #0000BB">$temp </span><span style="color: #007700">= </span><span style="color: #0000BB">__PROPERTY__</span><span style="color: #007700">;<br />            return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$temp</span><span style="color: #007700">; </span><span style="color: #FF8000">// Doesn't refer to $this-&gt;foo, so it doesn't count.<br />        </span><span style="color: #007700">}<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="simpara">
   For virtual properties, if a hook is omitted then that operation does
   not exist and trying to use it will produce an error.
   Virtual properties take up no memory space in an object.
   Virtual properties are suited for &quot;derived&quot; properties,
   such as those that are the combination of two other properties.
  </p>
  <div class="example" id="example-280">
   <p><strong>Example #6 Virtual property</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Rectangle<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// A virtual property.<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">int $area </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">h </span><span style="color: #007700">* </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">w</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(public </span><span style="color: #0000BB">int $h</span><span style="color: #007700">, public </span><span style="color: #0000BB">int $w</span><span style="color: #007700">) {}<br />}<br /><br /></span><span style="color: #0000BB">$s </span><span style="color: #007700">= new </span><span style="color: #0000BB">Rectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br />print </span><span style="color: #0000BB">$s</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">area</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints 20<br /></span><span style="color: #0000BB">$s</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">area </span><span style="color: #007700">= </span><span style="color: #0000BB">30</span><span style="color: #007700">; </span><span style="color: #FF8000">// Error, as there is no set operation defined.<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="simpara">
   Defining both a <code class="literal">get</code> and <code class="literal">set</code> hook on a virtual property is also allowed.
  </p>
 </div>
 <div class="sect2">
  <h3 class="title">Scoping</h3>
  <p class="simpara">
   All hooks operate in the scope of the object being modified.
   That means they have access to all public, private, or protected methods of the object,
   as well as any public, private, or protected properties,
   including properties that may have their own property hooks.
   Accessing another property from within a hook does not bypass the hooks defined on that property.
  </p>
  <p class="simpara">
   The most notable implication of this is that non-trivial hooks may sub-call
   to an arbitrarily complex method if they wish.
  </p>
  <div class="example" id="example-281">
   <p><strong>Example #7 Calling a method from a hook</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Person </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $phone </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sanitizePhone</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />    }<br /><br />    private function </span><span style="color: #0000BB">sanitizePhone</span><span style="color: #007700">(</span><span style="color: #0000BB">string $value</span><span style="color: #007700">): </span><span style="color: #0000BB">string </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">ltrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #DD0000">'+'</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">ltrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #DD0000">'1'</span><span style="color: #007700">);<br /><br />        if (!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\d\d\d\-\d\d\d\-\d\d\d\d/'</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">)) {<br />            throw new </span><span style="color: #0000BB">\InvalidArgumentException</span><span style="color: #007700">();<br />        }<br />        return </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>
 <div class="sect2">
  <h3 class="title">References</h3>
  <p class="simpara">
   Because the presence of hooks intercept the read and write process for properties,
   they cause issues when acquiring a reference to a property or with indirect
   modification, such as <code class="code">$this-&gt;arrayProp[&#039;key&#039;] = &#039;value&#039;;</code>.
   That is because any attempted modification of the value by reference would bypass a set hook,
   if one is defined.
  </p>
  <p class="simpara">
   In the rare case that getting a reference to a property that has hooks defined is necessary,
   the <code class="literal">get</code> hook may be prefixed with <code class="literal">&amp;</code>
   to cause it to return by reference.
   Defining both <code class="literal">get</code> and <code class="literal">&amp;get</code> on the
   same property is a syntax error.
  </p>
  <p class="simpara">
   Defining both <code class="literal">&amp;get</code> and <code class="literal">set</code> hooks on a backed property is not allowed.
   As noted above, writing to the value returned by reference would bypass the <code class="literal">set</code> hook.
   On virtual properties, there is no necessary common value shared between the two hooks, so defining both is allowed.
  </p>
  <p class="simpara">
   Writing to an index of an array property also involves an implicit reference.
   For that reason, writing to a backed array property with hooks defined is
   allowed if and only if it defines only a <code class="literal">&amp;get</code> hook.
   On a virtual property, writing to the array returned from either
   <code class="literal">get</code> or <code class="literal">&amp;get</code> is legal,
   but whether that has any impact on the object depends on the hook implementation.
  </p>
  <p class="simpara">
   Overwriting the entire array property is fine, and behaves the same as any other property.
   Only working with elements of the array require special care.
  </p>
 </div>
 <div class="sect2">
  <h3 class="title">Inheritance</h3>
  <div class="sect3">
   <h4 class="title">Final hooks</h4>
   <p class="simpara">
    Hooks may also be declared <a href="language.oop5.final.php" class="link">final</a>,
    in which case they may not be overridden.
   </p>
   <div class="example" id="example-282">
    <p><strong>Example #8 Final hooks</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">User<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $username </span><span style="color: #007700">{<br />        final </span><span style="color: #0000BB">set </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Manager </span><span style="color: #007700">extends </span><span style="color: #0000BB">User<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $username </span><span style="color: #007700">{<br />        </span><span style="color: #FF8000">// This is allowed<br />        </span><span style="color: #0000BB">get </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">);<br /><br />        </span><span style="color: #FF8000">// But this is NOT allowed, because set is final in the parent.<br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="simpara">
    A property may also be declared <a href="language.oop5.final.php" class="link">final</a>.
    A final property may not be redeclared by a child class in any way,
    which precludes altering hooks or widening its access.
   </p>
   <p class="simpara">
    Declaring hooks final on a property that is declared final is redundant,
    and will be silently ignored.
    This is the same behavior as final methods.
   </p>
   <p class="simpara">
    A child class may define or redefine individual hooks on a property
    by redefining the property and just the hooks it wishes to override.
    A child class may also add hooks to a property that had none.
    This is essentially the same as if the hooks were methods.
   </p>
   <div class="example" id="example-283">
    <p><strong>Example #9 Hook inheritance</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Point<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">int $x</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">int $y</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">PositivePoint </span><span style="color: #007700">extends </span><span style="color: #0000BB">Point<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">int $x </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">{<br />            if (</span><span style="color: #0000BB">$value </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />                throw new </span><span style="color: #0000BB">\InvalidArgumentException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Too small'</span><span style="color: #007700">);<br />            }<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">x </span><span style="color: #007700">= </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="simpara">
    Each hook overrides parent implementations independently of each other.
    If a child class adds hooks, any default value set on the property is removed, and must be redeclared.
    That is the same consistent with how inheritance works on hook-less properties.
   </p>
  </div>
  <div class="sect3">
   <h4 class="title">Accessing parent hooks</h4>
   <p class="simpara">
    A hook in a child class may access the parent class&#039;s property using the
    <code class="code">parent::$prop</code> keyword, followed by the desired hook.
    For example, <code class="code">parent::$propName::get()</code>.
    It may be read as &quot;access the <var class="varname">prop</var> defined on the parent class,
    and then run its get operation&quot; (or set operation, as appropriate).
   </p>
   <p class="simpara">
    If not accessed this way, the parent class&#039;s hook is ignored.
    This behavior is consistent with how all methods work.
    This also offers a way to access the parent class&#039;s storage, if any.
    If there is no hook on the parent property,
    its default get/set behavior will be used.
    Hooks may not access any other hook except their own parent on their own property.
   </p>
   <p class="simpara">
    The example above could be rewritten as follows, which would allow for the
    <code class="literal">Point</code> class to add its own <code class="literal">set</code> hook
    in the future without issues (in the previous example, a hook added to
    the parent class would be ignored in the child).
   </p>
   <div class="example" id="example-284">
    <p><strong>Example #10 Parent hook access (set)</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Point<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">int $x</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">int $y</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">PositivePoint </span><span style="color: #007700">extends </span><span style="color: #0000BB">Point<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">int $x </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">{<br />            if (</span><span style="color: #0000BB">$value </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />                throw new </span><span style="color: #0000BB">\InvalidArgumentException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Too small'</span><span style="color: #007700">);<br />            }<br />            </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">$x</span><span style="color: #007700">::</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />        }<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="simpara">
    An example of overriding only a get hook could be:
   </p>
   <div class="example" id="example-285">
    <p><strong>Example #11 Parent hook access (get)</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Strings<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $val</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">CaseFoldingStrings </span><span style="color: #007700">extends </span><span style="color: #0000BB">Strings<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">bool $uppercase </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br />    public </span><span style="color: #0000BB">string $val </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">uppercase<br />            </span><span style="color: #007700">? </span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">$val</span><span style="color: #007700">::</span><span style="color: #0000BB">get</span><span style="color: #007700">())<br />            : </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">$val</span><span style="color: #007700">::</span><span style="color: #0000BB">get</span><span style="color: #007700">());<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>
 </div>
 <div class="sect2">
  <h3 class="title">Serialization</h3>
  <p class="simpara">
   PHP has a number of different ways in which an object may be serialized,
   either for public consumption or for debugging purposes.
   The behavior of hooks varies depending on the use case.
   In some cases, the raw backing value of a property will be used,
   bypassing any hooks.
   In others, the property will be read or written &quot;through&quot; the hook,
   just like any other normal read/write action.
  </p>
  <ul class="simplelist">
   <li><span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span>: Use raw value</li>
   <li><span class="function"><a href="function.serialize.php" class="function">serialize()</a></span>: Use raw value</li>
   <li><span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span>: Use raw value</li>
   <li><a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a>/<a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a>: Custom logic, uses get/set hook</li>
   <li>Array casting: Use raw value</li>
   <li><span class="function"><a href="function.var-export.php" class="function">var_export()</a></span>: Use get hook</li>
   <li><span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>: Use get hook</li>
   <li><span class="interfacename"><a href="class.jsonserializable.php" class="interfacename">JsonSerializable</a></span>: Custom logic, uses get hook</li>
   <li><span class="function"><a href="function.get-object-vars.php" class="function">get_object_vars()</a></span>: Use get hook</li>
   <li><span class="function"><a href="function.get-mangled-object-vars.php" class="function">get_mangled_object_vars()</a></span>: Use raw value</li>
  </ul>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/property-hooks.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.property-hooks%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.property-hooks&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.property-hooks.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="current">
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
