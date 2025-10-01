<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::createElement - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.createelement.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.createelement.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.createelement.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.createdocumentfragment.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.createelementns.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.createelement.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.createelement.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.createelement.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.createelement.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.createelement.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.createelement.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.createelement.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.createelement.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.createelement.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.createelement.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.createelement.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create new element node" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::createElement - Manual" />
<meta name="twitter:description" content="Create new element node" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::createElement - Manual" />
<meta itemprop="description" content="Create new element node" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create new element node" />

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
        <a href="domdocument.createelementns.php">
          DOMDocument::createElementNS &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.createdocumentfragment.php">
          &laquo; DOMDocument::createDocumentFragment        </a>
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
            <option value='en/domdocument.createelement.php' selected="selected">English</option>
            <option value='de/domdocument.createelement.php'>German</option>
            <option value='es/domdocument.createelement.php'>Spanish</option>
            <option value='fr/domdocument.createelement.php'>French</option>
            <option value='it/domdocument.createelement.php'>Italian</option>
            <option value='ja/domdocument.createelement.php'>Japanese</option>
            <option value='pt_BR/domdocument.createelement.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.createelement.php'>Russian</option>
            <option value='tr/domdocument.createelement.php'>Turkish</option>
            <option value='uk/domdocument.createelement.php'>Ukrainian</option>
            <option value='zh/domdocument.createelement.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.createelement" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::createElement</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::createElement</span> &mdash; <span class="dc-title">Create new element node</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.createelement-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::createElement</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function creates a new instance of class
   <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span>. This node will not show up in the document unless
it is inserted with (e.g.) <span class="function"><a href="domnode.appendchild.php" class="function">DOMNode::appendChild()</a></span>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domdocument.createelement-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">localName</code></dt>
     <dd>
      <p class="para">
       The tag name of the element.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The value of the element. By default, an empty element will be created.
       The value can also be set later with <a href="class.domnode.php#domnode.props.nodevalue" class="link">DOMElement::$nodeValue</a>.
      </p>
      <p class="para">
       The value is used verbatim except that the &lt; and &gt; entity
       references will escaped. Note that &amp; has to be manually escaped;
       otherwise it is regarded as starting an entity reference. Also &quot; won&#039;t be
       escaped.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domdocument.createelement-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a new instance of class <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   if an error occurred.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-domdocument.createelement-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   <dl>
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-invalid-character-err">DOM_INVALID_CHARACTER_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if <code class="parameter">localName</code> contains an invalid character.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-domdocument.createelement-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5767">
    <p><strong>Example #1 Creating a new element and inserting it as root</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$dom </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">, </span><span style="color: #DD0000">'utf-8'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$element </span><span style="color: #007700">= </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'test'</span><span style="color: #007700">, </span><span style="color: #DD0000">'This is the root element!'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// We insert the new element as root (child of the document)<br /></span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;test&gt;This is the root element!&lt;/test&gt;</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5768">
    <p><strong>Example #2 Passing text containing an unescaped &amp; as <code class="parameter">value</code></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$dom </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">, </span><span style="color: #DD0000">'utf-8'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$element </span><span style="color: #007700">= </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'me &amp; you'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Warning: DOMDocument::createElement(): unterminated entity reference             you in /in/BjTCg on line 4
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;foo/&gt;</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-domdocument.createelement-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The <code class="parameter">value</code> will <em>not</em> be escaped.
    Use <span class="methodname"><a href="domdocument.createtextnode.php" class="methodname">DOMDocument::createTextNode()</a></span> to create a
    text node with <em>escaping support</em>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-domdocument.createelement-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domnode.appendchild.php" class="methodname" rel="rdfs-seeAlso">DOMNode::appendChild()</a> - Adds new child at the end of the children</span></li>
    <li><span class="methodname"><a href="domdocument.createattribute.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::createAttribute()</a> - Create new attribute</span></li>
    <li><span class="methodname"><a href="domdocument.createattributens.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::createAttributeNS()</a> - Create new attribute node with an associated namespace</span></li>
    <li><span class="methodname"><a href="domdocument.createcdatasection.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::createCDATASection()</a> - Create new cdata node</span></li>
    <li><span class="methodname"><a href="domdocument.createcomment.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::createComment()</a> - Create new comment node</span></li>
    <li><span class="methodname"><a href="domdocument.createdocumentfragment.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::createDocumentFragment()</a> - Create new document fragment</span></li>
    <li><span class="methodname"><a href="domdocument.createelementns.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::createElementNS()</a> - Create new element node with an associated namespace</span></li>
    <li><span class="methodname"><a href="domdocument.createentityreference.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::createEntityReference()</a> - Create new entity reference node</span></li>
    <li><span class="methodname"><a href="domdocument.createprocessinginstruction.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::createProcessingInstruction()</a> - Creates new PI node</span></li>
    <li><span class="methodname"><a href="domdocument.createtextnode.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::createTextNode()</a> - Create new text node</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/createelement.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.createelement%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.createelement&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.createelement.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="73617">  <div class="votes">
    <div id="Vu73617">
    <a href="/manual/vote-note.php?id=73617&amp;page=domdocument.createelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73617">
    <a href="/manual/vote-note.php?id=73617&amp;page=domdocument.createelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73617" title="78% like this...">
    13
    </div>
  </div>
  <a href="#73617" class="name">
  <strong class="user"><em>mikek dot nospam at nospam dot muonics dot com</em></strong></a><a class="genanchor" href="#73617"> &para;</a><div class="date" title="2007-03-03 05:24"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73617">
<div class="phpcode"><code><span class="html">With regard to the note below about needing htmlentities to avoid warnings about unterminated entity references, I thought it worthwhile to mention that that you don't need to with createTextNode and DOMText::__construct.  If you mix both methods of setting text nodes and do (or don't) apply htmlentities consistently to all data to be displayed, you'll get &amp;amp;s (or warnings and badly-formed xml).<br /><br />It's probably in one's best interest to extend DOMElement and DOMDocument so that it creates a DOMText node and appends it, rather than passing it up to the DOMElement constructor.  Otherwise, good luck using (or not using) htmlentities in all the right places in your code, especially as code changes get made.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">XDOMElement </span><span class="keyword">extends </span><span class="default">DOMElement </span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$namespaceURI </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$namespaceURI</span><span class="keyword">);<br />    }<br />}<br /><br />class </span><span class="default">XDOMDocument </span><span class="keyword">extends </span><span class="default">DOMDocument </span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$version </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$version</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">registerNodeClass</span><span class="keyword">(</span><span class="string">'DOMElement'</span><span class="keyword">, </span><span class="string">'XDOMElement'</span><span class="keyword">);<br />    }<br /><br />    function </span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$namespaceURI </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$element </span><span class="keyword">= new </span><span class="default">XDOMElement</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$namespaceURI</span><span class="keyword">);<br />        </span><span class="default">$element </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">);<br />        if (!empty(</span><span class="default">$value</span><span class="keyword">)) {<br />            </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMText</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">));<br />        }<br />        return </span><span class="default">$element</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$doc1 </span><span class="keyword">= new </span><span class="default">XDOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc1_e1 </span><span class="keyword">= </span><span class="default">$doc1</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'bar &amp; baz'</span><span class="keyword">);<br /></span><span class="default">$doc1</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc1_e1</span><span class="keyword">);<br />echo </span><span class="default">$doc1</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /><br /></span><span class="default">$doc2 </span><span class="keyword">= new </span><span class="default">XDOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc2_e1 </span><span class="keyword">= </span><span class="default">$doc2</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">);<br /></span><span class="default">$doc2</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc2_e1</span><span class="keyword">);<br /></span><span class="default">$doc2_e1</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc2</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">'bar &amp; baz'</span><span class="keyword">));<br />echo </span><span class="default">$doc2</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Text specified in createElement:<br />&lt;?xml version=""?&gt;<br />&lt;foo&gt;bar &amp;amp; baz&lt;/foo&gt;<br /><br />Text added via createTextNode:<br />&lt;?xml version=""?&gt;<br />&lt;foo&gt;bar &amp;amp; baz&lt;/foo&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="91563">  <div class="votes">
    <div id="Vu91563">
    <a href="/manual/vote-note.php?id=91563&amp;page=domdocument.createelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91563">
    <a href="/manual/vote-note.php?id=91563&amp;page=domdocument.createelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91563" title="77% like this...">
    5
    </div>
  </div>
  <a href="#91563" class="name">
  <strong class="user"><em>yasindagli at gmail dot com</em></strong></a><a class="genanchor" href="#91563"> &para;</a><div class="date" title="2009-06-17 02:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91563">
<div class="phpcode"><code><span class="html">To create elements with attributes,<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$domObj</span><span class="keyword">, </span><span class="default">$tag_name</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$attributes </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">)<br />{<br />    </span><span class="default">$element </span><span class="keyword">= (</span><span class="default">$value </span><span class="keyword">!= </span><span class="default">NULL </span><span class="keyword">) ? </span><span class="default">$domObj</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$tag_name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) : </span><span class="default">$domObj</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$tag_name</span><span class="keyword">);<br /><br />    if( </span><span class="default">$attributes </span><span class="keyword">!= </span><span class="default">NULL </span><span class="keyword">)<br />    {<br />        foreach (</span><span class="default">$attributes </span><span class="keyword">as </span><span class="default">$attr</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />        {<br />            </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />        }<br />    }<br /><br />    return </span><span class="default">$element</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">);<br /><br /></span><span class="default">$elm </span><span class="keyword">= </span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">, array(</span><span class="string">'attr_name'</span><span class="keyword">=&gt;</span><span class="string">'attr_value'</span><span class="keyword">));<br /><br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$elm</span><span class="keyword">);<br /><br />echo </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />outputs : <br />&lt;?xml version="1.0" encoding="utf-8"?&gt;<br />&lt;foo attr_name="attr_value"&gt;bar&lt;/foo&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="72699">  <div class="votes">
    <div id="Vu72699">
    <a href="/manual/vote-note.php?id=72699&amp;page=domdocument.createelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72699">
    <a href="/manual/vote-note.php?id=72699&amp;page=domdocument.createelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72699" title="66% like this...">
    8
    </div>
  </div>
  <a href="#72699" class="name">
  <strong class="user"><em>sergsokolenko at gmail dot com</em></strong></a><a class="genanchor" href="#72699"> &para;</a><div class="date" title="2007-01-30 04:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72699">
<div class="phpcode"><code><span class="html">To avoid warning message "unterminated entity reference" you may use htmlentities() for escaping supplied value:<br /><span class="default">&lt;?php<br /></span><span class="comment">//...<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'name'</span><span class="keyword">, </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">))<br /></span><span class="comment">//...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107777">  <div class="votes">
    <div id="Vu107777">
    <a href="/manual/vote-note.php?id=107777&amp;page=domdocument.createelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107777">
    <a href="/manual/vote-note.php?id=107777&amp;page=domdocument.createelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107777" title="66% like this...">
    6
    </div>
  </div>
  <a href="#107777" class="name">
  <strong class="user"><em>funkathustra</em></strong></a><a class="genanchor" href="#107777"> &para;</a><div class="date" title="2012-03-04 08:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107777">
<div class="phpcode"><code><span class="html">Although the built-in DOM functions are great, since they're designed to support generic XML, generating HTML DOMs becomes particularly verbose. I ended up writing this function to drastically speed things up.<br />Instead of calling something like<br /><span class="default">&lt;?php <br />  $div </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">"div"</span><span class="keyword">);<br />  </span><span class="default">$div</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">"class"</span><span class="keyword">,</span><span class="string">"MyClass"</span><span class="keyword">);<br />  </span><span class="default">$div</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">"id"</span><span class="keyword">,</span><span class="string">"MyID"</span><span class="keyword">);<br />  </span><span class="default">$someOtherDiv</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$div</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>you can accomplish the same thing with:<br /><span class="default">&lt;?php<br />  $div </span><span class="keyword">= </span><span class="default">newElement</span><span class="keyword">(</span><span class="string">"div"</span><span class="keyword">, </span><span class="default">$someOtherDiv</span><span class="keyword">, </span><span class="string">"class=MyClass;id=MyID"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>The "key1=value;key2=value" syntax is really fast to use, but obviously doesn't hold up if your content has those characters in it. So, you can also pass it an array:<br /><span class="default">&lt;?php<br />  $div </span><span class="keyword">= </span><span class="default">newElement</span><span class="keyword">(</span><span class="string">"div"</span><span class="keyword">, </span><span class="default">$someOtherDiv</span><span class="keyword">, array(</span><span class="string">"class"</span><span class="keyword">,</span><span class="string">"MyClass"</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>Or an array of arrays, representing different attributes:<br /><span class="default">&lt;?php<br />  $div </span><span class="keyword">= </span><span class="default">newElement</span><span class="keyword">(</span><span class="string">"form"</span><span class="keyword">, </span><span class="default">$someOtherDiv</span><span class="keyword">, array(array(</span><span class="string">"method"</span><span class="keyword">,</span><span class="string">"get"</span><span class="keyword">), array(</span><span class="string">"action"</span><span class="keyword">,</span><span class="string">"/refer/?id=5"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Here's the function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">newElement</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, </span><span class="default">$insertInto </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">)<br />    {<br />        </span><span class="default">$tempEl </span><span class="keyword">=  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">);<br />        if(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">) == </span><span class="string">"string" </span><span class="keyword">&amp;&amp; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$attributesCollection </span><span class="keyword">=</span><span class="default">split</span><span class="keyword">(</span><span class="string">";"</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">);<br />            foreach(</span><span class="default">$attributesCollection  </span><span class="keyword">as </span><span class="default">$attribute</span><span class="keyword">)<br />            {<br />                </span><span class="default">$keyvalue </span><span class="keyword">= </span><span class="default">split</span><span class="keyword">(</span><span class="string">"="</span><span class="keyword">, </span><span class="default">$attribute</span><span class="keyword">);<br />                </span><span class="default">$tempEl</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">$keyvalue</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$keyvalue</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />            }<br />        }<br />        if(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">) == </span><span class="string">"array"</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) == </span><span class="string">"array"</span><span class="keyword">)<br />            {<br />                foreach(</span><span class="default">$params </span><span class="keyword">as </span><span class="default">$attribute</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$tempEl</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">$attribute</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$attribute</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />                }<br />            } else {<br />                </span><span class="default">$tempEl</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$params</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />            }<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116939">  <div class="votes">
    <div id="Vu116939">
    <a href="/manual/vote-note.php?id=116939&amp;page=domdocument.createelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116939">
    <a href="/manual/vote-note.php?id=116939&amp;page=domdocument.createelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116939" title="75% like this...">
    2
    </div>
  </div>
  <a href="#116939" class="name">
  <strong class="user"><em>tschmieder at bitworks dot de</em></strong></a><a class="genanchor" href="#116939"> &para;</a><div class="date" title="2015-03-24 05:42"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116939">
<div class="phpcode"><code><span class="html">Remember:<br /><br />If you want to perform multiple actions with a new node, you may need to create a copy of it before<br /><br />means: <br />## Create an address to an unique memory block !<br />$td = $dom-&gt;createElement('td');<br />## Change some things in this original unique pattern<br />$td-&gt;setAttribute('class', 'saldo');<br /><br />## clone the unique pattern to two own one's<br />$td1 = clone $td;<br />$td2 = clone $td;<br /><br />## alter properties in each one<br />$td1-&gt;nodeValue = 'Ich bin die erste neue Node';<br />$td2-&gt;nodeValue = 'Ich bin die zweite neue Node';<br /><br />## find the parent element<br />$tr = $dom-&gt;getElementById('t001-tr001');<br />## find the first and the last child (here only for clearity)<br />$first = $tr-&gt;firstChild;<br />$last = $tr-&gt;lastChild;<br /><br />## produce the new nodes<br />$newtd1 = $tr-&gt;insertBefore($td1, $first);<br />$newtd2 = $tr-&gt;appendChild($td2);<br /><br />conclusion:<br />YOU NEED AN ORIGINAL NEW NODE FOR EACH ACTION!</span></code></div>
  </div>
 </div>
  <div class="note" id="101106">  <div class="votes">
    <div id="Vu101106">
    <a href="/manual/vote-note.php?id=101106&amp;page=domdocument.createelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101106">
    <a href="/manual/vote-note.php?id=101106&amp;page=domdocument.createelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101106" title="66% like this...">
    3
    </div>
  </div>
  <a href="#101106" class="name">
  <strong class="user"><em>lars dot c dot magnusson at gmail dot com</em></strong></a><a class="genanchor" href="#101106"> &para;</a><div class="date" title="2010-11-26 01:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101106">
<div class="phpcode"><code><span class="html">You may think insertBefore and insertAfter is a direct alternative for appendChild, this is not the case. 
<br />
<br /><span class="default">&lt;?php
<br />$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(); 
<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />
<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$newNode</span><span class="keyword">); </span><span class="comment">//Works fine
<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">insertBefore</span><span class="keyword">(</span><span class="default">$newNode</span><span class="keyword">, </span><span class="default">$refNode</span><span class="keyword">); </span><span class="comment">//Will fail
<br />
<br /></span><span class="default">$refNode</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">insertBefore</span><span class="keyword">(</span><span class="default">$newNode</span><span class="keyword">, </span><span class="default">$refNode</span><span class="keyword">); </span><span class="comment">// thanx to yasindagli (first post)
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75712">  <div class="votes">
    <div id="Vu75712">
    <a href="/manual/vote-note.php?id=75712&amp;page=domdocument.createelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75712">
    <a href="/manual/vote-note.php?id=75712&amp;page=domdocument.createelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75712" title="64% like this...">
    4
    </div>
  </div>
  <a href="#75712" class="name">
  <strong class="user"><em>estill at gvtc dot com</em></strong></a><a class="genanchor" href="#75712"> &para;</a><div class="date" title="2007-06-12 02:38"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75712">
<div class="phpcode"><code><span class="html">Note that the second parameter (value), although convenient, is non-standard. You should create elements like this instead:<br /><br /><span class="default">&lt;?php<br />$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'iso-8859-1'</span><span class="keyword">);<br /><br /></span><span class="default">$root </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">);<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$root</span><span class="keyword">);<br /><br /></span><span class="default">$root_text </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">'This is the root element!'</span><span class="keyword">);<br /></span><span class="default">$root</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$root_text</span><span class="keyword">);<br /><br />print </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Or, alternatively, extend the DOMDocument class and add your own custom, convenience method to avoid intruding on the standard:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">CustomDOMDocument </span><span class="keyword">extends </span><span class="default">DOMDocument </span><span class="keyword">{<br />  function </span><span class="default">createElementWithText</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$child_text</span><span class="keyword">) {<br />    </span><span class="comment">// Creates an element with a child text node<br />    <br />    // @param  string  $name        element tag name<br />    // @param  string  $child_text  child node text<br />    <br />    // @return  object  new element<br />    <br />    </span><span class="default">$element </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />    <br />    </span><span class="default">$element_text </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="default">$child_text</span><span class="keyword">);<br />    </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$element_text</span><span class="keyword">);<br />    <br />    return </span><span class="default">$element</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">CustomDOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'iso-8859-1'</span><span class="keyword">);<br /><br /></span><span class="default">$root </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElementWithText</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">, </span><span class="string">'This is the root element!'</span><span class="keyword">);<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$root</span><span class="keyword">);<br /><br />print </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Also use caution with (or avoid) the 'DOMElement-&gt;nodeValue' property. It can return some unexpected values and changing its value will replace (remove) all descendants of the element with a single text node. It's also non-standard; according to the DOM spec it should return NULL.</span></code></div>
  </div>
 </div>
  <div class="note" id="91125">  <div class="votes">
    <div id="Vu91125">
    <a href="/manual/vote-note.php?id=91125&amp;page=domdocument.createelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91125">
    <a href="/manual/vote-note.php?id=91125&amp;page=domdocument.createelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91125" title="58% like this...">
    2
    </div>
  </div>
  <a href="#91125" class="name">
  <strong class="user"><em>chris AT cmbuckley DOT co DOT uk</em></strong></a><a class="genanchor" href="#91125"> &para;</a><div class="date" title="2009-05-26 07:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91125">
<div class="phpcode"><code><span class="html">Note that the NUL character "\0" is not in the list of invalid characters for $name, so no error is triggered, but the tag name will be truncated at the null byte:<br /><br /><span class="default">&lt;?php<br /><br />$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">);<br /></span><span class="default">$el </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'foo' </span><span class="keyword">. </span><span class="string">"\0" </span><span class="keyword">. </span><span class="string">'bar'</span><span class="keyword">, </span><span class="string">'Hello World'</span><span class="keyword">);<br />echo </span><span class="default">$el</span><span class="keyword">-&gt;</span><span class="default">tagName</span><span class="keyword">; </span><span class="comment">// outputs "foo"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121870">  <div class="votes">
    <div id="Vu121870">
    <a href="/manual/vote-note.php?id=121870&amp;page=domdocument.createelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121870">
    <a href="/manual/vote-note.php?id=121870&amp;page=domdocument.createelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121870" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#121870" class="name">
  <strong class="user"><em>dignat at yahoo dot com</em></strong></a><a class="genanchor" href="#121870"> &para;</a><div class="date" title="2017-11-15 10:25"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121870">
<div class="phpcode"><code><span class="html">To create an element with DomDocument and to escape ampersand in the value.<br /><br />Do this:<br /><br />$element = new DOMDocument('1.0', 'UTF-8');<br /><br />$test = $element-&gt;createElement('text');<br /><br />$test -&gt;appendChild($element-&gt;createElement('name'))<br />      -&gt;appendChild($element-&gt;createtextNode('&amp; I am ampersand');</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.createelement&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.createelement.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
