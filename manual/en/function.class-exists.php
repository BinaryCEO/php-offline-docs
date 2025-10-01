<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: class_exists - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.class-exists.php">
 <link rel="shorturl" href="https://www.php.net/class-exists">
 <link rel="alternate" href="https://www.php.net/class-exists" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.classobj.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.class-alias.php">
 <link rel="next" href="https://www.php.net/manual/en/function.enum-exists.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.class-exists.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.class-exists.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.class-exists.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.class-exists.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.class-exists.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.class-exists.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.class-exists.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.class-exists.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.class-exists.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.class-exists.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.class-exists.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Checks if the class has been defined" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: class_exists - Manual" />
<meta name="twitter:description" content="Checks if the class has been defined" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: class_exists - Manual" />
<meta itemprop="description" content="Checks if the class has been defined" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Checks if the class has been defined" />

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
        <a href="function.enum-exists.php">
          enum_exists &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.class-alias.php">
          &laquo; class_alias        </a>
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
            <option value='en/function.class-exists.php' selected="selected">English</option>
            <option value='de/function.class-exists.php'>German</option>
            <option value='es/function.class-exists.php'>Spanish</option>
            <option value='fr/function.class-exists.php'>French</option>
            <option value='it/function.class-exists.php'>Italian</option>
            <option value='ja/function.class-exists.php'>Japanese</option>
            <option value='pt_BR/function.class-exists.php'>Brazilian Portuguese</option>
            <option value='ru/function.class-exists.php'>Russian</option>
            <option value='tr/function.class-exists.php'>Turkish</option>
            <option value='uk/function.class-exists.php'>Ukrainian</option>
            <option value='zh/function.class-exists.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.class-exists" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">class_exists</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">class_exists</span> &mdash; <span class="dc-title">Checks if the class has been defined</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.class-exists-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>class_exists</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$autoload</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function checks whether or not the given class has been defined.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.class-exists-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">class</code></dt>
     <dd>
      <p class="para">
       The class name. The name is matched in a case-insensitive manner.
      </p>
     </dd>
    
    
     <dt><code class="parameter">autoload</code></dt>
     <dd>
      <p class="para">
       Whether to <a href="language.oop5.autoload.php" class="link">autoload</a>
       if not already loaded.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.class-exists-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">class</code> is a defined class,
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.class-exists-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5339">
    <p><strong>Example #1 <span class="function"><strong>class_exists()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Check that the class exists before trying to use it<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'MyClass'</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$myclass </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-5340">
    <p><strong>Example #2 <code class="parameter">autoload</code> parameter example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />spl_autoload_register</span><span style="color: #007700">(function (</span><span style="color: #0000BB">$class_name</span><span style="color: #007700">) {<br />    include </span><span style="color: #0000BB">$class_name </span><span style="color: #007700">. </span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// Check to see whether the include declared the class<br />    </span><span style="color: #007700">if (!</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$class_name</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">)) {<br />        throw new </span><span style="color: #0000BB">LogicException</span><span style="color: #007700">(</span><span style="color: #DD0000">"Unable to load class: </span><span style="color: #0000BB">$class_name</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />    }<br />});<br /><br />if (</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::class)) {<br />    </span><span style="color: #0000BB">$myclass </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.class-exists-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.function-exists.php" class="function" rel="rdfs-seeAlso">function_exists()</a> - Return true if the given function has been defined</span></li>
    <li><span class="function"><a href="function.enum-exists.php" class="function" rel="rdfs-seeAlso">enum_exists()</a> - Checks if the enum has been defined</span></li>
    <li><span class="function"><a href="function.interface-exists.php" class="function" rel="rdfs-seeAlso">interface_exists()</a> - Checks if the interface has been defined</span></li>
    <li><span class="function"><a href="function.get-declared-classes.php" class="function" rel="rdfs-seeAlso">get_declared_classes()</a> - Returns an array with the name of the defined classes</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/classobj/functions/class-exists.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.class-exists%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.class-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.class-exists.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113581">  <div class="votes">
    <div id="Vu113581">
    <a href="/manual/vote-note.php?id=113581&amp;page=function.class-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113581">
    <a href="/manual/vote-note.php?id=113581&amp;page=function.class-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113581" title="72% like this...">
    51
    </div>
  </div>
  <a href="#113581" class="name">
  <strong class="user"><em>giunta dot gaetano at gmail dot com</em></strong></a><a class="genanchor" href="#113581"> &para;</a><div class="date" title="2013-10-31 05:28"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113581">
<div class="phpcode"><code><span class="html">If you are using aliasing to import namespaced classes, take care that class_exists will not work using the short, aliased class name - apparently whenever a class name is used as string, only the full-namespace version can be used<br /><br />use a\namespaced\classname as coolclass;<br /><br />class_exists( 'coolclass' ) =&gt; false</span></code></div>
  </div>
 </div>
  <div class="note" id="125366">  <div class="votes">
    <div id="Vu125366">
    <a href="/manual/vote-note.php?id=125366&amp;page=function.class-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125366">
    <a href="/manual/vote-note.php?id=125366&amp;page=function.class-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125366" title="83% like this...">
    12
    </div>
  </div>
  <a href="#125366" class="name">
  <strong class="user"><em>info at ensostudio dot ru</em></strong></a><a class="genanchor" href="#125366"> &para;</a><div class="date" title="2020-09-16 06:54"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125366">
<div class="phpcode"><code><span class="html">Note: class_exists() check only classes! <br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">DemoInterface </span><span class="keyword">{};<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">class_exists</span><span class="keyword">(</span><span class="string">'DemoInterface'</span><span class="keyword">)); </span><span class="comment">// false<br /></span><span class="keyword">trait </span><span class="default">DemoTrait </span><span class="keyword">{};<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">class_exists</span><span class="keyword">(</span><span class="string">'DemoTrait'</span><span class="keyword">)); </span><span class="comment">// false<br /></span><span class="keyword">class </span><span class="default">DemoClass </span><span class="keyword">{};<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">class_exists</span><span class="keyword">(</span><span class="string">'DemoClass'</span><span class="keyword">)); </span><span class="comment">// true<br /></span><span class="default">?&gt;<br /></span><br />Common function:<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />  * Checks if the class/trait/interface has been defined.<br />  *<br />  * @param string $name The case-insensitive name of class/trait/interface<br />  * @param bool $autoload Whether to call spl_autoload()<br />  * @return bool<br />  */<br /></span><span class="keyword">function </span><span class="default">structure_exists</span><span class="keyword">(</span><span class="default">string $name</span><span class="keyword">, </span><span class="default">bool $autoload </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">): </span><span class="default">bool<br /></span><span class="keyword">{<br />       return </span><span class="default">class_exists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">)<br />              || </span><span class="default">interface_exists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">)<br />              || </span><span class="default">trait_exists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114785">  <div class="votes">
    <div id="Vu114785">
    <a href="/manual/vote-note.php?id=114785&amp;page=function.class-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114785">
    <a href="/manual/vote-note.php?id=114785&amp;page=function.class-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114785" title="71% like this...">
    17
    </div>
  </div>
  <a href="#114785" class="name">
  <strong class="user"><em>rn at alpha9marketing dot com</em></strong></a><a class="genanchor" href="#114785"> &para;</a><div class="date" title="2014-04-06 05:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114785">
<div class="phpcode"><code><span class="html">Beware: class_exists is case-INsensitive, as is class instantiation.<br /><br />php &gt; var_dump(class_exists("DomNode"));<br />bool(true)<br />php &gt; var_dump(class_exists("DOMNode"));<br />bool(true)<br />php &gt; var_dump(class_exists("DOMNodE"));<br />bool(true)<br />php &gt; $x = new DOMNOdE();<br />php &gt; var_dump(get_class($x));<br />string(7) "DOMNode"<br /><br />(tested with PHP 5.5.10 on Linux)<br /><br />This can cause some headaches in correlating class names to file names, especially on a case-sensitive file system.</span></code></div>
  </div>
 </div>
  <div class="note" id="97619">  <div class="votes">
    <div id="Vu97619">
    <a href="/manual/vote-note.php?id=97619&amp;page=function.class-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97619">
    <a href="/manual/vote-note.php?id=97619&amp;page=function.class-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97619" title="70% like this...">
    14
    </div>
  </div>
  <a href="#97619" class="name">
  <strong class="user"><em>Klaus</em></strong></a><a class="genanchor" href="#97619"> &para;</a><div class="date" title="2010-04-28 04:21"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97619">
<div class="phpcode"><code><span class="html">If you recursively load several classes inside an autoload function (or mix manual loading and autoloading), be aware that class_exists() (as well as get_declared_classes()) does not know about classes previously loaded during the *current* autoload invocation.<br /><br />Apparently, the internal list of declared classes is only updated after the autoload function is completed.</span></code></div>
  </div>
 </div>
  <div class="note" id="129613">  <div class="votes">
    <div id="Vu129613">
    <a href="/manual/vote-note.php?id=129613&amp;page=function.class-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129613">
    <a href="/manual/vote-note.php?id=129613&amp;page=function.class-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129613" title="75% like this...">
    2
    </div>
  </div>
  <a href="#129613" class="name">
  <strong class="user"><em>sb at firstvector dot org</em></strong></a><a class="genanchor" href="#129613"> &para;</a><div class="date" title="2024-06-26 12:21"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129613">
<div class="phpcode"><code><span class="html">Beware that `\class_exists()` returns `true` for enums.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">enum </span><span class="default">Test</span><span class="keyword">: </span><span class="default">int<br /></span><span class="keyword">{<br />    case </span><span class="default">One </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    case </span><span class="default">Two </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />}<br /><br /></span><span class="default">\var_dump</span><span class="keyword">(</span><span class="default">\class_exists</span><span class="keyword">(</span><span class="default">Test</span><span class="keyword">::class)); </span><span class="comment">// bool(true)<br /></span><span class="default">?&gt;<br /></span><br />Having this in mind, the correct check for a class existence is:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is_class_exist</span><span class="keyword">(</span><span class="default">string $class</span><span class="keyword">): </span><span class="default">bool<br /></span><span class="keyword">{<br />    return </span><span class="default">\class_exists</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) &amp;&amp; !</span><span class="default">\enum_exists</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113852">  <div class="votes">
    <div id="Vu113852">
    <a href="/manual/vote-note.php?id=113852&amp;page=function.class-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113852">
    <a href="/manual/vote-note.php?id=113852&amp;page=function.class-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113852" title="66% like this...">
    13
    </div>
  </div>
  <a href="#113852" class="name">
  <strong class="user"><em>spam at wikicms dot org</em></strong></a><a class="genanchor" href="#113852"> &para;</a><div class="date" title="2013-12-09 02:43"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113852">
<div class="phpcode"><code><span class="html">Hi guys!<br />Be careful  and don't forget about second boolean argument $autoload (TRUE by default) when check exists class after spl_autoload_register. Propose short example<br />file second.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Second </span><span class="keyword">{}<br /></span><span class="default">?&gt;<br /></span>file index.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">First<br /></span><span class="keyword">{<br />    function </span><span class="default">first</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$bool</span><span class="keyword">) {<br />        </span><span class="default">spl_autoload_register</span><span class="keyword">( function(</span><span class="default">$class</span><span class="keyword">) {<br />            require </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) . </span><span class="string">'.php'</span><span class="keyword">;<br />        });<br />        echo </span><span class="default">class_exists</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$bool</span><span class="keyword">)?</span><span class="string">'Exist!!!!'</span><span class="keyword">:</span><span class="string">'Not exist!'</span><span class="keyword">;<br />    }<br />}<br /><br />new </span><span class="default">First</span><span class="keyword">(</span><span class="default">$class </span><span class="keyword">= </span><span class="string">'Second'</span><span class="keyword">, </span><span class="default">$bool </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">); </span><span class="comment">//Exist!!!!<br /></span><span class="keyword">new </span><span class="default">First</span><span class="keyword">(</span><span class="default">$class </span><span class="keyword">= </span><span class="string">'Second'</span><span class="keyword">, </span><span class="default">$bool </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">); </span><span class="comment">//Not exist!<br /></span><span class="default">?&gt;<br /></span>Because __autoload executing much earlier than boolean returned, imho..</span></code></div>
  </div>
 </div>
  <div class="note" id="82086">  <div class="votes">
    <div id="Vu82086">
    <a href="/manual/vote-note.php?id=82086&amp;page=function.class-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82086">
    <a href="/manual/vote-note.php?id=82086&amp;page=function.class-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82086" title="64% like this...">
    10
    </div>
  </div>
  <a href="#82086" class="name">
  <strong class="user"><em>richard at richard-sumilang dot com</em></strong></a><a class="genanchor" href="#82086"> &para;</a><div class="date" title="2008-03-27 12:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82086">
<div class="phpcode"><code><span class="html">[ &gt;= PHP 5.3]<br /><br />If you are checking if a class exists that is in a specific namespace then you have to pass in the full path to the class:<br /><br />echo (class_exists("com::richardsumilang::common::MyClass")) ? "Yes" : "No";</span></code></div>
  </div>
 </div>
  <div class="note" id="34176">  <div class="votes">
    <div id="Vu34176">
    <a href="/manual/vote-note.php?id=34176&amp;page=function.class-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34176">
    <a href="/manual/vote-note.php?id=34176&amp;page=function.class-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34176" title="54% like this...">
    2
    </div>
  </div>
  <a href="#34176" class="name">
  <strong class="user"><em>anonymous at somewhere dot tld</em></strong></a><a class="genanchor" href="#34176"> &para;</a><div class="date" title="2003-07-17 12:20"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34176">
<div class="phpcode"><code><span class="html">If you have a directory of classes you want to create. (Modules in my instance)... you can do it like that
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">MODULE_PATH</span><span class="keyword">) &amp;&amp; </span><span class="default">$dh </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">MODULE_PATH</span><span class="keyword">)) {
<br />   while ((</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {        
<br />      if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/(Mod[a-zA-Z0-9]+).php/"</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">) {                
<br />         </span><span class="comment">// include and create the class               
<br />         </span><span class="keyword">require_once(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">MODULE_PATH</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);
<br />         </span><span class="default">$modules</span><span class="keyword">[] = new </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]();
<br />      }                
<br />   }
<br />} else {
<br />   exit;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />//---
<br />Here the rule is that all modules are on the form
<br />ModModulename.php and that the class has the same name as the file.
<br />The $modules array has all the classes initialized after this code</span></code></div>
  </div>
 </div>
  <div class="note" id="107504">  <div class="votes">
    <div id="Vu107504">
    <a href="/manual/vote-note.php?id=107504&amp;page=function.class-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107504">
    <a href="/manual/vote-note.php?id=107504&amp;page=function.class-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107504" title="52% like this...">
    1
    </div>
  </div>
  <a href="#107504" class="name">
  <strong class="user"><em>toocoolone at gmail dot com</em></strong></a><a class="genanchor" href="#107504"> &para;</a><div class="date" title="2012-02-14 06:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107504">
<div class="phpcode"><code><span class="html">I'm running PHP 5.3.4 on Windows 7 and had some difficulty autoloading classes using class_exists(). In my case, when I checked for the class and it didn't exist, class_exists automatically threw a system Exception. I was also throwing my own exception resulting in an uncaught exception.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Set my include path here<br /> */<br /></span><span class="default">$include_path </span><span class="keyword">= array( </span><span class="string">'/include/this/dir'</span><span class="keyword">, </span><span class="string">'/include/this/one/too' </span><span class="keyword">);<br /></span><span class="default">set_include_path</span><span class="keyword">( </span><span class="default">$include_path </span><span class="keyword">);<br /></span><span class="default">spl_autoload_register</span><span class="keyword">();<br /></span><span class="comment">/**<br /> * Assuming I have my own custom exception handler (MyException) let's<br /> * try to see if a file exists.<br /> */<br /></span><span class="keyword">try {<br />    if( ! </span><span class="default">file_exists</span><span class="keyword">( </span><span class="string">'myfile.php' </span><span class="keyword">) ) {<br />        throw new </span><span class="default">MyException</span><span class="keyword">(</span><span class="string">'Doh!'</span><span class="keyword">);<br />    }<br />    include( </span><span class="string">'myfile.php' </span><span class="keyword">);<br />}<br />catch( </span><span class="default">MyException $e </span><span class="keyword">) {<br />    echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />}<br /></span><span class="comment">/**<br /> * The above code either includes myfile.php or throws the new MyException<br /> * as expected. No problem right? The same should be true of class_exists(), <br /> * right? So then...<br /> */<br /></span><span class="default">$classname </span><span class="keyword">= </span><span class="string">'NonExistentClass'</span><span class="keyword">;<br />try {<br />    if( ! </span><span class="default">class_exists</span><span class="keyword">( </span><span class="default">$classname </span><span class="keyword">) ) {<br />        throw new </span><span class="default">MyException</span><span class="keyword">(</span><span class="string">'Double Doh!'</span><span class="keyword">);<br />    }<br />    </span><span class="default">$var </span><span class="keyword">= new </span><span class="default">$classname</span><span class="keyword">();<br />}<br />catch( </span><span class="default">MyException $e </span><span class="keyword">) {<br />    echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />}<br /></span><span class="comment">/**<br />* Should throw a new instance of MyException. But instead I get an<br />* uncaught LogicException blah blah blah for the default Exception<br />* class AND MyException. I only catch MyException so we've got on<br />* uncaught resulting in the dreaded LogicException error.<br />*/<br /></span><span class="default">?&gt;<br /></span><br />By registering an additional autoload handler function that did nothing, I was able to stop throwing the extra Exception and only throw my own.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Set my include path here<br /> */<br /></span><span class="default">$include_path </span><span class="keyword">= array( </span><span class="string">'/include/this/dir'</span><span class="keyword">, </span><span class="string">'/include/this/one/too' </span><span class="keyword">);<br /></span><span class="default">set_include_path</span><span class="keyword">( </span><span class="default">$include_path </span><span class="keyword">);<br /></span><span class="default">spl_autoload_register</span><span class="keyword">();<br /></span><span class="default">spl_autoload_register</span><span class="keyword">( </span><span class="string">'myAutoLoad' </span><span class="keyword">); </span><span class="comment">// Add these two and no worries...<br /></span><span class="keyword">function </span><span class="default">myAutoLoad</span><span class="keyword">() {}<br /></span><span class="comment">/**<br /> * By registering the additional custom autoload function that does nothing<br /> * class_exists() returns only boolean and does NOT throw an uncaught Exception<br /> */<br /></span><span class="default">?&gt;<br /></span><br />Found this buried in some search results. I don't remember the page URL but if it would have been here it might have saved me some time!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.class-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.class-exists.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.classobj.php">Classes/Object Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-alias.php" title="class_&#8203;alias">class_&#8203;alias</a>
                        </li>
                                                <li class="current">
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
                                                <li class="">
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
