<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::registerNodeClass - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.registernodeclass.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.registernodeclass.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.registernodeclass.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.prepend.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.relaxngvalidate.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.registernodeclass.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.registernodeclass.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.registernodeclass.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.registernodeclass.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.registernodeclass.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.registernodeclass.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.registernodeclass.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.registernodeclass.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.registernodeclass.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.registernodeclass.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.registernodeclass.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Register extended class used to create base node type" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::registerNodeClass - Manual" />
<meta name="twitter:description" content="Register extended class used to create base node type" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::registerNodeClass - Manual" />
<meta itemprop="description" content="Register extended class used to create base node type" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Register extended class used to create base node type" />

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
        <a href="domdocument.relaxngvalidate.php">
          DOMDocument::relaxNGValidate &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.prepend.php">
          &laquo; DOMDocument::prepend        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domdocument.php'>DOMDocument</a></li>      </ul>
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
            <option value='en/domdocument.registernodeclass.php' selected="selected">English</option>
            <option value='de/domdocument.registernodeclass.php'>German</option>
            <option value='es/domdocument.registernodeclass.php'>Spanish</option>
            <option value='fr/domdocument.registernodeclass.php'>French</option>
            <option value='it/domdocument.registernodeclass.php'>Italian</option>
            <option value='ja/domdocument.registernodeclass.php'>Japanese</option>
            <option value='pt_BR/domdocument.registernodeclass.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.registernodeclass.php'>Russian</option>
            <option value='tr/domdocument.registernodeclass.php'>Turkish</option>
            <option value='uk/domdocument.registernodeclass.php'>Ukrainian</option>
            <option value='zh/domdocument.registernodeclass.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.registernodeclass" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::registerNodeClass</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::registerNodeClass</span> &mdash; <span class="dc-title">Register extended class used to create base node type</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.registernodeclass-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::registerNodeClass</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$baseClass</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$extendedClass</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>


  <p class="para rdfs-comment">
   This method allows you to register your own extended DOM class to be used
   afterward by the PHP DOM extension.
  </p>
  <p class="para">
   This method is not part of the DOM standard.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="simpara">
    The constructor of the objects of the registered node classes is not called.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-domdocument.registernodeclass-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">baseClass</code></dt>
     <dd>
      <p class="para">
       The DOM class that you want to extend. You can find a list of these 
       classes in the <a href="book.dom.php" class="link">chapter introduction</a>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">extendedClass</code></dt>
     <dd>
      <p class="para">
       Your extended class name. If <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is provided, any previously 
       registered class extending <code class="parameter">baseClass</code> will
       be removed.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-domdocument.registernodeclass-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-domdocument.registernodeclass-changelog">
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
      <td>8.4.0</td>
      <td>
       <span class="methodname"><strong>DOMDocument::registerNodeClass()</strong></span>
       now has a tentative return of <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-domdocument.registernodeclass-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5780">
    <p><strong>Example #1 Adding a new method to DOMElement to ease our code</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">myElement </span><span style="color: #007700">extends </span><span style="color: #0000BB">DOMElement </span><span style="color: #007700">{<br />   function </span><span style="color: #0000BB">appendElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">) { <br />      return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(new </span><span style="color: #0000BB">myElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">));<br />   }<br />}<br /><br />class </span><span style="color: #0000BB">myDocument </span><span style="color: #007700">extends </span><span style="color: #0000BB">DOMDocument </span><span style="color: #007700">{<br />   function </span><span style="color: #0000BB">setRoot</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">) { <br />      return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(new </span><span style="color: #0000BB">myElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">));<br />   }<br />}<br /><br /></span><span style="color: #0000BB">$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">myDocument</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerNodeClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'DOMElement'</span><span style="color: #007700">, </span><span style="color: #DD0000">'myElement'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// From now on, adding an element to another costs only one method call ! <br /></span><span style="color: #0000BB">$root </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setRoot</span><span style="color: #007700">(</span><span style="color: #DD0000">'root'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$child </span><span style="color: #007700">= </span><span style="color: #0000BB">$root</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'child'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&lt;?xml version=&quot;1.0&quot;?&gt;
&lt;root&gt;&lt;child foo=&quot;bar&quot;/&gt;&lt;/root&gt;</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5781">
    <p><strong>Example #2 Retrieving elements as custom class</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">myElement </span><span style="color: #007700">extends </span><span style="color: #0000BB">DOMElement </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__toString</span><span style="color: #007700">() {<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nodeValue</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadXML</span><span style="color: #007700">(</span><span style="color: #DD0000">"&lt;root&gt;&lt;element&gt;&lt;child&gt;text in child&lt;/child&gt;&lt;/element&gt;&lt;/root&gt;"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerNodeClass</span><span style="color: #007700">(</span><span style="color: #DD0000">"DOMElement"</span><span style="color: #007700">, </span><span style="color: #DD0000">"myElement"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$element </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElementsByTagName</span><span style="color: #007700">(</span><span style="color: #DD0000">"child"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// And take advantage of the __toString method..<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$element</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(9) &quot;myElement&quot;
text in child</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5782">
    <p><strong>Example #3 Retrieving owner document</strong></p>
    <div class="example-contents"><p>
     When instantiating a custom <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span> the
     <var class="varname">ownerDocument</var> property will refer to the instantiated
     class. However, if all references to that class are removed, it
     will be destroyed and new <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span> will be
     created instead. For that reason you might use
     <span class="function"><strong>DOMDocument::registerNodeClass()</strong></span> with
     <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span>
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyDOMDocument </span><span style="color: #007700">extends </span><span style="color: #0000BB">DOMDocument </span><span style="color: #007700">{<br />}<br /><br />class </span><span style="color: #0000BB">MyOtherDOMDocument </span><span style="color: #007700">extends </span><span style="color: #0000BB">DOMDocument </span><span style="color: #007700">{<br />}<br /><br /></span><span style="color: #FF8000">// Create MyDOMDocument with some XML<br /></span><span style="color: #0000BB">$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyDOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadXML</span><span style="color: #007700">(</span><span style="color: #DD0000">"&lt;root&gt;&lt;element&gt;&lt;child&gt;text in child&lt;/child&gt;&lt;/element&gt;&lt;/root&gt;"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$child </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElementsByTagName</span><span style="color: #007700">(</span><span style="color: #DD0000">"child"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The current owner of the node is MyDOMDocument<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ownerDocument</span><span style="color: #007700">));<br /></span><span style="color: #FF8000">// MyDOMDocument is destroyed<br /></span><span style="color: #007700">unset(</span><span style="color: #0000BB">$doc</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// And new DOMDocument instance is created<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ownerDocument</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Import a node from MyDOMDocument<br /></span><span style="color: #0000BB">$newdoc </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyOtherDOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$child </span><span style="color: #007700">= </span><span style="color: #0000BB">$newdoc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">importNode</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Register custom DOMDocument<br /></span><span style="color: #0000BB">$newdoc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerNodeClass</span><span style="color: #007700">(</span><span style="color: #DD0000">"DOMDocument"</span><span style="color: #007700">, </span><span style="color: #DD0000">"MyOtherDOMDocument"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ownerDocument</span><span style="color: #007700">));<br />unset(</span><span style="color: #0000BB">$doc</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// New MyOtherDOMDocument is created<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ownerDocument</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(13) &quot;MyDOMDocument&quot;
string(11) &quot;DOMDocument&quot;
string(18) &quot;MyOtherDOMDocument&quot;
string(18) &quot;MyOtherDOMDocument&quot;</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="domdocument.registernodeclass.example.transient">
    <p><strong>Example #4 Custom objects are transient</strong></p>
    <div class="caution"><strong class="caution">Caution</strong>
     <p class="simpara">
      Objects of the registered node classes are transient, i.e. they are
      destroyed when they are no longer referenced from PHP code, and recreated
      when being retrieved again. That implies that custom property values will be
      lost after recreation.
     </p>
    </div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyDOMElement </span><span style="color: #007700">extends </span><span style="color: #0000BB">DOMElement<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$myProp </span><span style="color: #007700">= </span><span style="color: #DD0000">'default value'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerNodeClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'DOMElement'</span><span style="color: #007700">, </span><span style="color: #DD0000">'MyDOMElement'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$node </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$node</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">myProp </span><span style="color: #007700">= </span><span style="color: #DD0000">'modified value'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$node</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">childNodes</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">myProp</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />unset(</span><span style="color: #0000BB">$node</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">childNodes</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">myProp</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">modified value
default value</pre>
</div>
    </div>
   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/registernodeclass.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.registernodeclass%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.registernodeclass&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.registernodeclass.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93755">  <div class="votes">
    <div id="Vu93755">
    <a href="/manual/vote-note.php?id=93755&amp;page=domdocument.registernodeclass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93755">
    <a href="/manual/vote-note.php?id=93755&amp;page=domdocument.registernodeclass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93755" title="100% like this...">
    4
    </div>
  </div>
  <a href="#93755" class="name">
  <strong class="user"><em>crh3675 at gmail dot com</em></strong></a><a class="genanchor" href="#93755"> &para;</a><div class="date" title="2009-09-25 08:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93755">
<div class="phpcode"><code><span class="html">Creating innerHTML and outerHTML<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">DOMHTMLElement </span><span class="keyword">extends </span><span class="default">DOMElement<br /></span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">() { </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">();} <br />    <br />    public function </span><span class="default">innerHTML</span><span class="keyword">()<br />    {<br />        </span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br />      foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">){<br />          </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />        }<br />        </span><span class="default">$content </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();<br />        return </span><span class="default">$content</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">outerHTML</span><span class="keyword">()<br />    {<br />        </span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br />        </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />        </span><span class="default">$content </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();<br />        return </span><span class="default">$content</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$dom </span><span class="keyword">= </span><span class="default">DOMDocument</span><span class="keyword">::</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">registerNodeClass</span><span class="keyword">(</span><span class="string">'DOMElement'</span><span class="keyword">,</span><span class="string">'DOMHTMLElement'</span><span class="keyword">);<br />            <br />if(</span><span class="default">$dom</span><span class="keyword">)<br />{<br />    </span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">DOMXpath</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);    <br />    </span><span class="default">$regions </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"//*[contains(@class, 'editable')]"</span><span class="keyword">);    <br />    </span><span class="default">$content </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    <br />    foreach(</span><span class="default">$regions </span><span class="keyword">as </span><span class="default">$region</span><span class="keyword">){<br />        </span><span class="default">$content </span><span class="keyword">.= </span><span class="default">$region</span><span class="keyword">-&gt;</span><span class="default">outerHTML</span><span class="keyword">();<br />    }    <br />    <br />    return </span><span class="default">$content</span><span class="keyword">;<br />    <br />}else{                <br />    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Cannot parse HTML.  Please verify the syntax is correct.'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92394">  <div class="votes">
    <div id="Vu92394">
    <a href="/manual/vote-note.php?id=92394&amp;page=domdocument.registernodeclass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92394">
    <a href="/manual/vote-note.php?id=92394&amp;page=domdocument.registernodeclass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92394" title="66% like this...">
    1
    </div>
  </div>
  <a href="#92394" class="name">
  <strong class="user"><em>arnold at adaniels dot nl</em></strong></a><a class="genanchor" href="#92394"> &para;</a><div class="date" title="2009-07-22 03:10"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92394">
<div class="phpcode"><code><span class="html">Note than save and saveXML are not affected by __toString().</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.registernodeclass&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.registernodeclass.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domdocument.php">DOMDocument</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domdocument.adoptnode.php" title="adoptNode">adoptNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.append.php" title="append">append</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createattribute.php" title="createAttribute">createAttribute</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createattributens.php" title="createAttributeNS">createAttributeNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createcdatasection.php" title="createCDATASection">createCDATASection</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createcomment.php" title="createComment">createComment</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createdocumentfragment.php" title="createDocumentFragment">createDocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createelement.php" title="createElement">createElement</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createelementns.php" title="createElementNS">createElementNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createentityreference.php" title="createEntityReference">createEntityReference</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createprocessinginstruction.php" title="createProcessingInstruction">createProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createtextnode.php" title="createTextNode">createTextNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementbyid.php" title="getElementById">getElementById</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementsbytagname.php" title="getElementsByTagName">getElementsByTagName</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementsbytagnamens.php" title="getElementsByTagNameNS">getElementsByTagNameNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.importnode.php" title="importNode">importNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.load.php" title="load">load</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadhtml.php" title="loadHTML">loadHTML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadhtmlfile.php" title="loadHTMLFile">loadHTMLFile</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadxml.php" title="loadXML">loadXML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.normalizedocument.php" title="normalizeDocument">normalizeDocument</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.prepend.php" title="prepend">prepend</a>
                        </li>
                                                <li class="current">
                            <a href="domdocument.registernodeclass.php" title="registerNodeClass">registerNodeClass</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.relaxngvalidate.php" title="relaxNGValidate">relaxNGValidate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.relaxngvalidatesource.php" title="relaxNGValidateSource">relaxNGValidateSource</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.replacechildren.php" title="replaceChildren">replaceChildren</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.save.php" title="save">save</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savehtml.php" title="saveHTML">saveHTML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savehtmlfile.php" title="saveHTMLFile">saveHTMLFile</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savexml.php" title="saveXML">saveXML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.schemavalidate.php" title="schemaValidate">schemaValidate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.schemavalidatesource.php" title="schemaValidateSource">schemaValidateSource</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.validate.php" title="validate">validate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.xinclude.php" title="xinclude">xinclude</a>
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
