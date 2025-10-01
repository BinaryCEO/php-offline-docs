<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: class_uses - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.class-uses.php">
 <link rel="shorturl" href="https://www.php.net/class-uses">
 <link rel="alternate" href="https://www.php.net/class-uses" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.spl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.class-parents.php">
 <link rel="next" href="https://www.php.net/manual/en/function.iterator-apply.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.class-uses.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.class-uses.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.class-uses.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.class-uses.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.class-uses.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.class-uses.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.class-uses.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.class-uses.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.class-uses.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.class-uses.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.class-uses.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return the traits used by the given class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: class_uses - Manual" />
<meta name="twitter:description" content="Return the traits used by the given class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: class_uses - Manual" />
<meta itemprop="description" content="Return the traits used by the given class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return the traits used by the given class" />

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
        <a href="function.iterator-apply.php">
          iterator_apply &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.class-parents.php">
          &laquo; class_parents        </a>
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
            <option value='en/function.class-uses.php' selected="selected">English</option>
            <option value='de/function.class-uses.php'>German</option>
            <option value='es/function.class-uses.php'>Spanish</option>
            <option value='fr/function.class-uses.php'>French</option>
            <option value='it/function.class-uses.php'>Italian</option>
            <option value='ja/function.class-uses.php'>Japanese</option>
            <option value='pt_BR/function.class-uses.php'>Brazilian Portuguese</option>
            <option value='ru/function.class-uses.php'>Russian</option>
            <option value='tr/function.class-uses.php'>Turkish</option>
            <option value='uk/function.class-uses.php'>Ukrainian</option>
            <option value='zh/function.class-uses.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.class-uses" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">class_uses</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">class_uses</span> &mdash; <span class="dc-title">
   Return the traits used by the given class
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.class-uses-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>class_uses</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$object_or_class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$autoload</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function returns an array with the names of the traits that the
   given <code class="parameter">object_or_class</code> uses. This does however not include
   any traits used by a parent class.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.class-uses-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">object_or_class</code></dt>
     <dd>
      <p class="para">
       An object (class instance) or a string (class name).
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



 <div class="refsect1 returnvalues" id="refsect1-function.class-uses-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An array on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> when the given class doesn&#039;t exist.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.class-uses-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4025">
    <p><strong>Example #1 <span class="function"><strong>class_uses()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">foo </span><span style="color: #007700">{ }<br />class </span><span style="color: #0000BB">bar </span><span style="color: #007700">{<br />  use </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">class_uses</span><span style="color: #007700">(new </span><span style="color: #0000BB">bar</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">class_uses</span><span style="color: #007700">(</span><span style="color: #DD0000">'bar'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">spl_autoload_register</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// use autoloading to load the 'not_loaded' class<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">class_uses</span><span style="color: #007700">(</span><span style="color: #DD0000">'not_loaded'</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
    [trait_of_not_loaded] =&gt; trait_of_not_loaded
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.class-uses-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.class-parents.php" class="function" rel="rdfs-seeAlso">class_parents()</a> - Return the parent classes of the given class</span></li>
    <li><span class="function"><a href="function.get-declared-traits.php" class="function" rel="rdfs-seeAlso">get_declared_traits()</a> - Returns an array of all declared traits</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/functions/class-uses.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.class-uses%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.class-uses&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.class-uses.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110752">  <div class="votes">
    <div id="Vu110752">
    <a href="/manual/vote-note.php?id=110752&amp;page=function.class-uses&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110752">
    <a href="/manual/vote-note.php?id=110752&amp;page=function.class-uses&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110752" title="87% like this...">
    35
    </div>
  </div>
  <a href="#110752" class="name">
  <strong class="user"><em>stealz at op dot pl</em></strong></a><a class="genanchor" href="#110752"> &para;</a><div class="date" title="2012-12-01 10:20"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110752">
<div class="phpcode"><code><span class="html">To get ALL traits including those used by parent classes and other traits, use this function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">class_uses_deep</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$autoload </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">) {
<br />    </span><span class="default">$traits </span><span class="keyword">= [];
<br />    do {
<br />        </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">), </span><span class="default">$traits</span><span class="keyword">);
<br />    } while(</span><span class="default">$class </span><span class="keyword">= </span><span class="default">get_parent_class</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">));
<br />    foreach (</span><span class="default">$traits </span><span class="keyword">as </span><span class="default">$trait </span><span class="keyword">=&gt; </span><span class="default">$same</span><span class="keyword">) {
<br />        </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">$trait</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">), </span><span class="default">$traits</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$traits</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125274">  <div class="votes">
    <div id="Vu125274">
    <a href="/manual/vote-note.php?id=125274&amp;page=function.class-uses&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125274">
    <a href="/manual/vote-note.php?id=125274&amp;page=function.class-uses&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125274" title="83% like this...">
    8
    </div>
  </div>
  <a href="#125274" class="name">
  <strong class="user"><em>Jos Macedo</em></strong></a><a class="genanchor" href="#125274"> &para;</a><div class="date" title="2020-08-16 01:16"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125274">
<div class="phpcode"><code><span class="html">Another alternative to get all parent traits is:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getUsedTraits</span><span class="keyword">(</span><span class="default">$classInstance</span><span class="keyword">) {<br />    </span><span class="default">$parentClasses </span><span class="keyword">= </span><span class="default">class_parents</span><span class="keyword">(</span><span class="default">$classInstance</span><span class="keyword">);<br />    </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">$classInstance</span><span class="keyword">);<br />    <br />    foreach (</span><span class="default">$parentClasses </span><span class="keyword">as </span><span class="default">$parentClass</span><span class="keyword">) {<br />        </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$traits</span><span class="keyword">, </span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">$parentClass</span><span class="keyword">));<br />    }<br />    <br />    return </span><span class="default">$traits</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112671">  <div class="votes">
    <div id="Vu112671">
    <a href="/manual/vote-note.php?id=112671&amp;page=function.class-uses&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112671">
    <a href="/manual/vote-note.php?id=112671&amp;page=function.class-uses&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112671" title="71% like this...">
    17
    </div>
  </div>
  <a href="#112671" class="name">
  <strong class="user"><em>ulf</em></strong></a><a class="genanchor" href="#112671"> &para;</a><div class="date" title="2013-07-11 09:21"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112671">
<div class="phpcode"><code><span class="html">A slighly modified version from Stealz that also checks all the "parent" traits used by the traits:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">public static function </span><span class="default">class_uses_deep</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$autoload </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">)<br />    {<br />        </span><span class="default">$traits </span><span class="keyword">= [];<br /><br />        </span><span class="comment">// Get traits of all parent classes<br />        </span><span class="keyword">do {<br />            </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">), </span><span class="default">$traits</span><span class="keyword">);<br />        } while (</span><span class="default">$class </span><span class="keyword">= </span><span class="default">get_parent_class</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">));<br /><br />        </span><span class="comment">// Get traits of all parent traits<br />        </span><span class="default">$traitsToSearch </span><span class="keyword">= </span><span class="default">$traits</span><span class="keyword">;<br />        while (!empty(</span><span class="default">$traitsToSearch</span><span class="keyword">)) {<br />            </span><span class="default">$newTraits </span><span class="keyword">= </span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$traitsToSearch</span><span class="keyword">), </span><span class="default">$autoload</span><span class="keyword">);<br />            </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$newTraits</span><span class="keyword">, </span><span class="default">$traits</span><span class="keyword">);<br />            </span><span class="default">$traitsToSearch </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$newTraits</span><span class="keyword">, </span><span class="default">$traitsToSearch</span><span class="keyword">);<br />        };<br /><br />        foreach (</span><span class="default">$traits </span><span class="keyword">as </span><span class="default">$trait </span><span class="keyword">=&gt; </span><span class="default">$same</span><span class="keyword">) {<br />            </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">$trait</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">), </span><span class="default">$traits</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$traits</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122426">  <div class="votes">
    <div id="Vu122426">
    <a href="/manual/vote-note.php?id=122426&amp;page=function.class-uses&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122426">
    <a href="/manual/vote-note.php?id=122426&amp;page=function.class-uses&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122426" title="75% like this...">
    4
    </div>
  </div>
  <a href="#122426" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#122426"> &para;</a><div class="date" title="2018-02-23 12:48"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122426">
<div class="phpcode"><code><span class="html">If the class does not exist, you will get a warning, even if $autoload == false; I.e., if the class is not found, setting $autoload to false is not sufficient to silence the warning.<br /><br />This is different from class_exists ($class_name, $autoload = true), which doesn't generate a warning in either case.</span></code></div>
  </div>
 </div>
  <div class="note" id="122427">  <div class="votes">
    <div id="Vu122427">
    <a href="/manual/vote-note.php?id=122427&amp;page=function.class-uses&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122427">
    <a href="/manual/vote-note.php?id=122427&amp;page=function.class-uses&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122427" title="70% like this...">
    4
    </div>
  </div>
  <a href="#122427" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#122427"> &para;</a><div class="date" title="2018-02-23 12:53"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122427">
<div class="phpcode"><code><span class="html">I have improved on ulf's improvement of stealz' code. I'm pretty sure the last "foreach" adds nothing, so I've removed it, as well as adding a check for string class names (as opposed to objects) to prevent the warning if the class is not found:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">class_uses_deep</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$autoload </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">) {<br />  </span><span class="default">$traits </span><span class="keyword">= [];<br /><br />  </span><span class="comment">// Get all the traits of $class and its parent classes<br />  </span><span class="keyword">do {<br />    </span><span class="default">$class_name </span><span class="keyword">= </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">)? </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">): </span><span class="default">$class</span><span class="keyword">;<br />    if (</span><span class="default">class_exists</span><span class="keyword">(</span><span class="default">$class_name</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">)) {<br />      </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">), </span><span class="default">$traits</span><span class="keyword">);<br />    }<br />  } while (</span><span class="default">$class </span><span class="keyword">= </span><span class="default">get_parent_class</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">));<br /><br />  </span><span class="comment">// Get traits of all parent traits<br />  </span><span class="default">$traits_to_search </span><span class="keyword">= </span><span class="default">$traits</span><span class="keyword">;<br />  while (!empty(</span><span class="default">$traits_to_search</span><span class="keyword">)) {<br />    </span><span class="default">$new_traits </span><span class="keyword">= </span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$traits_to_search</span><span class="keyword">), </span><span class="default">$autoload</span><span class="keyword">);<br />    </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$new_traits</span><span class="keyword">, </span><span class="default">$traits</span><span class="keyword">);<br />    </span><span class="default">$traits_to_search </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$new_traits</span><span class="keyword">, </span><span class="default">$traits_to_search</span><span class="keyword">);<br />  };<br /><br />  return </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$traits</span><span class="keyword">);<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125933">  <div class="votes">
    <div id="Vu125933">
    <a href="/manual/vote-note.php?id=125933&amp;page=function.class-uses&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125933">
    <a href="/manual/vote-note.php?id=125933&amp;page=function.class-uses&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125933" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125933" class="name">
  <strong class="user"><em>donatj at gmail dot com</em></strong></a><a class="genanchor" href="#125933"> &para;</a><div class="date" title="2021-03-15 06:02"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125933">
<div class="phpcode"><code><span class="html">The popular stealz solution doesn't handle traits that use other traits. A little bit of recursion can clean the entire thing up a bit and make it more robust.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public function </span><span class="default">class_uses_deep</span><span class="keyword">( </span><span class="default">string $class</span><span class="keyword">, </span><span class="default">bool $autoload </span><span class="keyword">= </span><span class="default">true </span><span class="keyword">) : array {<br />    </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">class_uses</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">);<br /><br />    if(</span><span class="default">$parent </span><span class="keyword">= </span><span class="default">get_parent_class</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">)) {<br />        </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$traits</span><span class="keyword">, </span><span class="default">class_uses_deep</span><span class="keyword">(</span><span class="default">$parent</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">));<br />    }<br /><br />    foreach( </span><span class="default">$traits </span><span class="keyword">as </span><span class="default">$trait </span><span class="keyword">) {<br />        </span><span class="default">$traits </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$traits</span><span class="keyword">, </span><span class="default">class_uses_deep</span><span class="keyword">(</span><span class="default">$trait</span><span class="keyword">, </span><span class="default">$autoload</span><span class="keyword">));<br />    }<br /><br />    return </span><span class="default">$traits</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.class-uses&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.class-uses.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.spl.php">SPL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-implements.php" title="class_&#8203;implements">class_&#8203;implements</a>
                        </li>
                                                <li class="">
                            <a href="function.class-parents.php" title="class_&#8203;parents">class_&#8203;parents</a>
                        </li>
                                                <li class="current">
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
