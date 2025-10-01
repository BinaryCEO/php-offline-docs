<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionClass::getConstants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reflectionclass.getconstants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reflectionclass.getconstants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reflectionclass.getconstants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.reflectionclass.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionclass.getconstant.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionclass.getconstructor.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reflectionclass.getconstants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reflectionclass.getconstants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reflectionclass.getconstants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reflectionclass.getconstants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reflectionclass.getconstants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reflectionclass.getconstants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reflectionclass.getconstants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reflectionclass.getconstants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reflectionclass.getconstants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reflectionclass.getconstants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reflectionclass.getconstants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionClass::getConstants - Manual" />
<meta name="twitter:description" content="Gets constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionClass::getConstants - Manual" />
<meta itemprop="description" content="Gets constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets constants" />

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
        <a href="reflectionclass.getconstructor.php">
          ReflectionClass::getConstructor &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionclass.getconstant.php">
          &laquo; ReflectionClass::getConstant        </a>
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
            <option value='en/reflectionclass.getconstants.php' selected="selected">English</option>
            <option value='de/reflectionclass.getconstants.php'>German</option>
            <option value='es/reflectionclass.getconstants.php'>Spanish</option>
            <option value='fr/reflectionclass.getconstants.php'>French</option>
            <option value='it/reflectionclass.getconstants.php'>Italian</option>
            <option value='ja/reflectionclass.getconstants.php'>Japanese</option>
            <option value='pt_BR/reflectionclass.getconstants.php'>Brazilian Portuguese</option>
            <option value='ru/reflectionclass.getconstants.php'>Russian</option>
            <option value='tr/reflectionclass.getconstants.php'>Turkish</option>
            <option value='uk/reflectionclass.getconstants.php'>Ukrainian</option>
            <option value='zh/reflectionclass.getconstants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reflectionclass.getconstants" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ReflectionClass::getConstants</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionClass::getConstants</span> &mdash; <span class="dc-title">Gets constants</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-reflectionclass.getconstants-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ReflectionClass::getConstants</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$filter</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Gets all defined constants from a class, regardless of their visibility.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-reflectionclass.getconstants-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">filter</code></dt>
    <dd>
     <p class="para">
      The optional filter, for filtering desired constant visibilities. It&#039;s configured using
      the <a href="class.reflectionclassconstant.php#reflectionclassconstant.constants.modifiers" class="link">ReflectionClassConstant constants</a>,
      and defaults to all constant visibilities.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-reflectionclass.getconstants-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of constants, where the keys hold the name
   and the values the value of the constants.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-reflectionclass.getconstants-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">filter</code> has been added.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-reflectionclass.getconstants-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="reflectionclass.getconstant.php" class="methodname" rel="rdfs-seeAlso">ReflectionClass::getConstant()</a> - Gets defined constant</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionclass/getconstants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freflectionclass.getconstants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reflectionclass.getconstants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionclass.getconstants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115385">  <div class="votes">
    <div id="Vu115385">
    <a href="/manual/vote-note.php?id=115385&amp;page=reflectionclass.getconstants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115385">
    <a href="/manual/vote-note.php?id=115385&amp;page=reflectionclass.getconstants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115385" title="87% like this...">
    47
    </div>
  </div>
  <a href="#115385" class="name">
  <strong class="user"><em>davide dot renzi at gmail dot com</em></strong></a><a class="genanchor" href="#115385"> &para;</a><div class="date" title="2014-07-16 11:21"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115385">
<div class="phpcode"><code><span class="html">If you want to return the constants defined inside a class then you can also define an internal method as follows:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">myClass </span><span class="keyword">{<br />    const </span><span class="default">NONE </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    const </span><span class="default">REQUEST </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br />    const </span><span class="default">AUTH </span><span class="keyword">= </span><span class="default">101</span><span class="keyword">;<br /><br />    </span><span class="comment">// others...<br /><br />    </span><span class="keyword">static function </span><span class="default">getConstants</span><span class="keyword">() {<br />        </span><span class="default">$oClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">__CLASS__</span><span class="keyword">);<br />        return </span><span class="default">$oClass</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">();<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123353">  <div class="votes">
    <div id="Vu123353">
    <a href="/manual/vote-note.php?id=123353&amp;page=reflectionclass.getconstants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123353">
    <a href="/manual/vote-note.php?id=123353&amp;page=reflectionclass.getconstants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123353" title="94% like this...">
    15
    </div>
  </div>
  <a href="#123353" class="name">
  <strong class="user"><em>Panni</em></strong></a><a class="genanchor" href="#123353"> &para;</a><div class="date" title="2018-11-17 09:21"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123353">
<div class="phpcode"><code><span class="html">If you want to define a static getConstants() function which works with inheritance you can do the following:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">abstract class </span><span class="default">AbstractClass<br /></span><span class="keyword">{<br />    const </span><span class="default">TEST </span><span class="keyword">= </span><span class="string">"test"</span><span class="keyword">;<br /><br />    public static function </span><span class="default">getConstants</span><span class="keyword">()<br />    {<br />        </span><span class="comment">// "static::class" here does the magic<br />        </span><span class="default">$reflectionClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(static::class);<br />        return </span><span class="default">$reflectionClass</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">();<br />    }<br />}<br /><br />class </span><span class="default">ChildClass </span><span class="keyword">extends </span><span class="default">AbstractClass<br /></span><span class="keyword">{<br />    const </span><span class="default">TYPE_A </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    const </span><span class="default">TYPE_B </span><span class="keyword">= </span><span class="string">'hello'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$example </span><span class="keyword">= new </span><span class="default">ChildClass</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$example</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">());<br /><br /></span><span class="comment">// Result:<br /></span><span class="keyword">array(</span><span class="default">3</span><span class="keyword">) {<br />  </span><span class="string">'TYPE_A' </span><span class="keyword">=&gt; </span><span class="default">int</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">)<br />  </span><span class="string">'TYPE_B' </span><span class="keyword">=&gt; </span><span class="default">string</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">) </span><span class="string">"hello"<br />  'TEST' </span><span class="keyword">=&gt; </span><span class="default">string</span><span class="keyword">(</span><span class="default">4</span><span class="keyword">) </span><span class="string">"test"<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120195">  <div class="votes">
    <div id="Vu120195">
    <a href="/manual/vote-note.php?id=120195&amp;page=reflectionclass.getconstants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120195">
    <a href="/manual/vote-note.php?id=120195&amp;page=reflectionclass.getconstants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120195" title="90% like this...">
    16
    </div>
  </div>
  <a href="#120195" class="name">
  <strong class="user"><em>Sandor Toth</em></strong></a><a class="genanchor" href="#120195"> &para;</a><div class="date" title="2016-11-21 02:50"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120195">
<div class="phpcode"><code><span class="html">You can pass $this as class for the ReflectionClass. __CLASS__ won't help if you extend the original class, because it is a magic constant based on the file itself.<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">class </span><span class="default">Example </span><span class="keyword">{<br />  const </span><span class="default">TYPE_A </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />  const </span><span class="default">TYPE_B </span><span class="keyword">= </span><span class="string">'hello'</span><span class="keyword">;<br /><br />  public function </span><span class="default">getConstants</span><span class="keyword">()<br />  {<br />    </span><span class="default">$reflectionClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br />    return </span><span class="default">$reflectionClass</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">();<br />  }<br />}<br /><br /></span><span class="default">$example </span><span class="keyword">= new </span><span class="default">Example</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$example</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">());<br /><br /></span><span class="comment">// Result:<br /></span><span class="keyword">array ( </span><span class="default">size </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">)<br />  </span><span class="string">'TYPE_A' </span><span class="keyword">=&gt; </span><span class="default">int 1<br />  </span><span class="string">'TYPE_B' </span><span class="keyword">=&gt; (string) </span><span class="string">'hello'</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113712">  <div class="votes">
    <div id="Vu113712">
    <a href="/manual/vote-note.php?id=113712&amp;page=reflectionclass.getconstants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113712">
    <a href="/manual/vote-note.php?id=113712&amp;page=reflectionclass.getconstants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113712" title="66% like this...">
    1
    </div>
  </div>
  <a href="#113712" class="name">
  <strong class="user"><em>shgninc at gmail dot com</em></strong></a><a class="genanchor" href="#113712"> &para;</a><div class="date" title="2013-11-20 10:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113712">
<div class="phpcode"><code><span class="html">I use a functions to do somthing base on the class constant name as below. This example maybe helpful for everybody.<br /><span class="default">&lt;?php<br /></span><span class="keyword">public function </span><span class="default">renderData</span><span class="keyword">(</span><span class="default">$question_type </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$data </span><span class="keyword">= array()) {<br />        </span><span class="default">$types </span><span class="keyword">= array();<br />        </span><span class="default">$qt </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">questionType</span><span class="keyword">);<br />        </span><span class="default">$types </span><span class="keyword">= </span><span class="default">$qt</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">();<br />        if (</span><span class="default">$type </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$question_type</span><span class="keyword">, </span><span class="default">$types</span><span class="keyword">)){<br />                </span><span class="comment">//.....Do somthing<br /></span><span class="keyword">}<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95169">  <div class="votes">
    <div id="Vu95169">
    <a href="/manual/vote-note.php?id=95169&amp;page=reflectionclass.getconstants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95169">
    <a href="/manual/vote-note.php?id=95169&amp;page=reflectionclass.getconstants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95169" title="62% like this...">
    4
    </div>
  </div>
  <a href="#95169" class="name">
  <strong class="user"><em>djhob1972 at yahoo dot com dot au</em></strong></a><a class="genanchor" href="#95169"> &para;</a><div class="date" title="2009-12-16 05:42"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95169">
<div class="phpcode"><code><span class="html">I was trying to determine how to get a var_dump of constants that are within an interface.  Thats right, not using any classes but the interface itself.<br /><br />Along my travels I found it quite interesting that the ReflectionClass along with a direct call to the interface will also dump its constants.  Perfect!!!!<br /><br />This was using PHP 5.3.1 and my example as below:-<br /><br />1st File:<br /><br />constants.php<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">&lt;?</span><span class="default">php</span><span class="keyword">&gt;<br /><br />interface </span><span class="default">MyConstants<br /></span><span class="keyword">{<br />    </span><span class="comment">// --------------------------<br />    // Programmatic Level<br />    // --------------------------<br />    </span><span class="keyword">const </span><span class="default">DEBUG_MODE_ACTIVE       </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />    const </span><span class="default">PHP_VERSION_REQUIREMENT </span><span class="keyword">= </span><span class="string">"5.1.2"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />=======<br />Second file:<br />=======<br /><br />test.php<br /><br />&lt;?php&gt;<br />include_once ("constants.php");<br /><br />$oClass = new ReflectionClass ('MyConstants');<br />$array = $oClass-&gt;getConstants ();<br />var_dump ($array);<br />unset ($oClass);<br />?&gt;<br /><br />what you would get from the command line:-<br /><br />?:\???\htdocs\????&gt;php test.php<br />array(2) {<br />  ["DEBUG_MODE_ACTIVE"]=&gt; bool(false)<br />  ["PHP_VERSION_REQUIREMENT"]=&gt; string(5) "5.1.2"<br /><br />But as you can see this can work quite well to your advantage in many ways so I truely hope this helps someone else with a similar headache in the future to come!<br /><br />Enjoy!</span></code></div>
  </div>
 </div>
  <div class="note" id="123742">  <div class="votes">
    <div id="Vu123742">
    <a href="/manual/vote-note.php?id=123742&amp;page=reflectionclass.getconstants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123742">
    <a href="/manual/vote-note.php?id=123742&amp;page=reflectionclass.getconstants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123742" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123742" class="name">
  <strong class="user"><em>dmitrochenkooleg at gmail dot com</em></strong></a><a class="genanchor" href="#123742"> &para;</a><div class="date" title="2019-04-05 10:12"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123742">
<div class="phpcode"><code><span class="html">Get the latest constants declared.<br /><br />abstract class AbstractEnum<br />{<br />    /**<br />     * Возвращает все константы класса || Return all constants<br />     *<br />     * @return array<br />     */<br />    static function getConstants()<br />    {<br />        $rc = new \ReflectionClass(get_called_class());<br /><br />        return $rc-&gt;getConstants();<br />    }<br /><br />    /**<br />     * Возвращает массив констант определенные в вызываемом классе  || Return last constants<br />     *<br />     * @return array<br />     */<br />    static function lastConstants()<br />    {<br />        $parentConstants = static::getParentConstants();<br /><br />        $allConstants = static::getConstants();<br /><br />        return array_diff($allConstants, $parentConstants);<br />    }<br /><br />    /**<br />     * Возвращает все константы родительских классов || Return parent constants<br />     *<br />     * @return array<br />     */<br />    static function getParentConstants()<br />    {<br />        $rc = new \ReflectionClass(get_parent_class(static::class));<br />        $consts = $rc-&gt;getConstants();<br /><br />        return $consts;<br />    }<br />}<br /><br />======<br />class Roles extends AbstractEnum<br />{<br />    const ROOT = 'root';<br />    const ADMIN = 'admin';<br />    const USER = 'user';<br />}<br /><br />// Output:<br />All: root, admin, user <br />Last: root, admin, user <br /><br />class NewRoles extends Roles<br />{<br />    const CLIENT = 'client';<br />    const MODERATOR = 'moderator';<br />    const SUPERMODERATOR = 'super'.self::USER;<br />}<br /><br />// Output:<br />All: client, moderator, superuser, root, admin, user <br />Last: client, moderator, superuser <br /><br />class AdditionalRoles extends Roles<br />{<br />    const VIEWER = 'viewer';<br />    const CHECKER = 'checker';<br />    const ROOT = 'rooter';<br />}<br /><br />All: viewer, checker, rooter, client, moderator, superuser, admin, user <br />Last: viewer, checker, rooter</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reflectionclass.getconstants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionclass.getconstants.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
