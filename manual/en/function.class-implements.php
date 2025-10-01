<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: class_implements - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.class-implements.php">
 <link rel="shorturl" href="https://www.php.net/class-implements">
 <link rel="alternate" href="https://www.php.net/class-implements" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.spl.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.spl.php">
 <link rel="next" href="https://www.php.net/manual/en/function.class-parents.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.class-implements.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.class-implements.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.class-implements.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.class-implements.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.class-implements.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.class-implements.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.class-implements.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.class-implements.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.class-implements.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.class-implements.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.class-implements.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return the interfaces which are implemented by the given class or interface" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: class_implements - Manual" />
<meta name="twitter:description" content="Return the interfaces which are implemented by the given class or interface" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: class_implements - Manual" />
<meta itemprop="description" content="Return the interfaces which are implemented by the given class or interface" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return the interfaces which are implemented by the given class or interface" />

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
        <a href="function.class-parents.php">
          class_parents &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.spl.php">
          &laquo; SPL Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='ref.spl.php'>SPL Functions</a></li>      </ul>
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
            <option value='en/function.class-implements.php' selected="selected">English</option>
            <option value='de/function.class-implements.php'>German</option>
            <option value='es/function.class-implements.php'>Spanish</option>
            <option value='fr/function.class-implements.php'>French</option>
            <option value='it/function.class-implements.php'>Italian</option>
            <option value='ja/function.class-implements.php'>Japanese</option>
            <option value='pt_BR/function.class-implements.php'>Brazilian Portuguese</option>
            <option value='ru/function.class-implements.php'>Russian</option>
            <option value='tr/function.class-implements.php'>Turkish</option>
            <option value='uk/function.class-implements.php'>Ukrainian</option>
            <option value='zh/function.class-implements.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.class-implements" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">class_implements</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">class_implements</span> &mdash; <span class="dc-title">
   Return the interfaces which are implemented by the given class or interface
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.class-implements-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>class_implements</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$object_or_class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$autoload</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function returns an array with the names of the interfaces that the
   given <code class="parameter">object_or_class</code> and its parents implement.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.class-implements-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">object_or_class</code></dt>
     <dd>
      <p class="para">
       An object (class instance) or a string (class or interface name).
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



 <div class="refsect1 returnvalues" id="refsect1-function.class-implements-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An array on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> when the given class doesn&#039;t exist.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.class-implements-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4023">
    <p><strong>Example #1 <span class="function"><strong>class_implements()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">foo </span><span style="color: #007700">{ }<br />class </span><span style="color: #0000BB">bar </span><span style="color: #007700">implements </span><span style="color: #0000BB">foo </span><span style="color: #007700">{}<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">class_implements</span><span style="color: #007700">(new </span><span style="color: #0000BB">bar</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// you may also specify the parameter as a string<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">class_implements</span><span style="color: #007700">(</span><span style="color: #DD0000">'bar'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">spl_autoload_register</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// use autoloading to load the 'not_loaded' class<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">class_implements</span><span style="color: #007700">(</span><span style="color: #DD0000">'not_loaded'</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [foo] =&gt; foo
)
Array
(
    [foo] =&gt; foo
)
Array
(
    [interface_of_not_loaded] =&gt; interface_of_not_loaded
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.class-implements-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    To check that an object implements an interface, <a href="language.operators.type.php" class="link"><code class="literal">instanceof</code></a>
    or the <span class="function"><a href="function.is-a.php" class="function">is_a()</a></span> function should be used instead.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.class-implements-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.class-parents.php" class="function" rel="rdfs-seeAlso">class_parents()</a> - Return the parent classes of the given class</span></li>
    <li><span class="function"><a href="function.get-declared-interfaces.php" class="function" rel="rdfs-seeAlso">get_declared_interfaces()</a> - Returns an array of all declared interfaces</span></li>
    <li><span class="function"><a href="function.is-a.php" class="function" rel="rdfs-seeAlso">is_a()</a> - Checks whether the object is of a given type or subtype</span></li>
    <li><a href="language.operators.type.php" class="link"><code class="literal">instanceof</code></a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/functions/class-implements.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.class-implements%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.class-implements&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.class-implements.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="55376">  <div class="votes">
    <div id="Vu55376">
    <a href="/manual/vote-note.php?id=55376&amp;page=function.class-implements&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55376">
    <a href="/manual/vote-note.php?id=55376&amp;page=function.class-implements&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55376" title="72% like this...">
    16
    </div>
  </div>
  <a href="#55376" class="name">
  <strong class="user"><em>ludvig dot ericson at gmail dot nospam dot com</em></strong></a><a class="genanchor" href="#55376"> &para;</a><div class="date" title="2005-08-01 12:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55376">
<div class="phpcode"><code><span class="html">Hint:<br /><span class="default">&lt;?php<br />in_array</span><span class="keyword">(</span><span class="string">"your-interface"</span><span class="keyword">, </span><span class="default">class_implements</span><span class="keyword">(</span><span class="default">$object_or_class_name</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>would check if 'your-interface' is ONE of the implemented interfaces.<br />Note that you can use something similar to be sure the class only implements that, (whyever you would want that?)<br /><span class="default">&lt;?php<br /></span><span class="keyword">array(</span><span class="string">"your-interface"</span><span class="keyword">) == </span><span class="default">class_implements</span><span class="keyword">(</span><span class="default">$object_or_class_name</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I use the first technique to check if a module has the correct interface implemented, or else it throws an exception.</span></code></div>
  </div>
 </div>
  <div class="note" id="113612">  <div class="votes">
    <div id="Vu113612">
    <a href="/manual/vote-note.php?id=113612&amp;page=function.class-implements&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113612">
    <a href="/manual/vote-note.php?id=113612&amp;page=function.class-implements&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113612" title="71% like this...">
    12
    </div>
  </div>
  <a href="#113612" class="name">
  <strong class="user"><em>a dot panek at brainsware dot org</em></strong></a><a class="genanchor" href="#113612"> &para;</a><div class="date" title="2013-11-05 01:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113612">
<div class="phpcode"><code><span class="html">Calling class_implements with a non-loadable class name or a non-object results in a warning:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Warning: class_implements(): Class abc does not exist and could not be loaded in /home/a.panek/Projects/sauce/lib/Sauce/functions.php on line 196<br /><br /></span><span class="default">$interfaces </span><span class="keyword">= </span><span class="default">class_implements</span><span class="keyword">(</span><span class="string">'abc'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This is not documented and should just return FALSE as the documentation above says.</span></code></div>
  </div>
 </div>
  <div class="note" id="58152">  <div class="votes">
    <div id="Vu58152">
    <a href="/manual/vote-note.php?id=58152&amp;page=function.class-implements&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58152">
    <a href="/manual/vote-note.php?id=58152&amp;page=function.class-implements&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58152" title="53% like this...">
    2
    </div>
  </div>
  <a href="#58152" class="name">
  <strong class="user"><em>trollll23 at yahoo dot com</em></strong></a><a class="genanchor" href="#58152"> &para;</a><div class="date" title="2005-10-25 12:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58152">
<div class="phpcode"><code><span class="html">Luckily, it prints out superinterfaces as well in reverse order so iterative searching works fine:<br /><br />    <span class="default">&lt;?php<br />    <br />    </span><span class="keyword">interface </span><span class="default">InterfaceA </span><span class="keyword">{ }<br />    <br />    interface </span><span class="default">InterfaceB </span><span class="keyword">extends </span><span class="default">InterfaceA </span><span class="keyword">{ }<br />    <br />    class </span><span class="default">MyClass </span><span class="keyword">implements </span><span class="default">InterfaceB </span><span class="keyword">{ }<br />    <br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">class_implements</span><span class="keyword">(new </span><span class="default">MyClass</span><span class="keyword">()));<br />    <br />    </span><span class="default">?&gt;<br /></span><br />prints out:<br /><br />    Array<br />    (<br />        [InterfaceB] =&gt; InterfaceB<br />        [InterfaceA] =&gt; InterfaceA<br />    )</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.class-implements&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.class-implements.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.spl.php">SPL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.class-implements.php" title="class_&#8203;implements">class_&#8203;implements</a>
                        </li>
                                                <li class="">
                            <a href="function.class-parents.php" title="class_&#8203;parents">class_&#8203;parents</a>
                        </li>
                                                <li class="">
                            <a href="function.class-uses.php" title="class_&#8203;uses">class_&#8203;uses</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-apply.php" title="iterator_&#8203;apply">iterator_&#8203;apply</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-count.php" title="iterator_&#8203;count">iterator_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-to-array.php" title="iterator_&#8203;to_&#8203;array">iterator_&#8203;to_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload.php" title="spl_&#8203;autoload">spl_&#8203;autoload</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-call.php" title="spl_&#8203;autoload_&#8203;call">spl_&#8203;autoload_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-extensions.php" title="spl_&#8203;autoload_&#8203;extensions">spl_&#8203;autoload_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-functions.php" title="spl_&#8203;autoload_&#8203;functions">spl_&#8203;autoload_&#8203;functions</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-register.php" title="spl_&#8203;autoload_&#8203;register">spl_&#8203;autoload_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-unregister.php" title="spl_&#8203;autoload_&#8203;unregister">spl_&#8203;autoload_&#8203;unregister</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-classes.php" title="spl_&#8203;classes">spl_&#8203;classes</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-object-hash.php" title="spl_&#8203;object_&#8203;hash">spl_&#8203;object_&#8203;hash</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-object-id.php" title="spl_&#8203;object_&#8203;id">spl_&#8203;object_&#8203;id</a>
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
