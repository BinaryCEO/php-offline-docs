<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionClass::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reflectionclass.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reflectionclass.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reflectionclass.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.reflectionclass.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.reflectionclass.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionclass.export.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reflectionclass.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reflectionclass.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reflectionclass.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reflectionclass.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reflectionclass.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reflectionclass.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reflectionclass.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reflectionclass.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reflectionclass.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reflectionclass.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reflectionclass.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Constructs a ReflectionClass" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionClass::__construct - Manual" />
<meta name="twitter:description" content="Constructs a ReflectionClass" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionClass::__construct - Manual" />
<meta itemprop="description" content="Constructs a ReflectionClass" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Constructs a ReflectionClass" />

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
        <a href="reflectionclass.export.php">
          ReflectionClass::export &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.reflectionclass.php">
          &laquo; ReflectionClass        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.reflection.php'>Reflection</a></li>      <li><a href='class.reflectionclass.php'>ReflectionClass</a></li>      </ul>
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
            <option value='en/reflectionclass.construct.php' selected="selected">English</option>
            <option value='de/reflectionclass.construct.php'>German</option>
            <option value='es/reflectionclass.construct.php'>Spanish</option>
            <option value='fr/reflectionclass.construct.php'>French</option>
            <option value='it/reflectionclass.construct.php'>Italian</option>
            <option value='ja/reflectionclass.construct.php'>Japanese</option>
            <option value='pt_BR/reflectionclass.construct.php'>Brazilian Portuguese</option>
            <option value='ru/reflectionclass.construct.php'>Russian</option>
            <option value='tr/reflectionclass.construct.php'>Turkish</option>
            <option value='uk/reflectionclass.construct.php'>Ukrainian</option>
            <option value='zh/reflectionclass.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reflectionclass.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ReflectionClass::__construct</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionClass::__construct</span> &mdash; <span class="dc-title">Constructs a ReflectionClass</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-reflectionclass.construct-description">
  <h3 class="title">Description</h3>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ReflectionClass::__construct</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$objectOrClass</code></span>)</div>

  <p class="para rdfs-comment">
   Constructs a new <span class="classname"><a href="class.reflectionclass.php" class="classname">ReflectionClass</a></span> object.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-reflectionclass.construct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">objectOrClass</code></dt>
     <dd>
      <p class="para">
       Either a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing the name of the class to
       reflect, or an <span class="type"><a href="language.types.object.php" class="type object">object</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-reflectionclass.construct-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws <span class="classname"><a href="class.reflectionexception.php" class="classname">ReflectionException</a></span> if the class to reflect does not exist.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-reflectionclass.construct-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5467">
    <p><strong>Example #1 Basic usage ReflectionClass</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$reflection </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'Exception'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$reflection</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Class [ &lt;internal:Core&gt; class Exception implements Stringable, Throwable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [7] {
    Property [ protected $message = &#039;&#039; ]
    Property [ private string $string = &#039;&#039; ]
    Property [ protected $code = 0 ]
    Property [ protected string $file = &#039;&#039; ]
    Property [ protected int $line = 0 ]
    Property [ private array $trace = [] ]
    Property [ private ?Throwable $previous = NULL ]
  }

  - Methods [11] {
    Method [ &lt;internal:Core&gt; private method __clone ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ &lt;internal:Core, ctor&gt; public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ &lt;optional&gt; string $message = &quot;&quot; ]
        Parameter #1 [ &lt;optional&gt; int $code = 0 ]
        Parameter #2 [ &lt;optional&gt; ?Throwable $previous = null ]
      }
    }

    Method [ &lt;internal:Core&gt; public method __wakeup ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ &lt;internal:Core, prototype Throwable&gt; final public method getMessage ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ &lt;internal:Core, prototype Throwable&gt; final public method getCode ] {

      - Parameters [0] {
      }
    }

    Method [ &lt;internal:Core, prototype Throwable&gt; final public method getFile ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ &lt;internal:Core, prototype Throwable&gt; final public method getLine ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ &lt;internal:Core, prototype Throwable&gt; final public method getTrace ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ &lt;internal:Core, prototype Throwable&gt; final public method getPrevious ] {

      - Parameters [0] {
      }
      - Return [ ?Throwable ]
    }

    Method [ &lt;internal:Core, prototype Throwable&gt; final public method getTraceAsString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ &lt;internal:Core, prototype Stringable&gt; public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-reflectionclass.construct-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="reflectionobject.construct.php" class="methodname" rel="rdfs-seeAlso">ReflectionObject::__construct()</a> - Constructs a ReflectionObject</span></li>
    <li><a href="language.oop5.decon.php#language.oop5.decon.constructor" class="link">Constructors</a></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionclass/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freflectionclass.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reflectionclass.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionclass.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117332">  <div class="votes">
    <div id="Vu117332">
    <a href="/manual/vote-note.php?id=117332&amp;page=reflectionclass.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117332">
    <a href="/manual/vote-note.php?id=117332&amp;page=reflectionclass.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117332" title="88% like this...">
    13
    </div>
  </div>
  <a href="#117332" class="name">
  <strong class="user"><em>danbettles at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#117332"> &para;</a><div class="date" title="2015-05-22 06:47"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117332">
<div class="phpcode"><code><span class="html">To reflect on a namespaced class in PHP 5.3, you must always specify the fully qualified name of the class - even if you've aliased the containing namespace using a "use" statement. <br /><br />So instead of: <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">use </span><span class="default">App\Core </span><span class="keyword">as </span><span class="default">Core</span><span class="keyword">; <br /></span><span class="default">$oReflectionClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'Core\Singleton'</span><span class="keyword">); <br /></span><span class="default">?&gt;</span> <br /><br />You would type: <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">use </span><span class="default">App\Core </span><span class="keyword">as </span><span class="default">Core</span><span class="keyword">; <br /></span><span class="default">$oReflectionClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'App\Core\Singleton'</span><span class="keyword">); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113548">  <div class="votes">
    <div id="Vu113548">
    <a href="/manual/vote-note.php?id=113548&amp;page=reflectionclass.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113548">
    <a href="/manual/vote-note.php?id=113548&amp;page=reflectionclass.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113548" title="72% like this...">
    5
    </div>
  </div>
  <a href="#113548" class="name">
  <strong class="user"><em>me [at] klay [dot] me</em></strong></a><a class="genanchor" href="#113548"> &para;</a><div class="date" title="2013-10-28 11:09"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113548">
<div class="phpcode"><code><span class="html">Example of usage:<br /><br />    public static function getClassData($class)<br />    {<br />        // Trying to create a new object of ReflectionClass class<br />        $class = new ReflectionClass($class);<br /><br />        $details = sprintf('%s - %s%s%s%s%s%s%s%s',<br />            $class-&gt;getName(),<br />            $class-&gt;isInternal()     ? 'internal class,' : 'user-defined class,',<br />            $class-&gt;isTrait()        ? '  is trait,'  : '',<br />            $class-&gt;isInterface()    ? '  is interface,'  : '',<br />            $class-&gt;isAbstract()     ? '  is abstract,'  : '',<br />            $class-&gt;isFinal()        ? '  is final,'  : '',<br />            $class-&gt;isCloneable()    ? '  is cloneable,'  : '',<br />            $class-&gt;isInstantiable() ? ' is instantiable,'  : '',<br />            $class-&gt;isIterateable()  ? ' is iterable  : ''<br />        );<br /><br />        return '&lt;pre class="debug"&gt;' . rtrim($details, ',') . '&lt;/pre&gt;';<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="107310">  <div class="votes">
    <div id="Vu107310">
    <a href="/manual/vote-note.php?id=107310&amp;page=reflectionclass.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107310">
    <a href="/manual/vote-note.php?id=107310&amp;page=reflectionclass.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107310" title="61% like this...">
    3
    </div>
  </div>
  <a href="#107310" class="name">
  <strong class="user"><em>gafisher at griasolutions dot com</em></strong></a><a class="genanchor" href="#107310"> &para;</a><div class="date" title="2012-01-30 01:23"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107310">
<div class="phpcode"><code><span class="html">Running the following code on Windows Vista (I know, I know), PHP 5.3.9, the ReflectionClass constructor actually throws a ReflectionException when the desired class cannot be instantiated:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">try {<br />        </span><span class="default">$ReflectedClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'NonExist'</span><span class="keyword">);<br />    } catch (</span><span class="default">LogicException $Exception</span><span class="keyword">) {<br />        die(</span><span class="string">'Not gonna make it in here...'</span><span class="keyword">);<br />    } catch (</span><span class="default">ReflectionException $Exception</span><span class="keyword">) {<br />        die(</span><span class="string">'Your class does not exist!'</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95829">  <div class="votes">
    <div id="Vu95829">
    <a href="/manual/vote-note.php?id=95829&amp;page=reflectionclass.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95829">
    <a href="/manual/vote-note.php?id=95829&amp;page=reflectionclass.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95829" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95829" class="name">
  <strong class="user"><em>ivo at jansch dot nl</em></strong></a><a class="genanchor" href="#95829"> &para;</a><div class="date" title="2010-01-24 04:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95829">
<div class="phpcode"><code><span class="html">It's very useful to know that you can also use the ReflectionClass to inspect interfaces, even thouth Interfaces are not classes. Example:
<br />
<br /><span class="default">&lt;?php
<br />
<br />  </span><span class="keyword">interface </span><span class="default">Edible
<br />  </span><span class="keyword">{
<br />    public function </span><span class="default">eat</span><span class="keyword">();
<br />  }
<br />
<br />  </span><span class="default">$refl </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">"Edible"</span><span class="keyword">);
<br />  </span><span class="default">$methods </span><span class="keyword">= </span><span class="default">$refl</span><span class="keyword">-&gt;</span><span class="default">getMethods</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />[Edit by danbrown AT php DOT net - Contains a bugfix by (dbl AT bnet DOT com) on 18-AUG-2010 with the following message: "underline had to be removed for it to work ( new Reflection_Class -&gt; new ReflectionClass )"]</span></code></div>
  </div>
 </div>
  <div class="note" id="104384">  <div class="votes">
    <div id="Vu104384">
    <a href="/manual/vote-note.php?id=104384&amp;page=reflectionclass.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104384">
    <a href="/manual/vote-note.php?id=104384&amp;page=reflectionclass.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104384" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#104384" class="name">
  <strong class="user"><em>cspray at gmail dot com</em></strong></a><a class="genanchor" href="#104384"> &para;</a><div class="date" title="2011-06-12 07:14"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104384">
<div class="phpcode"><code><span class="html">Useful to know that if you pass a string into the construct and the class cannot be instantiated for some reason a SPL LogicException will be thrown. <br /><br />This code was ran on a Mac OS X 10.6.7, AMP, PHP 5.3+<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">//  index.php<br />    </span><span class="keyword">try {<br />        </span><span class="default">$ReflectedClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'NonExist'</span><span class="keyword">);<br />    } catch (</span><span class="default">LogicException $logicDuh</span><span class="keyword">) {<br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$logicDuh</span><span class="keyword">);<br />    }<br />    <br /></span><span class="default">?&gt;<br /></span><br />Will return a deeply nested array full of useful information about the error.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reflectionclass.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionclass.construct.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.reflectionclass.php">ReflectionClass</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="reflectionclass.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getattributes.php" title="getAttributes">getAttributes</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getconstant.php" title="getConstant">getConstant</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getconstants.php" title="getConstants">getConstants</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getconstructor.php" title="getConstructor">getConstructor</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getdefaultproperties.php" title="getDefaultProperties">getDefaultProperties</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getdoccomment.php" title="getDocComment">getDocComment</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getendline.php" title="getEndLine">getEndLine</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getextension.php" title="getExtension">getExtension</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getextensionname.php" title="getExtensionName">getExtensionName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getfilename.php" title="getFileName">getFileName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getinterfacenames.php" title="getInterfaceNames">getInterfaceNames</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getinterfaces.php" title="getInterfaces">getInterfaces</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getlazyinitializer.php" title="getLazyInitializer">getLazyInitializer</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getmethod.php" title="getMethod">getMethod</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getmethods.php" title="getMethods">getMethods</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getmodifiers.php" title="getModifiers">getModifiers</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getname.php" title="getName">getName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getnamespacename.php" title="getNamespaceName">getNamespaceName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getparentclass.php" title="getParentClass">getParentClass</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getproperties.php" title="getProperties">getProperties</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getproperty.php" title="getProperty">getProperty</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getreflectionconstant.php" title="getReflectionConstant">getReflectionConstant</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getreflectionconstants.php" title="getReflectionConstants">getReflectionConstants</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getshortname.php" title="getShortName">getShortName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getstartline.php" title="getStartLine">getStartLine</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getstaticproperties.php" title="getStaticProperties">getStaticProperties</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.getstaticpropertyvalue.php" title="getStaticPropertyValue">getStaticPropertyValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.gettraitaliases.php" title="getTraitAliases">getTraitAliases</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.gettraitnames.php" title="getTraitNames">getTraitNames</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.gettraits.php" title="getTraits">getTraits</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.hasconstant.php" title="hasConstant">hasConstant</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.hasmethod.php" title="hasMethod">hasMethod</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.hasproperty.php" title="hasProperty">hasProperty</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.implementsinterface.php" title="implementsInterface">implementsInterface</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.initializelazyobject.php" title="initializeLazyObject">initializeLazyObject</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.innamespace.php" title="inNamespace">inNamespace</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isabstract.php" title="isAbstract">isAbstract</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isanonymous.php" title="isAnonymous">isAnonymous</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.iscloneable.php" title="isCloneable">isCloneable</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isenum.php" title="isEnum">isEnum</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isfinal.php" title="isFinal">isFinal</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isinstance.php" title="isInstance">isInstance</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isinstantiable.php" title="isInstantiable">isInstantiable</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isinterface.php" title="isInterface">isInterface</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isinternal.php" title="isInternal">isInternal</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isiterable.php" title="isIterable">isIterable</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isiterateable.php" title="isIterateable">isIterateable</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isreadonly.php" title="isReadOnly">isReadOnly</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.issubclassof.php" title="isSubclassOf">isSubclassOf</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.istrait.php" title="isTrait">isTrait</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isuninitializedlazyobject.php" title="isUninitializedLazyObject">isUninitializedLazyObject</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.isuserdefined.php" title="isUserDefined">isUserDefined</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.marklazyobjectasinitialized.php" title="markLazyObjectAsInitialized">markLazyObjectAsInitialized</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newinstance.php" title="newInstance">newInstance</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newinstanceargs.php" title="newInstanceArgs">newInstanceArgs</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newinstancewithoutconstructor.php" title="newInstanceWithoutConstructor">newInstanceWithoutConstructor</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newlazyghost.php" title="newLazyGhost">newLazyGhost</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.newlazyproxy.php" title="newLazyProxy">newLazyProxy</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.resetaslazyghost.php" title="resetAsLazyGhost">resetAsLazyGhost</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.resetaslazyproxy.php" title="resetAsLazyProxy">resetAsLazyProxy</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.setstaticpropertyvalue.php" title="setStaticPropertyValue">setStaticPropertyValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionclass.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="reflectionclass.export.php" title="export">export</a>
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
