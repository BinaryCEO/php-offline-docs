<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: is_a - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.is-a.php">
 <link rel="shorturl" href="https://www.php.net/is-a">
 <link rel="alternate" href="https://www.php.net/is-a" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.classobj.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.interface-exists.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-subclass-of.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.is-a.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.is-a.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.is-a.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.is-a.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.is-a.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.is-a.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.is-a.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.is-a.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.is-a.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.is-a.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.is-a.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Checks whether the object is of a given type or subtype" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: is_a - Manual" />
<meta name="twitter:description" content="Checks whether the object is of a given type or subtype" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: is_a - Manual" />
<meta itemprop="description" content="Checks whether the object is of a given type or subtype" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Checks whether the object is of a given type or subtype" />

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
        <a href="function.is-subclass-of.php">
          is_subclass_of &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.interface-exists.php">
          &laquo; interface_exists        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.classobj.php'>Classes/Objects</a></li>      <li><a href='ref.classobj.php'>Classes/Object Functions</a></li>      </ul>
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
            <option value='en/function.is-a.php' selected="selected">English</option>
            <option value='de/function.is-a.php'>German</option>
            <option value='es/function.is-a.php'>Spanish</option>
            <option value='fr/function.is-a.php'>French</option>
            <option value='it/function.is-a.php'>Italian</option>
            <option value='ja/function.is-a.php'>Japanese</option>
            <option value='pt_BR/function.is-a.php'>Brazilian Portuguese</option>
            <option value='ru/function.is-a.php'>Russian</option>
            <option value='tr/function.is-a.php'>Turkish</option>
            <option value='uk/function.is-a.php'>Ukrainian</option>
            <option value='zh/function.is-a.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.is-a" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">is_a</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">is_a</span> &mdash; <span class="dc-title">Checks whether the object is of a given type or subtype</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.is-a-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>is_a</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$object_or_class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$allow_string</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Determines if the given <code class="parameter">object_or_class</code> is the
   <code class="parameter">class</code> object type,
   or has <code class="parameter">class</code> as one of its supertypes.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.is-a-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">object_or_class</code></dt>
     <dd>
      <p class="para">
       A class name or an object instance.
      </p>
     </dd>
    
    
     <dt><code class="parameter">class</code></dt>
     <dd>
      <p class="para">
       The class or interface name
      </p>
     </dd>
    
    
     <dt><code class="parameter">allow_string</code></dt>
     <dd>
      <p class="para">
       If this parameter set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, string class name as <code class="parameter">object_or_class</code>
       is not allowed. This also prevents from calling autoloader if the class doesn&#039;t exist.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.is-a-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">object_or_class</code> is the
   <code class="parameter">class</code> object type,
   or has <code class="parameter">class</code> as one of its supertypes, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.is-a-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5355">
    <p><strong>Example #1 <span class="function"><strong>is_a()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// define a class<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">WidgetFactory<br /></span><span style="color: #007700">{<br />  var </span><span style="color: #0000BB">$oink </span><span style="color: #007700">= </span><span style="color: #DD0000">'moo'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// create a new object<br /></span><span style="color: #0000BB">$WF </span><span style="color: #007700">= new </span><span style="color: #0000BB">WidgetFactory</span><span style="color: #007700">();<br /><br />if (</span><span style="color: #0000BB">is_a</span><span style="color: #007700">(</span><span style="color: #0000BB">$WF</span><span style="color: #007700">, </span><span style="color: #DD0000">'WidgetFactory'</span><span style="color: #007700">)) {<br />  echo </span><span style="color: #DD0000">"yes, \$WF is still a WidgetFactory\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-5356">
    <p><strong>Example #2 Using the <em>instanceof</em> operator</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// define a class<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">WidgetFactory<br /></span><span style="color: #007700">{<br />  var </span><span style="color: #0000BB">$oink </span><span style="color: #007700">= </span><span style="color: #DD0000">'moo'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// create a new object<br /></span><span style="color: #0000BB">$WF </span><span style="color: #007700">= new </span><span style="color: #0000BB">WidgetFactory</span><span style="color: #007700">();<br /><br />if (</span><span style="color: #0000BB">$WF </span><span style="color: #007700">instanceof </span><span style="color: #0000BB">WidgetFactory</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Yes, $WF is a WidgetFactory'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.is-a-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-class.php" class="function" rel="rdfs-seeAlso">get_class()</a> - Returns the name of the class of an object</span></li>
    <li><span class="function"><a href="function.get-parent-class.php" class="function" rel="rdfs-seeAlso">get_parent_class()</a> - Retrieves the parent class name for object or class</span></li>
    <li><span class="function"><a href="function.is-subclass-of.php" class="function" rel="rdfs-seeAlso">is_subclass_of()</a> - Checks if the object has this class as one of its parents or implements it</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/classobj/functions/is-a.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.is-a%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.is-a&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-a.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119972">  <div class="votes">
    <div id="Vu119972">
    <a href="/manual/vote-note.php?id=119972&amp;page=function.is-a&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119972">
    <a href="/manual/vote-note.php?id=119972&amp;page=function.is-a&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119972" title="87% like this...">
    73
    </div>
  </div>
  <a href="#119972" class="name">
  <strong class="user"><em>Ronald Locke</em></strong></a><a class="genanchor" href="#119972"> &para;</a><div class="date" title="2016-09-30 02:19"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom119972">
<div class="phpcode"><code><span class="html">Please note that you have to fully qualify the class name in the second parameter. <br /><br />A use statement will not resolve namespace dependencies in that is_a() function. <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">namespace </span><span class="default">foo\bar</span><span class="keyword">;<br /><br />class </span><span class="default">A </span><span class="keyword">{};<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{};<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">har\var</span><span class="keyword">;<br /><br />use </span><span class="default">foo\bar\A</span><span class="keyword">;<br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">foo\bar\B</span><span class="keyword">();<br /><br /></span><span class="default">is_a</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">, </span><span class="string">'A'</span><span class="keyword">); </span><span class="comment">// returns false;<br /></span><span class="default">is_a</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">, </span><span class="string">'foo\bar\A'</span><span class="keyword">); </span><span class="comment">// returns true;<br /></span><span class="default">?&gt;<br /></span><br />Just adding that note here because all examples are without namespaces.</span></code></div>
  </div>
 </div>
  <div class="note" id="105684">  <div class="votes">
    <div id="Vu105684">
    <a href="/manual/vote-note.php?id=105684&amp;page=function.is-a&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105684">
    <a href="/manual/vote-note.php?id=105684&amp;page=function.is-a&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105684" title="84% like this...">
    34
    </div>
  </div>
  <a href="#105684" class="name">
  <strong class="user"><em>Aron Budinszky</em></strong></a><a class="genanchor" href="#105684"> &para;</a><div class="date" title="2011-09-07 04:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105684">
<div class="phpcode"><code><span class="html">Be careful! Starting in PHP 5.3.7 the behavior of is_a() has changed slightly: when calling is_a() with a first argument that is not an object, __autoload() is triggered!<br /><br />In practice, this means that calling is_a('23', 'User'); will trigger __autoload() on "23". Previously, the above statement simply returned 'false'.<br /><br />More info can be found here:<br /><a href="https://bugs.php.net/bug.php?id=55475" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=55475</a><br /><br />Whether this change is considered a bug and whether it will be reverted or kept in future versions is yet to be determined, but nevertheless it is how it is, for now...</span></code></div>
  </div>
 </div>
  <div class="note" id="72363">  <div class="votes">
    <div id="Vu72363">
    <a href="/manual/vote-note.php?id=72363&amp;page=function.is-a&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72363">
    <a href="/manual/vote-note.php?id=72363&amp;page=function.is-a&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72363" title="82% like this...">
    18
    </div>
  </div>
  <a href="#72363" class="name">
  <strong class="user"><em>p dot scheit at zweipol dot net</em></strong></a><a class="genanchor" href="#72363"> &para;</a><div class="date" title="2007-01-16 01:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72363">
<div class="phpcode"><code><span class="html">At least in PHP 5.1.6 this works as well with Interfaces.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">test </span><span class="keyword">{<br />  public function </span><span class="default">A</span><span class="keyword">();<br />}<br /><br />class </span><span class="default">TestImplementor </span><span class="keyword">implements </span><span class="default">test </span><span class="keyword">{<br />  public function </span><span class="default">A </span><span class="keyword">() {<br />    print </span><span class="string">"A"</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$testImpl </span><span class="keyword">= new </span><span class="default">TestImplementor</span><span class="keyword">();<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_a</span><span class="keyword">(</span><span class="default">$testImpl</span><span class="keyword">,</span><span class="string">'test'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />will return true</span></code></div>
  </div>
 </div>
  <div class="note" id="57501">  <div class="votes">
    <div id="Vu57501">
    <a href="/manual/vote-note.php?id=57501&amp;page=function.is-a&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57501">
    <a href="/manual/vote-note.php?id=57501&amp;page=function.is-a&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57501" title="65% like this...">
    11
    </div>
  </div>
  <a href="#57501" class="name">
  <strong class="user"><em>cesoid at yahoo dot com</em></strong></a><a class="genanchor" href="#57501"> &para;</a><div class="date" title="2005-10-05 07:01"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57501">
<div class="phpcode"><code><span class="html">is_a returns TRUE for instances of children of the class.<br /><br />For example:<br /><br />class Animal<br />{}<br /><br />class Dog extends Animal<br />{}<br /><br />$test = new Dog();<br /><br />In this example is_a($test, "Animal") would evaluate to TRUE as well as is_a($test, "Dog").<br /><br />This seemed intuitive to me, but did not seem to be documented.</span></code></div>
  </div>
 </div>
  <div class="note" id="122252">  <div class="votes">
    <div id="Vu122252">
    <a href="/manual/vote-note.php?id=122252&amp;page=function.is-a&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122252">
    <a href="/manual/vote-note.php?id=122252&amp;page=function.is-a&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122252" title="66% like this...">
    3
    </div>
  </div>
  <a href="#122252" class="name">
  <strong class="user"><em>dkrupyanskiy[at]gmail</em></strong></a><a class="genanchor" href="#122252"> &para;</a><div class="date" title="2018-01-10 09:36"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122252">
<div class="phpcode"><code><span class="html">Looks like the function signature given in description is wrong. Actually it can take a string  as a first parameter in the case if $allow_string is set to true. <br /><br />It took some time to find out how the last parameter should be used. Please consider the following example<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Foo</span><span class="keyword">{}<br /><br /></span><span class="default">spl_autoload_register</span><span class="keyword">(<br />    function(</span><span class="default">$classname</span><span class="keyword">){<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">'autoload has been triggered for %s%s'</span><span class="keyword">, </span><span class="default">$classname</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">);<br />    }<br />);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_a</span><span class="keyword">(</span><span class="string">'UndefinedClassName'</span><span class="keyword">, </span><span class="default">Foo</span><span class="keyword">::class, </span><span class="default">true</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127930">  <div class="votes">
    <div id="Vu127930">
    <a href="/manual/vote-note.php?id=127930&amp;page=function.is-a&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127930">
    <a href="/manual/vote-note.php?id=127930&amp;page=function.is-a&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127930" title="63% like this...">
    3
    </div>
  </div>
  <a href="#127930" class="name">
  <strong class="user"><em>SlimDeluxe</em></strong></a><a class="genanchor" href="#127930"> &para;</a><div class="date" title="2022-11-14 03:52"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127930">
<div class="phpcode"><code><span class="html">For anyone wondering, this does not work with traits :(</span></code></div>
  </div>
 </div>
  <div class="note" id="107181">  <div class="votes">
    <div id="Vu107181">
    <a href="/manual/vote-note.php?id=107181&amp;page=function.is-a&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107181">
    <a href="/manual/vote-note.php?id=107181&amp;page=function.is-a&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107181" title="54% like this...">
    2
    </div>
  </div>
  <a href="#107181" class="name">
  <strong class="user"><em>eitan at mosenkis dot net</em></strong></a><a class="genanchor" href="#107181"> &para;</a><div class="date" title="2012-01-12 01:09"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107181">
<div class="phpcode"><code><span class="html">As of PHP 5.3.9, is_a() seems to return false when passed a string for the first argument. Instead, use is_subclass_of() and, if necessary for your purposes, also check if the two arguments are equal, since is_subclass_of('foo', 'foo') will return false, while is_a('foo', 'foo') used to return true.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.is-a&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-a.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.classobj.php">Classes/Object Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-alias.php" title="class_&#8203;alias">class_&#8203;alias</a>
                        </li>
                                                <li class="">
                            <a href="function.class-exists.php" title="class_&#8203;exists">class_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.enum-exists.php" title="enum_&#8203;exists">enum_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.get-called-class.php" title="get_&#8203;called_&#8203;class">get_&#8203;called_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class.php" title="get_&#8203;class">get_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class-methods.php" title="get_&#8203;class_&#8203;methods">get_&#8203;class_&#8203;methods</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class-vars.php" title="get_&#8203;class_&#8203;vars">get_&#8203;class_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-classes.php" title="get_&#8203;declared_&#8203;classes">get_&#8203;declared_&#8203;classes</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-interfaces.php" title="get_&#8203;declared_&#8203;interfaces">get_&#8203;declared_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-traits.php" title="get_&#8203;declared_&#8203;traits">get_&#8203;declared_&#8203;traits</a>
                        </li>
                                                <li class="">
                            <a href="function.get-mangled-object-vars.php" title="get_&#8203;mangled_&#8203;object_&#8203;vars">get_&#8203;mangled_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-object-vars.php" title="get_&#8203;object_&#8203;vars">get_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-parent-class.php" title="get_&#8203;parent_&#8203;class">get_&#8203;parent_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.interface-exists.php" title="interface_&#8203;exists">interface_&#8203;exists</a>
                        </li>
                                                <li class="current">
                            <a href="function.is-a.php" title="is_&#8203;a">is_&#8203;a</a>
                        </li>
                                                <li class="">
                            <a href="function.is-subclass-of.php" title="is_&#8203;subclass_&#8203;of">is_&#8203;subclass_&#8203;of</a>
                        </li>
                                                <li class="">
                            <a href="function.method-exists.php" title="method_&#8203;exists">method_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.property-exists.php" title="property_&#8203;exists">property_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.trait-exists.php" title="trait_&#8203;exists">trait_&#8203;exists</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.autoload.php" title="_&#8203;_&#8203;autoload">_&#8203;_&#8203;autoload</a>
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
