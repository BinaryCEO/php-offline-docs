<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Lazy Objects - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.lazy-objects.php">
 <link rel="shorturl" href="https://www.php.net/oop5.lazy-objects">
 <link rel="alternate" href="https://www.php.net/oop5.lazy-objects" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.variance.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.changelog.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.lazy-objects.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.lazy-objects.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.lazy-objects.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.lazy-objects.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.lazy-objects.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.lazy-objects.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.lazy-objects.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.lazy-objects.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.lazy-objects.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.lazy-objects.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.lazy-objects.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Lazy Objects" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Lazy Objects - Manual" />
<meta name="twitter:description" content="Lazy Objects" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Lazy Objects - Manual" />
<meta itemprop="description" content="Lazy Objects" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Lazy Objects" />

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
        <a href="language.oop5.changelog.php">
          OOP Changelog &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.variance.php">
          &laquo; Covariance and Contravariance        </a>
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
            <option value='en/language.oop5.lazy-objects.php' selected="selected">English</option>
            <option value='de/language.oop5.lazy-objects.php'>German</option>
            <option value='es/language.oop5.lazy-objects.php'>Spanish</option>
            <option value='fr/language.oop5.lazy-objects.php'>French</option>
            <option value='it/language.oop5.lazy-objects.php'>Italian</option>
            <option value='ja/language.oop5.lazy-objects.php'>Japanese</option>
            <option value='pt_BR/language.oop5.lazy-objects.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.lazy-objects.php'>Russian</option>
            <option value='tr/language.oop5.lazy-objects.php'>Turkish</option>
            <option value='uk/language.oop5.lazy-objects.php'>Ukrainian</option>
            <option value='zh/language.oop5.lazy-objects.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.lazy-objects" class="sect1">
 <h2 class="title">Lazy Objects</h2>

 <p class="simpara">
  A lazy object is an object whose initialization is deferred until its
  state is observed or modified. Some use-case examples include dependency
  injection components that provide lazy services fully initialized only if
  needed, <abbr>ORM</abbr>s providing lazy entities that hydrate
  themselves from the database only when accessed, or a JSON parser that
  delays parsing until elements are accessed.
 </p>

 <p class="simpara">
  Two lazy object strategies are supported: Ghost Objects and Virtual
  Proxies, hereafter referred to as &quot;lazy ghosts&quot; and
  &quot;lazy proxies&quot;.
  In both strategies, the lazy object is attached to an initializer or factory
  that is called automatically when its state is observed or modified for
  the first time.  From an abstraction point of view, lazy ghost objects are
  indistinguishable from non-lazy ones: they can be used without knowing they
  are lazy, allowing them to be passed to and used by code that is unaware of
  laziness. Lazy proxies are similarly transparent, but care must be taken when
  their identity is used, as the proxy and its real instance have different
  identities.
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <strong>Version Information</strong><br />
  <span class="simpara">
   Lazy objects were introduced in PHP 8.4.
  </span>
 </p></blockquote>

 <div class="sect2" id="language.oop5.lazy-objects.creation">
  <h3 class="title">Creating Lazy Objects</h3>

  <p class="simpara">
   It is possible to create a lazy instance of any user defined class or the
   <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span> class (other internal classes are not
   supported), or to reset an instance of these classes to make it lazy.
   The entry points for creating a lazy object are the
   <span class="methodname"><a href="reflectionclass.newlazyghost.php" class="methodname">ReflectionClass::newLazyGhost()</a></span> and
   <span class="methodname"><a href="reflectionclass.newlazyproxy.php" class="methodname">ReflectionClass::newLazyProxy()</a></span> methods.
  </p>

  <p class="simpara">
   Both methods accept a function that is called when the object requires
   initialization. The function&#039;s expected behavior varies depending on the
   strategy in use, as described in the reference documentation for each method.
  </p>

  <div class="example" id="example-369">
   <p><strong>Example #1 Creating a Lazy Ghost</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(public </span><span style="color: #0000BB">int $prop</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$reflector </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">Example</span><span style="color: #007700">::class);<br /></span><span style="color: #0000BB">$lazyObject </span><span style="color: #007700">= </span><span style="color: #0000BB">$reflector</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newLazyGhost</span><span style="color: #007700">(function (</span><span style="color: #0000BB">Example $object</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Initialize object in-place<br />    </span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />});<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$lazyObject</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$lazyObject</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Triggers initialization<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$lazyObject</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
lazy ghost object(Example)#3 (0) {
[&quot;prop&quot;]=&gt;
uninitialized(int)
}
string(7) &quot;Example&quot;
Example::__construct
int(1)
</pre></div>
   </div>
  </div>

  <div class="example" id="example-370">
   <p><strong>Example #2 Creating a Lazy Proxy</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(public </span><span style="color: #0000BB">int $prop</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$reflector </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">Example</span><span style="color: #007700">::class);<br /></span><span style="color: #0000BB">$lazyObject </span><span style="color: #007700">= </span><span style="color: #0000BB">$reflector</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newLazyProxy</span><span style="color: #007700">(function (</span><span style="color: #0000BB">Example $object</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Create and return the real instance<br />    </span><span style="color: #007700">return new </span><span style="color: #0000BB">Example</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />});<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$lazyObject</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$lazyObject</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Triggers initialization<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$lazyObject</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
lazy proxy object(Example)#3 (0) {
  [&quot;prop&quot;]=&gt;
  uninitialized(int)
}
string(7) &quot;Example&quot;
Example::__construct
int(1)
</pre></div>
   </div>
  </div>

  <p class="simpara">
   Any access to properties of a lazy object triggers its initialization
   (including via <span class="classname"><a href="class.reflectionproperty.php" class="classname">ReflectionProperty</a></span>).
   However, certain properties might be known in advance and should not trigger
   initialization when accessed:
  </p>

  <div class="example" id="example-371">
   <p><strong>Example #3 Initializing Properties Eagerly</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">BlogPost<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(<br />        public </span><span style="color: #0000BB">int $id</span><span style="color: #007700">,<br />        public </span><span style="color: #0000BB">string $title</span><span style="color: #007700">,<br />        public </span><span style="color: #0000BB">string $content</span><span style="color: #007700">,<br />    ) { }<br />}<br /><br /></span><span style="color: #0000BB">$reflector </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">BlogPost</span><span style="color: #007700">::class);<br /><br /></span><span style="color: #0000BB">$post </span><span style="color: #007700">= </span><span style="color: #0000BB">$reflector</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newLazyGhost</span><span style="color: #007700">(function (</span><span style="color: #0000BB">$post</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">fetch_from_store</span><span style="color: #007700">(</span><span style="color: #0000BB">$post</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$post</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">], </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'title'</span><span style="color: #007700">], </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'content'</span><span style="color: #007700">]);<br />});<br /><br /></span><span style="color: #FF8000">// Without this line, the following call to ReflectionProperty::setValue() would<br />// trigger initialization.<br /></span><span style="color: #0000BB">$reflector</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProperty</span><span style="color: #007700">(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">skipLazyInitialization</span><span style="color: #007700">(</span><span style="color: #0000BB">$post</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$reflector</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProperty</span><span style="color: #007700">(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$post</span><span style="color: #007700">, </span><span style="color: #0000BB">123</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Alternatively, one can use this directly:<br /></span><span style="color: #0000BB">$reflector</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProperty</span><span style="color: #007700">(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setRawValueWithoutLazyInitialization</span><span style="color: #007700">(</span><span style="color: #0000BB">$post</span><span style="color: #007700">, </span><span style="color: #0000BB">123</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The id property can be accessed without triggering initialization<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$post</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <p class="simpara">
   The <span class="methodname"><a href="reflectionproperty.skiplazyinitialization.php" class="methodname">ReflectionProperty::skipLazyInitialization()</a></span> and
   <span class="methodname"><a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php" class="methodname">ReflectionProperty::setRawValueWithoutLazyInitialization()</a></span>
   methods offer ways to bypass lazy-initialization when accessing a property.
  </p>
 </div>

 <div class="sect2" id="language.oop5.lazy-objects.patterns">
  <h3 class="title">About Lazy Object Strategies</h3>

  <p class="simpara">
   <em>Lazy ghosts</em> are objects that initialize in-place and,
   once initialized, are indistinguishable from an object that was never lazy.
   This strategy is suitable when we control both the instantiation and
   initialization of the object, making it unsuitable if either of these is
   managed by another party.
  </p>

  <p class="simpara">
   <em>Lazy proxies</em>, once initialized, act as proxies to
   a real instance: any operation on an initialized lazy proxy is forwarded
   to the real instance. The creation of the real instance can be delegated
   to another party, making this strategy useful in cases where lazy ghosts
   are unsuitable. Although lazy proxies are nearly as transparent as lazy
   ghosts, caution is needed when their identity is used, as the proxy and
   its real instance have distinct identities.
  </p>
 </div>

 <div class="sect2" id="language.oop5.lazy-objects.lifecycle">
  <h3 class="title">Lifecycle of Lazy Objects</h3>

  <p class="simpara">
   Objects can be made lazy at instantiation time using
   <span class="methodname"><a href="reflectionclass.newlazyghost.php" class="methodname">ReflectionClass::newLazyGhost()</a></span> or
   <span class="methodname"><a href="reflectionclass.newlazyproxy.php" class="methodname">ReflectionClass::newLazyProxy()</a></span>, or after
   instantiation by using
   <span class="methodname"><a href="reflectionclass.resetaslazyghost.php" class="methodname">ReflectionClass::resetAsLazyGhost()</a></span> or
   <span class="methodname"><a href="reflectionclass.resetaslazyproxy.php" class="methodname">ReflectionClass::resetAsLazyProxy()</a></span>. Following this, a
   lazy object can become initialized through one of the following operations:
  </p>

  <ul class="simplelist">
   <li>
    Interacting with the object in a way that triggers automatic initialization. See
    <a href="language.oop5.lazy-objects.php#language.oop5.lazy-objects.initialization-triggers" class="link">Initialization
    triggers</a>.
   </li>
   <li>
    Marking all its properties as non-lazy using
    <span class="methodname"><a href="reflectionproperty.skiplazyinitialization.php" class="methodname">ReflectionProperty::skipLazyInitialization()</a></span> or
    <span class="methodname"><a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php" class="methodname">ReflectionProperty::setRawValueWithoutLazyInitialization()</a></span>.
   </li>
   <li>
    Calling explicitly <span class="methodname"><a href="reflectionclass.initializelazyobject.php" class="methodname">ReflectionClass::initializeLazyObject()</a></span>
    or <span class="methodname"><a href="reflectionclass.marklazyobjectasinitialized.php" class="methodname">ReflectionClass::markLazyObjectAsInitialized()</a></span>.
   </li>
  </ul>

  <p class="simpara">
   As lazy objects become initialized when all their properties are marked
   non-lazy, the above methods will not mark an object as lazy if no properties
   could be marked as lazy.
  </p>
 </div>

 <div class="sect2" id="language.oop5.lazy-objects.initialization-triggers">
  <h3 class="title">Initialization Triggers</h3>

  <p class="simpara">
   Lazy objects are designed to be fully transparent to their consumers,
   so normal operations that observe or modify the object&#039;s state will
   automatically trigger initialization before the operation is performed. This
   includes, but is not limited to, the following operations:
  </p>

  <ul class="simplelist">
   <li>
    Reading or writing a property.
   </li>
   <li>
    Testing if a property is set or unsetting it.
   </li>
   <li>
    Accessing or modifying a property via
    <span class="methodname"><a href="reflectionproperty.getvalue.php" class="methodname">ReflectionProperty::getValue()</a></span>,
    <span class="methodname"><a href="reflectionproperty.getrawvalue.php" class="methodname">ReflectionProperty::getRawValue()</a></span>,
    <span class="methodname"><a href="reflectionproperty.setvalue.php" class="methodname">ReflectionProperty::setValue()</a></span>,
    or <span class="methodname"><a href="reflectionproperty.setrawvalue.php" class="methodname">ReflectionProperty::setRawValue()</a></span>.
   </li>
   <li>
    Listing properties with
    <span class="methodname"><strong>ReflectionObject::getProperties()</strong></span>,
    <span class="methodname"><strong>ReflectionObject::getProperty()</strong></span>,
    <span class="function"><a href="function.get-object-vars.php" class="function">get_object_vars()</a></span>.
   </li>
   <li>
    Iterating over properties of an object that does not implement
    <span class="interfacename"><a href="class.iterator.php" class="interfacename">Iterator</a></span> or
    <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> using
    <a href="control-structures.foreach.php" class="link">foreach</a>.
   </li>
   <li>
    Serializing the object with <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span>,
    <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>, etc.
   </li>
   <li>
    <a href="language.oop5.lazy-objects.php#language.oop5.lazy-objects.cloning" class="link">Cloning</a> the
    object.
   </li>
  </ul>

  <p class="simpara">
   Method calls that do not access the object state will not trigger
   initialization. Similarly, interactions with the object that invoke magic
   methods or hook functions will not trigger initialization if these methods
   or functions do not access the object&#039;s state.
  </p>

  <div class="sect3">
   <h4 class="title">Non-Triggering Operations</h4>

   <p class="simpara">
    The following specific methods or low-level operations allow access or
    modification of lazy objects without triggering initialization:
   </p>

   <ul class="simplelist">
    <li>
     Marking properties as non-lazy with
     <span class="methodname"><a href="reflectionproperty.skiplazyinitialization.php" class="methodname">ReflectionProperty::skipLazyInitialization()</a></span> or
     <span class="methodname"><a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php" class="methodname">ReflectionProperty::setRawValueWithoutLazyInitialization()</a></span>.
    </li>
    <li>
     Retrieving the internal representation of properties using
     <span class="function"><a href="function.get-mangled-object-vars.php" class="function">get_mangled_object_vars()</a></span> or by
     <a href="language.types.array.php#language.types.array.casting" class="link">casting the object to an
     array</a>.
    </li>
    <li>
     Using <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span> when
     <strong><code><a href="class.reflectionclass.php#reflectionclass.constants.skip-initialization-on-serialize">ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE</a></code></strong>
     is set, unless
     <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a> or
     <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a> trigger initialization.
    </li>
    <li>
     Calling to <span class="methodname"><strong>ReflectionObject::__toString()</strong></span>.
    </li>
    <li>
     Using <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span> or
     <span class="function"><a href="function.debug-zval-dump.php" class="function">debug_zval_dump()</a></span>, unless
     <a href="language.oop5.magic.php#object.debuginfo" class="link">__debugInfo()</a> triggers
     initialization.
    </li>
   </ul>
  </div>
 </div>

 <div class="sect2" id="language.oop5.lazy-objects.initialization-sequence">
  <h3 class="title">Initialization Sequence</h3>

  <p class="simpara">
   This section outlines the sequence of operations performed when
   initialization is triggered, based on the strategy in use.
  </p>

  <div class="sect3">
   <h4 class="title">Ghost Objects</h4>
   <ul class="simplelist">
    <li>
     The object is marked as non-lazy.
    </li>
    <li>
     Properties not initialized with
     <span class="methodname"><a href="reflectionproperty.skiplazyinitialization.php" class="methodname">ReflectionProperty::skipLazyInitialization()</a></span> or
     <span class="methodname"><a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php" class="methodname">ReflectionProperty::setRawValueWithoutLazyInitialization()</a></span>
     are set to their default values, if any. At this stage, the object
     resembles one created with
     <span class="methodname"><a href="reflectionclass.newinstancewithoutconstructor.php" class="methodname">ReflectionClass::newInstanceWithoutConstructor()</a></span>,
     except for already initialized properties.
    </li>
    <li>
     The initializer function is then called with the object as its first
     parameter. The function is expected, but not required, to initialize
     the object state, and must return <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> or no value. The object is no
     longer lazy at this point, so the function can access its properties
     directly.
    </li>
   </ul>
   <p class="simpara">
    After initialization, the object is indistinguishable from an object that
    was never lazy.
   </p>
  </div>

  <div class="sect3">
   <h4 class="title">Proxy Objects</h4>
   <ul class="simplelist">
    <li>
     The object is marked as non-lazy.
    </li>
    <li>
     Unlike ghost objects, the properties of the object are not modified at
     this stage.
    </li>
    <li>
     The factory function is called with the object as its first parameter and
     must return a non-lazy instance of a compatible class (see
     <span class="methodname"><a href="reflectionclass.newlazyproxy.php" class="methodname">ReflectionClass::newLazyProxy()</a></span>).
    </li>
    <li>
     The returned instance is referred to as the <em>real
     instance</em> and is attached to the proxy.
    </li>
    <li>
     The proxy's property values are discarded as though
     <span class="function"><a href="function.unset.php" class="function">unset()</a></span> was called.
    </li>
   </ul>
   <p class="simpara">
    After initialization, accessing any property on the proxy will
    yield the same result as accessing the corresponding property on
    the real instance; all property accesses on the proxy are forwarded
    to the real instance, including declared, dynamic, non-existing, or
    properties marked with
    <span class="methodname"><a href="reflectionproperty.skiplazyinitialization.php" class="methodname">ReflectionProperty::skipLazyInitialization()</a></span> or
    <span class="methodname"><a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php" class="methodname">ReflectionProperty::setRawValueWithoutLazyInitialization()</a></span>.
   </p>
   <p class="simpara">
    The proxy object itself is <em>not</em> replaced or substituted
    for the real instance.
   </p>
   <p class="simpara">
    While the factory receives the proxy as its first parameter, it is
    not expected to modify it (modifications are allowed but will be lost
    during the final initialization step). However, the proxy can be used
    for decisions based on the values of initialized properties, the class,
    the object itself, or its identity. For instance, the initializer might
    use an initialized property&#039;s value when creating the real instance.
   </p>
  </div>

  <div class="sect3">
   <h4 class="title">Common Behavior</h4>

   <p class="simpara">
    The scope and <var class="varname">$this</var> context of the initializer or factory
    function remains unchanged, and usual visibility constraints apply.
   </p>

   <p class="simpara">
    After successful initialization, the initializer or factory function
    is no longer referenced by the object and may be released if it has no
    other references.
   </p>

   <p class="simpara">
    If the initializer throws an exception, the object state is reverted to its
    pre-initialization state and the object is marked as lazy again. In other
    words, all effects on the object itself are reverted. Other side effects,
    such as effects on other objects, are not reverted. This prevents
    exposing a partially initialized instance in case of failure.
   </p>
  </div>
 </div>

 <div class="sect2" id="language.oop5.lazy-objects.cloning">
  <h3 class="title">Cloning</h3>

  <p class="simpara">
   <a href="language.oop5.cloning.php" class="link">Cloning</a>
   a lazy object triggers its initialization before the clone is
   created, resulting in an initialized object.
  </p>

  <p class="simpara">
   For proxy objects, both the proxy and its real instance are cloned, and
   the clone of the proxy is returned.
   The <a href="language.oop5.cloning.php#object.clone" class="link"><code class="literal">__clone</code></a> method
   is called on the real instance, not on the proxy.
   The cloned proxy and real instance are linked as they are during
   initialization, so accesses to the proxy clone are forwarded to the real
   instance clone.
  </p>

  <p class="simpara">
   This behavior ensures that the clone and the original object maintain
   separate states. Changes to the original object or its initializer&#039;s state
   after cloning do not affect the clone. Cloning both the proxy and its real
   instance, rather than returning a clone of the real instance alone, ensures
   that the clone operation consistently returns an object of the same class.
  </p>
 </div>

 <div class="sect2" id="language.oop5.lazy-objects.destructors">
  <h3 class="title">Destructors</h3>

  <p class="simpara">
   For lazy ghosts, the destructor is only called if the object has been
   initialized. For proxies, the destructor is only called on the real instance,
   if one exists.
  </p>

  <p class="simpara">
   The <span class="methodname"><a href="reflectionclass.resetaslazyghost.php" class="methodname">ReflectionClass::resetAsLazyGhost()</a></span> and
   <span class="methodname"><a href="reflectionclass.resetaslazyproxy.php" class="methodname">ReflectionClass::resetAsLazyProxy()</a></span> methods may invoke
   the destructor of the object being reset.
  </p>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/lazy-objects.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.lazy-objects%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.lazy-objects&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.lazy-objects.php">＋<small>add a note</small></a></span>
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
                                                <li class="current">
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
