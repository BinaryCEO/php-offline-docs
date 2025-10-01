<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionClass::newInstanceWithoutConstructor - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.reflectionclass.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionclass.newinstanceargs.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionclass.newlazyghost.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reflectionclass.newinstancewithoutconstructor.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reflectionclass.newinstancewithoutconstructor.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reflectionclass.newinstancewithoutconstructor.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reflectionclass.newinstancewithoutconstructor.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reflectionclass.newinstancewithoutconstructor.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reflectionclass.newinstancewithoutconstructor.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reflectionclass.newinstancewithoutconstructor.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reflectionclass.newinstancewithoutconstructor.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reflectionclass.newinstancewithoutconstructor.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reflectionclass.newinstancewithoutconstructor.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a new class instance without invoking the constructor" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionClass::newInstanceWithoutConstructor - Manual" />
<meta name="twitter:description" content="Creates a new class instance without invoking the constructor" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionClass::newInstanceWithoutConstructor - Manual" />
<meta itemprop="description" content="Creates a new class instance without invoking the constructor" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a new class instance without invoking the constructor" />

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
        <a href="reflectionclass.newlazyghost.php">
          ReflectionClass::newLazyGhost &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionclass.newinstanceargs.php">
          &laquo; ReflectionClass::newInstanceArgs        </a>
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
            <option value='en/reflectionclass.newinstancewithoutconstructor.php' selected="selected">English</option>
            <option value='de/reflectionclass.newinstancewithoutconstructor.php'>German</option>
            <option value='es/reflectionclass.newinstancewithoutconstructor.php'>Spanish</option>
            <option value='fr/reflectionclass.newinstancewithoutconstructor.php'>French</option>
            <option value='it/reflectionclass.newinstancewithoutconstructor.php'>Italian</option>
            <option value='ja/reflectionclass.newinstancewithoutconstructor.php'>Japanese</option>
            <option value='pt_BR/reflectionclass.newinstancewithoutconstructor.php'>Brazilian Portuguese</option>
            <option value='ru/reflectionclass.newinstancewithoutconstructor.php'>Russian</option>
            <option value='tr/reflectionclass.newinstancewithoutconstructor.php'>Turkish</option>
            <option value='uk/reflectionclass.newinstancewithoutconstructor.php'>Ukrainian</option>
            <option value='zh/reflectionclass.newinstancewithoutconstructor.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reflectionclass.newinstancewithoutconstructor" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ReflectionClass::newInstanceWithoutConstructor</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionClass::newInstanceWithoutConstructor</span> &mdash; <span class="dc-title">Creates a new class instance without invoking the constructor</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-reflectionclass.newinstancewithoutconstructor-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ReflectionClass::newInstanceWithoutConstructor</strong></span>(): <span class="type"><a href="language.types.object.php" class="type object">object</a></span></div>

  <p class="para rdfs-comment">
   Creates a new instance of the class without invoking the constructor.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-reflectionclass.newinstancewithoutconstructor-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-reflectionclass.newinstancewithoutconstructor-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-reflectionclass.newinstancewithoutconstructor-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   A <span class="classname"><a href="class.reflectionexception.php" class="classname">ReflectionException</a></span> if the class is an internal
   class that cannot be instantiated without invoking the constructor.
   This exception is limited only to internal classes that are
   <a href="language.oop5.final.php" class="link">final</a>.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-reflectionclass.newinstancewithoutconstructor-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="reflectionclass.newinstance.php" class="methodname" rel="rdfs-seeAlso">ReflectionClass::newInstance()</a> - Creates a new class instance from given arguments</span></li>
    <li><span class="methodname"><a href="reflectionclass.newinstanceargs.php" class="methodname" rel="rdfs-seeAlso">ReflectionClass::newInstanceArgs()</a> - Creates a new class instance from given arguments</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionclass/newinstancewithoutconstructor.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freflectionclass.newinstancewithoutconstructor%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reflectionclass.newinstancewithoutconstructor&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112390">  <div class="votes">
    <div id="Vu112390">
    <a href="/manual/vote-note.php?id=112390&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112390">
    <a href="/manual/vote-note.php?id=112390&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112390" title="60% like this...">
    11
    </div>
  </div>
  <a href="#112390" class="name">
  <strong class="user"><em>tom at r dot je</em></strong></a><a class="genanchor" href="#112390"> &para;</a><div class="date" title="2013-06-11 09:53"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112390">
<div class="phpcode"><code><span class="html">It should be made clear that from an OOP theory perspective the use of this method is very bad practice in the same manner as goto, eval and singletons. If you find a need to use it in production code you're almost certainly doing something wrong somewhere. It may occasionally be useful for debugging, but even then hints at poor initial code.<br /><br />The problem? It breaks encapsulation. An object can exist in the application but may not be able to fulfill its responsibility because it's missing dependencies. The use of this method makes it possible for an incomplete object to exist in the system; the object can exist in a state that its author never intended. This is bad because it will cause unexpected things to happen! A fundamental principle in OOP is that objects are in complete control of their state, the use of this method prevents that guarantee. <br /><br />n.b. The annotation based "dependency injection" listed below is not a solution or valid use-case for this either because it breaks encapsulation (Among other things!) and the class being constructed needs to know of the container by providing annotations.</span></code></div>
  </div>
 </div>
  <div class="note" id="106657">  <div class="votes">
    <div id="Vu106657">
    <a href="/manual/vote-note.php?id=106657&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106657">
    <a href="/manual/vote-note.php?id=106657&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106657" title="64% like this...">
    9
    </div>
  </div>
  <a href="#106657" class="name">
  <strong class="user"><em>oliver at ananit dot de</em></strong></a><a class="genanchor" href="#106657"> &para;</a><div class="date" title="2011-11-24 03:57"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106657">
<div class="phpcode"><code><span class="html">If this method is not available in your version of PHP you can use a trick to create an instance without calling the constructor.<br />Use reflection to get the properties and default values of the class, and create a fake "serialized" string. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">createInstanceWithoutConstructor</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">){<br />    </span><span class="default">$reflector </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br />    </span><span class="default">$properties </span><span class="keyword">= </span><span class="default">$reflector</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">();<br />    </span><span class="default">$defaults </span><span class="keyword">= </span><span class="default">$reflector</span><span class="keyword">-&gt;</span><span class="default">getDefaultProperties</span><span class="keyword">();<br />            <br />    </span><span class="default">$serealized </span><span class="keyword">= </span><span class="string">"O:" </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) . </span><span class="string">":\"</span><span class="default">$class</span><span class="string">\":"</span><span class="keyword">.</span><span class="default">count</span><span class="keyword">(</span><span class="default">$properties</span><span class="keyword">) .</span><span class="string">':{'</span><span class="keyword">;<br />    foreach (</span><span class="default">$properties </span><span class="keyword">as </span><span class="default">$property</span><span class="keyword">){<br />        </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$property</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();<br />        if(</span><span class="default">$property</span><span class="keyword">-&gt;</span><span class="default">isProtected</span><span class="keyword">()){<br />                </span><span class="default">$name </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">) . </span><span class="string">'*' </span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">) .</span><span class="default">$name</span><span class="keyword">;<br />            } elseif(</span><span class="default">$property</span><span class="keyword">-&gt;</span><span class="default">isPrivate</span><span class="keyword">()){<br />                </span><span class="default">$name </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)  . </span><span class="default">$class</span><span class="keyword">.  </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).</span><span class="default">$name</span><span class="keyword">;<br />            }<br />            </span><span class="default">$serealized </span><span class="keyword">.= </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />            if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(),</span><span class="default">$defaults</span><span class="keyword">) ){<br />                </span><span class="default">$serealized </span><span class="keyword">.= </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$defaults</span><span class="keyword">[</span><span class="default">$property</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">()]);<br />            } else {<br />                </span><span class="default">$serealized </span><span class="keyword">.= </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">);<br />            }<br />        }<br />    </span><span class="default">$serealized </span><span class="keyword">.=</span><span class="string">"}"</span><span class="keyword">;<br />    return </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$serealized</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">foo<br /></span><span class="keyword">{<br />    public </span><span class="default">$a </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br />    protected </span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    private </span><span class="default">$c </span><span class="keyword">= </span><span class="string">"default"</span><span class="keyword">;<br />    protected </span><span class="default">$d</span><span class="keyword">;<br />    public function </span><span class="default">__construct</span><span class="keyword">(){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">c </span><span class="keyword">= </span><span class="string">"constructed"</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">d </span><span class="keyword">= </span><span class="default">42</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">createInstanceWithoutConstructor</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />object(foo)#6 (4) {<br />  ["a"]=&gt;<br />  int(10)<br />  ["b":protected]=&gt;<br />  int(2)<br />  ["c":"foo":private]=&gt;<br />  string(7) "default"<br />  ["d":protected]=&gt;<br />  NULL<br />}<br /><br />I hope this can help someone.<br />Oliver Anan</span></code></div>
  </div>
 </div>
  <div class="note" id="118791">  <div class="votes">
    <div id="Vu118791">
    <a href="/manual/vote-note.php?id=118791&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118791">
    <a href="/manual/vote-note.php?id=118791&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118791" title="64% like this...">
    4
    </div>
  </div>
  <a href="#118791" class="name">
  <strong class="user"><em>260 at ciemnosc</em></strong></a><a class="genanchor" href="#118791"> &para;</a><div class="date" title="2016-02-06 02:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118791">
<div class="phpcode"><code><span class="html">sorry for replying to such an old comment, but there's something i wanted to point out.<br /><br />@  tom at r dot je:<br />While I agree with what you said in general, there *are* cases where it's not true, and since PHP doesn't allow for multiple constructors there's no other good way around it.<br /><br />&gt; The problem? It breaks encapsulation. <br />&gt; An object can exist in the application but may not be able to fulfill its <br />&gt; responsibility because it's missing dependencies. <br />&gt; The use of this method makes it possible for an incomplete object <br />&gt; to exist in the system; <br />&gt; the object can exist in a state that its author never intended.<br /><br />If you're using this method from some factory method, to manually init the object in other way that the constructor that, this point is no longer valid.<br /><br />Consider the example, where you use constructor to set-up the object after getting it from database (e.g. you need to pull some array from other table, basing on some id parameter). But you want to also be able to create object manually (for inserting to the database, for example).<br />The best thing to do would be to have two different constructors, but since it is not possible in php you need some other way to create the object.<br /><br />example:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// this usually would be a static cache in some class, or array returned by method getMeta($id), etc.<br /></span><span class="default">$meta </span><span class="keyword">= array(</span><span class="default">1337 </span><span class="keyword">=&gt; array(</span><span class="string">'key1' </span><span class="keyword">=&gt; </span><span class="string">'value1'</span><span class="keyword">, </span><span class="string">'key2' </span><span class="keyword">=&gt; </span><span class="string">'value2'</span><span class="keyword">));<br /><br />class </span><span class="default">Test </span><span class="keyword">{<br />    public </span><span class="default">$id</span><span class="keyword">;<br />    public </span><span class="default">$data</span><span class="keyword">;<br />    public </span><span class="default">$meta</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        global </span><span class="default">$meta</span><span class="keyword">;<br />        if(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">)) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">meta </span><span class="keyword">= </span><span class="default">$meta</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">];<br />    }<br />    public static function </span><span class="default">create_empty</span><span class="keyword">() {<br />        </span><span class="default">$r </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">__CLASS__</span><span class="keyword">);<br />        return </span><span class="default">$r</span><span class="keyword">-&gt;</span><span class="default">newInstanceWithoutConstructor</span><span class="keyword">();<br />    }<br />}<br />echo </span><span class="string">"emulating PDO::FETCH_CLASS behavior: "</span><span class="keyword">;<br /></span><span class="default">$t </span><span class="keyword">= </span><span class="default">Test</span><span class="keyword">::</span><span class="default">create_empty</span><span class="keyword">();<br /></span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">meta </span><span class="keyword">= </span><span class="default">1337</span><span class="keyword">;<br /></span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">__construct</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">);<br /><br />echo </span><span class="string">"empty class: "</span><span class="keyword">;<br /></span><span class="default">$testItem </span><span class="keyword">= </span><span class="default">Test</span><span class="keyword">::</span><span class="default">create_empty</span><span class="keyword">();<br /></span><span class="comment">// ... here you can start setting up the item, e.g. from XML<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$testItem</span><span class="keyword">);<br /><br /></span><span class="default">$testItem</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$testItem</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">= </span><span class="string">"some data"</span><span class="keyword">;<br /></span><span class="default">$testItem</span><span class="keyword">-&gt;</span><span class="default">meta </span><span class="keyword">= array(</span><span class="string">"somekey" </span><span class="keyword">=&gt; </span><span class="string">"somevalue"</span><span class="keyword">);<br /><br />echo </span><span class="string">"after setup:"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$testItem</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Of course, you can instead make empty constructor, and create some init() method, but then you have to remember to call init() everywhere.<br />You can also create some other way of adding the item to database, but then you'd have to classes to handle the same data - one for retrieving and other for storing.<br /><br />If you instead use some factory class (or just a factory method, like in the simplified example above) having a way to create totally empty object is useful. With full factory approach you would first use some TestFactory-&gt;prepare() method, then you'd call methods to set what you need, and the factory would set all uninitialized variables to some default values upon calling TestFactory-&gt;get() to retrieve prepared object.</span></code></div>
  </div>
 </div>
  <div class="note" id="105670">  <div class="votes">
    <div id="Vu105670">
    <a href="/manual/vote-note.php?id=105670&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105670">
    <a href="/manual/vote-note.php?id=105670&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105670" title="66% like this...">
    3
    </div>
  </div>
  <a href="#105670" class="name">
  <strong class="user"><em>alejosimon at gmail</em></strong></a><a class="genanchor" href="#105670"> &para;</a><div class="date" title="2011-09-06 06:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105670">
<div class="phpcode"><code><span class="html">A good first use for this new method.<br /><br />It implements a transparent parser constructor argument to achieve 99% reusable component.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">use </span><span class="default">ReflectionClass </span><span class="keyword">;<br /><br />trait </span><span class="default">TSingleton<br /></span><span class="keyword">{<br />    </span><span class="comment">/**<br />    *    Constructor.<br />    */<br />    </span><span class="keyword">protected function </span><span class="default">__construct</span><span class="keyword">() {}<br /><br />    </span><span class="comment">/**<br />    *    Drop clone singleton objects.<br />    */<br />    </span><span class="keyword">protected function </span><span class="default">__clone</span><span class="keyword">() {}<br /><br />    </span><span class="comment">/**<br />    *    Gets only one instance.<br />    *<br />    *    @params Optional multiple values as arguments for the constructor.<br />    *    @return Object instance from called class.<br />    */<br />    </span><span class="keyword">public static function </span><span class="default">getInstance</span><span class="keyword">()<br />    {<br />        static </span><span class="default">$instance </span><span class="keyword">= </span><span class="default">null </span><span class="keyword">;<br /><br />        if ( ! </span><span class="default">$instance </span><span class="keyword">)<br />        {<br />            </span><span class="default">$ref  </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">( </span><span class="default">get_called_class</span><span class="keyword">() ) ;<br />            </span><span class="default">$ctor </span><span class="keyword">= </span><span class="default">$ref</span><span class="keyword">-&gt;</span><span class="default">getConstructor</span><span class="keyword">() ;<br /><br />            </span><span class="comment">// Thanks PHP 5.4<br />            </span><span class="default">$self </span><span class="keyword">= </span><span class="default">$ref</span><span class="keyword">-&gt;</span><span class="default">newInstanceWithoutConstructor</span><span class="keyword">() ;<br /><br />            </span><span class="comment">// The magic.<br />            </span><span class="default">$ctor</span><span class="keyword">-&gt;</span><span class="default">setAccessible</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">) ;<br />            </span><span class="default">$instance </span><span class="keyword">= </span><span class="default">$ctor</span><span class="keyword">-&gt;</span><span class="default">invokeArgs</span><span class="keyword">( </span><span class="default">$self</span><span class="keyword">, </span><span class="default">func_get_args</span><span class="keyword">() ) ;<br />        }<br /><br />        return </span><span class="default">$instance </span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108466">  <div class="votes">
    <div id="Vu108466">
    <a href="/manual/vote-note.php?id=108466&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108466">
    <a href="/manual/vote-note.php?id=108466&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108466" title="53% like this...">
    1
    </div>
  </div>
  <a href="#108466" class="name">
  <strong class="user"><em>me [ata] thomas-lauria.de</em></strong></a><a class="genanchor" href="#108466"> &para;</a><div class="date" title="2012-04-28 06:51"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108466">
<div class="phpcode"><code><span class="html">This new Feature enables Annotation based Dependency Injection:<br /><span class="default">&lt;?php <br /><br /></span><span class="comment">//dependency to inject<br /></span><span class="keyword">class </span><span class="default">dep </span><span class="keyword">{}<br /><br />class </span><span class="default">a </span><span class="keyword">{<br />  </span><span class="comment">/**<br />   * @inject<br />   * @var dep<br />   */<br />  </span><span class="keyword">protected </span><span class="default">$foo</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">b </span><span class="keyword">extends </span><span class="default">a </span><span class="keyword">{<br />  </span><span class="comment">/**<br />   * @inject<br />   * @var dep<br />   */<br />  </span><span class="keyword">protected </span><span class="default">$bar</span><span class="keyword">;<br />  <br />  public function </span><span class="default">__construct</span><span class="keyword">() {<br />    echo </span><span class="string">"CONSTRUCTOR CALLED\n"</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$ref </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'b'</span><span class="keyword">);<br /></span><span class="default">$inst </span><span class="keyword">= </span><span class="default">$ref</span><span class="keyword">-&gt;</span><span class="default">newInstanceWithoutConstructor</span><span class="keyword">();<br /> <br /></span><span class="default">$list </span><span class="keyword">= </span><span class="default">$ref</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">();<br />foreach(</span><span class="default">$list </span><span class="keyword">as </span><span class="default">$prop</span><span class="keyword">){<br />  </span><span class="comment">/* @var $prop ReflectionProperty */<br />  </span><span class="default">$prop</span><span class="keyword">-&gt;</span><span class="default">getDocComment</span><span class="keyword">(); </span><span class="comment">//grep for @inject and the @vars class name<br />  </span><span class="default">$prop</span><span class="keyword">-&gt;</span><span class="default">setAccessible</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />  </span><span class="default">$prop</span><span class="keyword">-&gt;</span><span class="default">setValue</span><span class="keyword">(</span><span class="default">$inst</span><span class="keyword">, new </span><span class="default">dep</span><span class="keyword">());<br />}<br />if(</span><span class="default">$const </span><span class="keyword">= </span><span class="default">$ref</span><span class="keyword">-&gt;</span><span class="default">getConstructor</span><span class="keyword">()) {<br />  </span><span class="default">$constName </span><span class="keyword">= </span><span class="default">$const</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();<br />  </span><span class="default">$inst</span><span class="keyword">-&gt;{</span><span class="default">$constName</span><span class="keyword">}(); </span><span class="comment">//use call_user_func_array($function, $param_arr); for arguments <br /></span><span class="keyword">}<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$inst</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$inst</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">); </span><span class="comment">//property still not accessable<br /><br /></span><span class="default">The Output</span><span class="keyword">:<br /><br /></span><span class="default">CONSTRUCTOR CALLED<br />b Object<br /></span><span class="keyword">(<br />    [</span><span class="default">bar</span><span class="keyword">:protected] =&gt; </span><span class="default">dep Object<br />        </span><span class="keyword">(<br />        )<br /><br />    [</span><span class="default">foo</span><span class="keyword">:protected] =&gt; </span><span class="default">dep Object<br />        </span><span class="keyword">(<br />        )<br /><br />)<br /></span><span class="default">PHP Fatal error</span><span class="keyword">:  </span><span class="default">Cannot access </span><span class="keyword">protected </span><span class="default">property b</span><span class="keyword">::</span><span class="default">$foo in diTest</span><span class="keyword">.</span><span class="default">php on line 42</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128981">  <div class="votes">
    <div id="Vu128981">
    <a href="/manual/vote-note.php?id=128981&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128981">
    <a href="/manual/vote-note.php?id=128981&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128981" title="no votes...">
    0
    </div>
  </div>
  <a href="#128981" class="name">
  <strong class="user"><em>benoit dot wery at online dot fr</em></strong></a><a class="genanchor" href="#128981"> &para;</a><div class="date" title="2023-10-28 08:04"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128981">
<div class="phpcode"><code><span class="html">Using ReflectionClass::newInstanceWithoutConstructor and ReflectionProperty::setValue allow to set a value for a readonly promoted property. For example this code works (tested on PHP 8.2) :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Test<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(public readonly </span><span class="default">string $name</span><span class="keyword">)<br />    {}<br />}<br /><br /></span><span class="default">$test1 </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">(</span><span class="string">'test1'</span><span class="keyword">);<br /></span><span class="default">$reflectionProperty </span><span class="keyword">= new </span><span class="default">ReflectionProperty</span><span class="keyword">(</span><span class="default">Test</span><span class="keyword">::class, </span><span class="string">'name'</span><span class="keyword">);<br /></span><span class="comment">// next line would throw a Fatal error<br /></span><span class="default">$reflectionProperty</span><span class="keyword">-&gt;</span><span class="default">setValue</span><span class="keyword">(</span><span class="default">$test1</span><span class="keyword">, </span><span class="string">'error'</span><span class="keyword">);<br /><br /></span><span class="default">$reflectionClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">Test</span><span class="keyword">::class);<br /></span><span class="default">$test2 </span><span class="keyword">= </span><span class="default">$reflectionClass</span><span class="keyword">-&gt;</span><span class="default">newInstanceWithoutConstructor</span><span class="keyword">();<br /></span><span class="default">$reflectionProperty</span><span class="keyword">-&gt;</span><span class="default">setValue</span><span class="keyword">(</span><span class="default">$test2</span><span class="keyword">, </span><span class="string">'test2'</span><span class="keyword">);<br /><br />echo </span><span class="default">$test2</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">; </span><span class="comment">// will output "test2"</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125836">  <div class="votes">
    <div id="Vu125836">
    <a href="/manual/vote-note.php?id=125836&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125836">
    <a href="/manual/vote-note.php?id=125836&amp;page=reflectionclass.newinstancewithoutconstructor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125836" title="no votes...">
    0
    </div>
  </div>
  <a href="#125836" class="name">
  <strong class="user"><em>ben at NOSPAM dot fanmade dot de</em></strong></a><a class="genanchor" href="#125836"> &para;</a><div class="date" title="2021-02-17 07:51"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125836">
<div class="phpcode"><code><span class="html">Such a function should definitely end up in productive code as rarely as possible.<br />There are always exceptions though :)<br />We have UseCase classes in our library extending an abstract UseCase having a constructor that does some setting up and it will even throw exceptions if some specific conditions are not yet met.<br />Within that UseCase the permissions are also defined.<br />Simplified example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">UseCase </span><span class="keyword">implements </span><span class="default">IUseCase<br /></span><span class="keyword">{<br />    </span><span class="comment">/** @var string[] */<br />    </span><span class="keyword">protected array </span><span class="default">$requiredPermissions </span><span class="keyword">= [];<br /><br />    final public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">IPresenter $out</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// several startup checks, including authorization<br />    </span><span class="keyword">}<br />}<br /></span><span class="default">?&gt;<br /></span>We already have a better solution, but it will take some time to refactor that and we will have to live with this for at least a few weeks.<br />Now I've had the idea to check the permissions in the application's incoming request way before the individual UseCase will be initialized.<br />So after seeing this method here I just introduced this little helper into our abstract UseCase:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">public static function </span><span class="default">getRequiredPermissions</span><span class="keyword">(): array<br />    {<br />        </span><span class="default">$class </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">get_called_class</span><span class="keyword">());<br /><br />        return </span><span class="default">$class</span><span class="keyword">-&gt;</span><span class="default">newInstanceWithoutConstructor</span><span class="keyword">()-&gt;</span><span class="default">requiredPermissions</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span>Now I'm able to check the permissions in my request without really touching anything in the library:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">public function </span><span class="default">authorize</span><span class="keyword">(): </span><span class="default">bool<br />    </span><span class="keyword">{<br />        if (!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">user</span><span class="keyword">-&gt;</span><span class="default">hasPermissions</span><span class="keyword">(</span><span class="default">CreatePost</span><span class="keyword">::</span><span class="default">getRequiredPermissions</span><span class="keyword">())) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span>This does also have the benefit of adding one more reason to switch to our new UseCase classes ASAP :)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reflectionclass.newinstancewithoutconstructor&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.reflectionclass.php">ReflectionClass</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
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
                                                <li class="current">
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
