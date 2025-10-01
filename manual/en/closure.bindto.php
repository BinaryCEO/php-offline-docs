<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Closure::bindTo - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/closure.bindto.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/closure.bindto.php">
 <link rel="alternate" href="https://www.php.net/manual/en/closure.bindto.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.closure.php">
 <link rel="prev" href="https://www.php.net/manual/en/closure.bind.php">
 <link rel="next" href="https://www.php.net/manual/en/closure.call.php">

 <link rel="alternate" href="https://www.php.net/manual/en/closure.bindto.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/closure.bindto.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/closure.bindto.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/closure.bindto.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/closure.bindto.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/closure.bindto.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/closure.bindto.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/closure.bindto.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/closure.bindto.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/closure.bindto.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/closure.bindto.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Duplicates the closure with a new bound object and class scope" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Closure::bindTo - Manual" />
<meta name="twitter:description" content="Duplicates the closure with a new bound object and class scope" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Closure::bindTo - Manual" />
<meta itemprop="description" content="Duplicates the closure with a new bound object and class scope" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Duplicates the closure with a new bound object and class scope" />

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
        <a href="closure.call.php">
          Closure::call &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="closure.bind.php">
          &laquo; Closure::bind        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.interfaces.php'>Predefined Interfaces and Classes</a></li>      <li><a href='class.closure.php'>Closure</a></li>      </ul>
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
            <option value='en/closure.bindto.php' selected="selected">English</option>
            <option value='de/closure.bindto.php'>German</option>
            <option value='es/closure.bindto.php'>Spanish</option>
            <option value='fr/closure.bindto.php'>French</option>
            <option value='it/closure.bindto.php'>Italian</option>
            <option value='ja/closure.bindto.php'>Japanese</option>
            <option value='pt_BR/closure.bindto.php'>Brazilian Portuguese</option>
            <option value='ru/closure.bindto.php'>Russian</option>
            <option value='tr/closure.bindto.php'>Turkish</option>
            <option value='uk/closure.bindto.php'>Ukrainian</option>
            <option value='zh/closure.bindto.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="closure.bindto" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Closure::bindTo</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">Closure::bindTo</span> &mdash; <span class="dc-title">
   Duplicates the closure with a new bound object and class scope
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-closure.bindto-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Closure::bindTo</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$newThis</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$newScope</code><span class="initializer"> = &quot;static&quot;</span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.closure.php" class="type Closure">Closure</a></span></span></div>

  <p class="para rdfs-comment">
   Create and return a new <a href="functions.anonymous.php" class="link">anonymous
   function</a> with the same body and bound variables as this one, but
   possibly with a different bound object and a new class scope.
  </p>

  <p class="para">
   The “bound object” determines the value <code class="literal">$this</code> will
   have in the function body and the “class scope” represents a class
   which determines which private and protected members the anonymous
   function will be able to access. Namely, the members that will be
   visible are the same as if the anonymous function were a method of
   the class given as value of the <code class="parameter">newScope</code>
   parameter.
  </p>

  <p class="para">
   Static closures cannot have any bound object (the value of the parameter
   <code class="parameter">newThis</code> should be <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>), but this method can
   nevertheless be used to change their class scope.
  </p>

  <p class="para">
   This method will ensure that for a non-static closure, having a bound
   instance will imply being scoped and vice-versa. To this end,
   non-static closures that are given a scope but a <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> instance are made
   static and non-static non-scoped closures that are given a non-null
   instance are scoped to an unspecified class.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If you only want to duplicate the anonymous functions, you can use
    <a href="language.oop5.cloning.php" class="link">cloning</a> instead.
   </p>
  </p></blockquote>

 </div>


 <div class="refsect1 parameters" id="refsect1-closure.bindto-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">newThis</code></dt>
    <dd>
     <p class="para">
      The object to which the given anonymous function should be bound, or
      <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> for the closure to be unbound. 
     </p>
    </dd>
   
   
    <dt><code class="parameter">newScope</code></dt>
    <dd>
     <p class="para">
      The class scope to which the closure is to be associated, or
      &#039;static&#039; to keep the current one. If an object is given, the type of the
      object will be used instead. This determines the visibility of protected
      and private methods of the bound object.
      It is not allowed to pass (an object of) an internal class as this parameter.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-closure.bindto-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the newly created <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span> object
   or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-closure.bindto-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-476">
   <p><strong>Example #1 <span class="function"><strong>Closure::bindTo()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$val</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">val </span><span style="color: #007700">= </span><span style="color: #0000BB">$val</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">getClosure</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #FF8000">// Returns closure bound to this object and scope<br />        </span><span style="color: #007700">return function() {<br />            return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">val</span><span style="color: #007700">;<br />        };<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$ob1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ob2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$cl </span><span style="color: #007700">= </span><span style="color: #0000BB">$ob1</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getClosure</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$cl</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$cl </span><span style="color: #007700">= </span><span style="color: #0000BB">$cl</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindTo</span><span style="color: #007700">(</span><span style="color: #0000BB">$ob2</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$cl</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">1
2</pre>
</div>
   </div>
  </div>
 </div>



 <div class="refsect1 seealso" id="refsect1-closure.bindto-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><a href="functions.anonymous.php" class="link">Anonymous functions</a></li>
   <li><span class="methodname"><a href="closure.bind.php" class="methodname" rel="rdfs-seeAlso">Closure::bind()</a> - Duplicates a closure with a specific bound object and class scope</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/closure/bindto.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclosure.bindto%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=closure.bindto&amp;repo=en&amp;redirect=https://www.php.net/manual/en/closure.bindto.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116527">  <div class="votes">
    <div id="Vu116527">
    <a href="/manual/vote-note.php?id=116527&amp;page=closure.bindto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116527">
    <a href="/manual/vote-note.php?id=116527&amp;page=closure.bindto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116527" title="86% like this...">
    45
    </div>
  </div>
  <a href="#116527" class="name">
  <strong class="user"><em>Nezar Fadle</em></strong></a><a class="genanchor" href="#116527"> &para;</a><div class="date" title="2015-01-19 10:40"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116527">
<div class="phpcode"><code><span class="html">We can use the concept of bindTo to write a very small Template Engine:<br /><br />#############<br />index.php<br />############<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Article</span><span class="keyword">{<br />    private </span><span class="default">$title </span><span class="keyword">= </span><span class="string">"This is an article"</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">Post</span><span class="keyword">{<br />    private </span><span class="default">$title </span><span class="keyword">= </span><span class="string">"This is a post"</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">Template</span><span class="keyword">{<br /><br />    function </span><span class="default">render</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">, </span><span class="default">$tpl</span><span class="keyword">){<br /><br />        </span><span class="default">$closure </span><span class="keyword">= function(</span><span class="default">$tpl</span><span class="keyword">){<br />            </span><span class="default">ob_start</span><span class="keyword">();<br />            include </span><span class="default">$tpl</span><span class="keyword">;<br />            return </span><span class="default">ob_end_flush</span><span class="keyword">();<br />        };<br /><br />        </span><span class="default">$closure </span><span class="keyword">= </span><span class="default">$closure</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);<br />        </span><span class="default">$closure</span><span class="keyword">(</span><span class="default">$tpl</span><span class="keyword">);<br /><br />    }<br /><br />}<br /><br /></span><span class="default">$art </span><span class="keyword">= new </span><span class="default">Article</span><span class="keyword">();<br /></span><span class="default">$post </span><span class="keyword">= new </span><span class="default">Post</span><span class="keyword">();<br /></span><span class="default">$template </span><span class="keyword">= new </span><span class="default">Template</span><span class="keyword">();<br /><br /></span><span class="default">$template</span><span class="keyword">-&gt;</span><span class="default">render</span><span class="keyword">(</span><span class="default">$art</span><span class="keyword">, </span><span class="string">'tpl.php'</span><span class="keyword">);<br /></span><span class="default">$template</span><span class="keyword">-&gt;</span><span class="default">render</span><span class="keyword">(</span><span class="default">$post</span><span class="keyword">, </span><span class="string">'tpl.php'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />#############<br />tpl.php<br />############<br />&lt;h1&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">title</span><span class="keyword">;</span><span class="default">?&gt;</span>&lt;/h1&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="111379">  <div class="votes">
    <div id="Vu111379">
    <a href="/manual/vote-note.php?id=111379&amp;page=closure.bindto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111379">
    <a href="/manual/vote-note.php?id=111379&amp;page=closure.bindto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111379" title="93% like this...">
    37
    </div>
  </div>
  <a href="#111379" class="name">
  <strong class="user"><em>tatarynowicz at gmail dot com</em></strong></a><a class="genanchor" href="#111379"> &para;</a><div class="date" title="2013-02-14 09:30"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111379">
<div class="phpcode"><code><span class="html">You can do pretty Javascript-like things with objects using closure binding:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">trait </span><span class="default">DynamicDefinition </span><span class="keyword">{<br />    <br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">) {<br />        if (</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">)) {<br />            return </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br />        }<br />        else {<br />            throw new </span><span class="default">\RuntimeException</span><span class="keyword">(</span><span class="string">"Method </span><span class="keyword">{</span><span class="default">$name</span><span class="keyword">}</span><span class="string"> does not exist"</span><span class="keyword">);<br />        }<br />    }<br />    <br />    public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name </span><span class="keyword">= </span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)? <br />            </span><span class="default">$value</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">): <br />            </span><span class="default">$value</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Foo </span><span class="keyword">{<br />    use </span><span class="default">DynamicDefinition</span><span class="keyword">;<br />    private </span><span class="default">$privateValue </span><span class="keyword">= </span><span class="string">'I am private'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">;<br /></span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">bar </span><span class="keyword">= function() {<br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">privateValue</span><span class="keyword">;<br />};<br /><br /></span><span class="comment">// prints 'I am private'<br /></span><span class="keyword">print </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107848">  <div class="votes">
    <div id="Vu107848">
    <a href="/manual/vote-note.php?id=107848&amp;page=closure.bindto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107848">
    <a href="/manual/vote-note.php?id=107848&amp;page=closure.bindto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107848" title="88% like this...">
    20
    </div>
  </div>
  <a href="#107848" class="name">
  <strong class="user"><em>safakozpinar at gmail dot com</em></strong></a><a class="genanchor" href="#107848"> &para;</a><div class="date" title="2012-03-09 01:35"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107848">
<div class="phpcode"><code><span class="html">Private/protected members are accessible if you set the "newscope" argument (as the manual says).<br /><br /><span class="default">&lt;?php<br />$fn </span><span class="keyword">= function(){<br />    return ++</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">; </span><span class="comment">// increase the value<br /></span><span class="keyword">};<br /><br />class </span><span class="default">Bar</span><span class="keyword">{<br />    private </span><span class="default">$foo </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="comment">// initial value<br /></span><span class="keyword">}<br /><br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">Bar</span><span class="keyword">();<br /><br /></span><span class="default">$fn1 </span><span class="keyword">= </span><span class="default">$fn</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">, </span><span class="string">'Bar'</span><span class="keyword">); </span><span class="comment">// specify class name<br /></span><span class="default">$fn2 </span><span class="keyword">= </span><span class="default">$fn</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">,  </span><span class="default">$bar</span><span class="keyword">); </span><span class="comment">// or object<br /><br /></span><span class="keyword">echo </span><span class="default">$fn1</span><span class="keyword">(); </span><span class="comment">// 2<br /></span><span class="keyword">echo </span><span class="default">$fn2</span><span class="keyword">(); </span><span class="comment">// 3</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122641">  <div class="votes">
    <div id="Vu122641">
    <a href="/manual/vote-note.php?id=122641&amp;page=closure.bindto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122641">
    <a href="/manual/vote-note.php?id=122641&amp;page=closure.bindto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122641" title="85% like this...">
    5
    </div>
  </div>
  <a href="#122641" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122641"> &para;</a><div class="date" title="2018-04-19 03:31"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122641">
<div class="phpcode"><code><span class="html">If you want to unbind completely the closure and the scope you need to set both to null:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyClass<br /></span><span class="keyword">{<br />    public </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'a'</span><span class="keyword">;<br />    protected </span><span class="default">$bar </span><span class="keyword">= </span><span class="string">'b'</span><span class="keyword">;<br />    private </span><span class="default">$baz </span><span class="keyword">= </span><span class="string">'c'</span><span class="keyword">;<br /><br />    </span><span class="comment">/**<br />     * @return array<br />     */<br />    </span><span class="keyword">public function </span><span class="default">toArray</span><span class="keyword">()<br />    {<br />        </span><span class="comment">// Only public variables<br />        </span><span class="keyword">return (function (</span><span class="default">$obj</span><span class="keyword">) {<br />            return </span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">);<br />        })-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">)(</span><span class="default">$this</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />In this example, only the public variables of the class are exported (foo).<br /><br />If you use the default scope (-&gt;bindTo(null)) also protected and private variables are exported (foo, bar and baz).<br /><br />It was hard to figure it out because there is nowhere mentioned in the documentation that you can use null as a scope.</span></code></div>
  </div>
 </div>
  <div class="note" id="119410">  <div class="votes">
    <div id="Vu119410">
    <a href="/manual/vote-note.php?id=119410&amp;page=closure.bindto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119410">
    <a href="/manual/vote-note.php?id=119410&amp;page=closure.bindto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119410" title="80% like this...">
    3
    </div>
  </div>
  <a href="#119410" class="name">
  <strong class="user"><em>luc at s dot illi dot be</em></strong></a><a class="genanchor" href="#119410"> &para;</a><div class="date" title="2016-05-31 04:44"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119410">
<div class="phpcode"><code><span class="html">Access private members of parent classes; playing with the scopes:<br /><span class="default">&lt;?PHP<br /></span><span class="keyword">class </span><span class="default">Grandparents</span><span class="keyword">{ private </span><span class="default">$__status1 </span><span class="keyword">= </span><span class="string">'married'</span><span class="keyword">; }<br />class </span><span class="default">Parents </span><span class="keyword">extends </span><span class="default">Grandparents</span><span class="keyword">{ private </span><span class="default">$__status2 </span><span class="keyword">= </span><span class="string">'divorced'</span><span class="keyword">; }<br />class </span><span class="default">Me </span><span class="keyword">extends </span><span class="default">Parents</span><span class="keyword">{ private </span><span class="default">$__status3 </span><span class="keyword">= </span><span class="string">'single'</span><span class="keyword">; }<br /><br /></span><span class="default">$status1_3 </span><span class="keyword">= function()<br />{<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__status1 </span><span class="keyword">= </span><span class="string">'happy'</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__status2 </span><span class="keyword">= </span><span class="string">'happy'</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__status3 </span><span class="keyword">= </span><span class="string">'happy'</span><span class="keyword">;<br />};<br /><br /></span><span class="default">$status1_2 </span><span class="keyword">= function()<br />{<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__status1 </span><span class="keyword">= </span><span class="string">'happy'</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__status2 </span><span class="keyword">= </span><span class="string">'happy'</span><span class="keyword">;<br />};<br /><br /></span><span class="comment">// test 1:<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">$status1_3</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$R </span><span class="keyword">= new </span><span class="default">Me</span><span class="keyword">, </span><span class="default">Parents</span><span class="keyword">::class);            <br /></span><span class="comment">#$c();    // Fatal: Cannot access private property Me::$__status3<br /><br />// test 2:<br /></span><span class="default">$d </span><span class="keyword">= </span><span class="default">$status1_2</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$R </span><span class="keyword">= new </span><span class="default">Me</span><span class="keyword">, </span><span class="default">Parents</span><span class="keyword">::class);<br /></span><span class="default">$d</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$R</span><span class="keyword">);<br /></span><span class="comment">/*<br />object(Me)#5 (4) {<br />  ["__status3":"Me":private]=&gt;<br />  string(6) "single"<br />  ["__status2":"Parents":private]=&gt;<br />  string(5) "happy"<br />  ["__status1":"Grandparents":private]=&gt;<br />  string(7) "married"<br />  ["__status1"]=&gt;<br />  string(5) "happy"<br />}<br />*/<br /><br />// test 3:<br /></span><span class="default">$e </span><span class="keyword">= </span><span class="default">$status1_3</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$R </span><span class="keyword">= new </span><span class="default">Me</span><span class="keyword">, </span><span class="default">Grandparents</span><span class="keyword">::class);    <br /></span><span class="comment">#$e(); // Fatal: Cannot access private property Me::$__status3<br /><br />// test 4:<br /></span><span class="default">$f </span><span class="keyword">= </span><span class="default">$status1_2</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$R </span><span class="keyword">= new </span><span class="default">Me</span><span class="keyword">, </span><span class="default">Grandparents</span><span class="keyword">::class);    <br /></span><span class="default">$f</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$R</span><span class="keyword">);<br /></span><span class="comment">/*<br />object(Me)#9 (4) {<br />  ["__status3":"Me":private]=&gt;<br />  string(6) "single"<br />  ["__status2":"Parents":private]=&gt;<br />  string(8) "divorced"<br />  ["__status1":"Grandparents":private]=&gt;<br />  string(5) "happy"<br />  ["__status2"]=&gt;<br />  string(5) "happy"<br />}<br />*/<br /></span><span class="default">?&gt;<br /></span><br />Clear the stack trace:<br /><span class="default">&lt;?PHP<br /></span><span class="keyword">use </span><span class="default">Exception</span><span class="keyword">;<br />use </span><span class="default">ReflectionException</span><span class="keyword">;<br /><br /></span><span class="default">$c </span><span class="keyword">= function()<br />{<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">trace </span><span class="keyword">= [];<br />};<br /><br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$R </span><span class="keyword">= new </span><span class="default">ReflectionException</span><span class="keyword">, </span><span class="default">Exception</span><span class="keyword">::class);<br /></span><span class="default">$c</span><span class="keyword">();<br /><br />try<br />{<br />    throw </span><span class="default">$R</span><span class="keyword">;<br />}<br />catch(</span><span class="default">ReflectionException $R</span><span class="keyword">)<br />{<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$R</span><span class="keyword">-&gt;</span><span class="default">getTrace</span><span class="keyword">());<br />}<br /></span><span class="comment">/*<br />array(0) {<br />}<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106912">  <div class="votes">
    <div id="Vu106912">
    <a href="/manual/vote-note.php?id=106912&amp;page=closure.bindto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106912">
    <a href="/manual/vote-note.php?id=106912&amp;page=closure.bindto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106912" title="75% like this...">
    8
    </div>
  </div>
  <a href="#106912" class="name">
  <strong class="user"><em>amica at php-resource dot de</em></strong></a><a class="genanchor" href="#106912"> &para;</a><div class="date" title="2011-12-18 04:23"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106912">
<div class="phpcode"><code><span class="html">With rebindable $this at hand it's possible to do evil stuff:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />        private </span><span class="default">$a </span><span class="keyword">= </span><span class="default">12</span><span class="keyword">;<br />        private function </span><span class="default">getA </span><span class="keyword">() {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">;<br />        }<br />    }<br />    class </span><span class="default">B </span><span class="keyword">{<br />        private </span><span class="default">$b </span><span class="keyword">= </span><span class="default">34</span><span class="keyword">;<br />        private function </span><span class="default">getB </span><span class="keyword">() {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br />    </span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">();<br />    </span><span class="default">$c </span><span class="keyword">= function () {<br />        if (</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">) &amp;&amp; </span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"getA"</span><span class="keyword">)) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">++;<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getA</span><span class="keyword">();<br />        }<br />        if (</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"b"</span><span class="keyword">) &amp;&amp; </span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"getB"</span><span class="keyword">)) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">++;<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getB</span><span class="keyword">();<br />        }<br />    };<br />    </span><span class="default">$ca </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);<br />    </span><span class="default">$cb </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />    echo </span><span class="default">$ca</span><span class="keyword">(), </span><span class="string">"\n"</span><span class="keyword">; </span><span class="comment">// =&gt; 13<br />    </span><span class="keyword">echo </span><span class="default">$cb</span><span class="keyword">(), </span><span class="string">"\n"</span><span class="keyword">; </span><span class="comment">// =&gt; 35<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129057">  <div class="votes">
    <div id="Vu129057">
    <a href="/manual/vote-note.php?id=129057&amp;page=closure.bindto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129057">
    <a href="/manual/vote-note.php?id=129057&amp;page=closure.bindto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129057" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129057" class="name">
  <strong class="user"><em>malferov at gmail dot com</em></strong></a><a class="genanchor" href="#129057"> &para;</a><div class="date" title="2023-11-20 07:09"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129057">
<div class="phpcode"><code><span class="html">If you, like me, did not immediately understand what exactly "(an object of) an internal class" in the documentation about the 'newScope' parameter:
<br />
<br />By an internal class, the documentation means any internal PHP class such as 'stdClass', 'Closure', 'WeakMap', and etc:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{}
<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();
<br /></span><span class="default">$closure </span><span class="keyword">= fn() =&gt; </span><span class="default">null</span><span class="keyword">;
<br />
<br /></span><span class="default">$binded </span><span class="keyword">= </span><span class="default">$closure</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="string">'stdClass'</span><span class="keyword">,); </span><span class="comment">// Cannot bind closure to scope of internal class stdClass
<br /></span><span class="default">$binded </span><span class="keyword">= </span><span class="default">$closure</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$closure</span><span class="keyword">,); </span><span class="comment">// Warning: Cannot bind closure to scope of internal class Closure etc.</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126847">  <div class="votes">
    <div id="Vu126847">
    <a href="/manual/vote-note.php?id=126847&amp;page=closure.bindto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126847">
    <a href="/manual/vote-note.php?id=126847&amp;page=closure.bindto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126847" title="no votes...">
    0
    </div>
  </div>
  <a href="#126847" class="name">
  <strong class="user"><em>Olexandr Kalaidzhy</em></strong></a><a class="genanchor" href="#126847"> &para;</a><div class="date" title="2022-02-12 11:56"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126847">
<div class="phpcode"><code><span class="html">Get all object vars without using Reflection:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br />class </span><span class="default">A<br /></span><span class="keyword">{<br />    private </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">;<br />    protected </span><span class="default">$bar </span><span class="keyword">= </span><span class="string">'bar'</span><span class="keyword">;<br />    public </span><span class="default">$buz </span><span class="keyword">= </span><span class="string">'buz'</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">get_object_vars_all</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">): array<br />{<br />    if (!</span><span class="default">\is_object</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">)) {<br />        throw new </span><span class="default">\InvalidArgumentException</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'The argument should be an object, "%s" given.'</span><span class="keyword">, </span><span class="default">get_debug_type</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">)));<br />    }<br /><br />    </span><span class="default">$closure </span><span class="keyword">= function () {<br />        return </span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br />    };<br /><br />    return </span><span class="default">$closure</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$object</span><span class="keyword">)();<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">get_object_vars_all</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />The output: <br /><br />array(1) {<br />  ["buz"]=&gt;<br />  string(3) "buz"<br />}<br />array(3) {<br />  ["foo"]=&gt;<br />  string(3) "foo"<br />  ["bar"]=&gt;<br />  string(3) "bar"<br />  ["buz"]=&gt;<br />  string(3) "buz"<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=closure.bindto&amp;repo=en&amp;redirect=https://www.php.net/manual/en/closure.bindto.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.closure.php">Closure</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="closure.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="closure.bind.php" title="bind">bind</a>
                        </li>
                                                <li class="current">
                            <a href="closure.bindto.php" title="bindTo">bindTo</a>
                        </li>
                                                <li class="">
                            <a href="closure.call.php" title="call">call</a>
                        </li>
                                                <li class="">
                            <a href="closure.fromcallable.php" title="fromCallable">fromCallable</a>
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
