<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMElement::setAttribute - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domelement.setattribute.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domelement.setattribute.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domelement.setattribute.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domelement.php">
 <link rel="prev" href="https://www.php.net/manual/en/domelement.replacewith.php">
 <link rel="next" href="https://www.php.net/manual/en/domelement.setattributenode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domelement.setattribute.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domelement.setattribute.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domelement.setattribute.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domelement.setattribute.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domelement.setattribute.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domelement.setattribute.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domelement.setattribute.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domelement.setattribute.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domelement.setattribute.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domelement.setattribute.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domelement.setattribute.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Adds new or modifies existing attribute" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMElement::setAttribute - Manual" />
<meta name="twitter:description" content="Adds new or modifies existing attribute" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMElement::setAttribute - Manual" />
<meta itemprop="description" content="Adds new or modifies existing attribute" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Adds new or modifies existing attribute" />

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
        <a href="domelement.setattributenode.php">
          DOMElement::setAttributeNode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domelement.replacewith.php">
          &laquo; DOMElement::replaceWith        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domelement.php'>DOMElement</a></li>      </ul>
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
            <option value='en/domelement.setattribute.php' selected="selected">English</option>
            <option value='de/domelement.setattribute.php'>German</option>
            <option value='es/domelement.setattribute.php'>Spanish</option>
            <option value='fr/domelement.setattribute.php'>French</option>
            <option value='it/domelement.setattribute.php'>Italian</option>
            <option value='ja/domelement.setattribute.php'>Japanese</option>
            <option value='pt_BR/domelement.setattribute.php'>Brazilian Portuguese</option>
            <option value='ru/domelement.setattribute.php'>Russian</option>
            <option value='tr/domelement.setattribute.php'>Turkish</option>
            <option value='uk/domelement.setattribute.php'>Ukrainian</option>
            <option value='zh/domelement.setattribute.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domelement.setattribute" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMElement::setAttribute</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMElement::setAttribute</span> &mdash; <span class="dc-title">Adds new or modifies existing attribute</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domelement.setattribute-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMElement::setAttribute</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   Sets an attribute with name <code class="parameter">qualifiedName</code> to the given
   value. If the attribute does not exist, it will be created.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domelement.setattribute-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">qualifiedName</code></dt>
     <dd>
      <p class="para">
       The name of the attribute.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The value of the attribute.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domelement.setattribute-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The created or modified <span class="classname"><a href="class.domattr.php" class="classname">DOMAttr</a></span> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-domelement.setattribute-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   <dl>
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-no-modification-allowed-err">DOM_NO_MODIFICATION_ALLOWED_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if the node is readonly.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-domelement.setattribute-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5806">
    <p><strong>Example #1 Setting an attribute</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">"1.0"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$node </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">"para"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$newnode </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$node</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$newnode</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">"align"</span><span style="color: #007700">, </span><span style="color: #DD0000">"left"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domelement.setattribute-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domelement.hasattribute.php" class="methodname" rel="rdfs-seeAlso">DOMElement::hasAttribute()</a> - Checks to see if attribute exists</span></li>
    <li><span class="methodname"><a href="domelement.getattribute.php" class="methodname" rel="rdfs-seeAlso">DOMElement::getAttribute()</a> - Returns value of attribute</span></li>
    <li><span class="methodname"><a href="domelement.removeattribute.php" class="methodname" rel="rdfs-seeAlso">DOMElement::removeAttribute()</a> - Removes attribute</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domelement/setattribute.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomelement.setattribute%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domelement.setattribute&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domelement.setattribute.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100856">  <div class="votes">
    <div id="Vu100856">
    <a href="/manual/vote-note.php?id=100856&amp;page=domelement.setattribute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100856">
    <a href="/manual/vote-note.php?id=100856&amp;page=domelement.setattribute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100856" title="74% like this...">
    13
    </div>
  </div>
  <a href="#100856" class="name">
  <strong class="user"><em>Rakesh Verma - rakeshnsony at gmail dot com</em></strong></a><a class="genanchor" href="#100856"> &para;</a><div class="date" title="2010-11-10 11:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100856">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//Store your html into $html variable.<br /></span><span class="default">$html</span><span class="keyword">=</span><span class="string">"<br />&lt;html&gt;<br />&lt;head&gt;<br />&lt;title&gt;Untitled Document&lt;/title&gt;<br />&lt;/head&gt;<br /><br />&lt;body&gt;<br />    &lt;a href='<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>'&gt;Example&lt;/a&gt;&lt;br&gt;<br />    &lt;a href='<a href="http://google.com" rel="nofollow" target="_blank">http://google.com</a>'&gt;Google&lt;/a&gt;&lt;br&gt;<br />    <br />    &lt;a href='<a href="http://www.yahoo.com" rel="nofollow" target="_blank">http://www.yahoo.com</a>'&gt;Yahoo&lt;/a&gt;&lt;br&gt;<br />&lt;/body&gt;<br /><br />&lt;/html&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);<br /><br /></span><span class="comment">//Evaluate Anchor tag in HTML<br /></span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);<br /></span><span class="default">$hrefs </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="string">"/html/body//a"</span><span class="keyword">);<br /><br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$hrefs</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$href </span><span class="keyword">= </span><span class="default">$hrefs</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />        </span><span class="default">$url </span><span class="keyword">= </span><span class="default">$href</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'href'</span><span class="keyword">);<br /><br />        </span><span class="comment">//remove and set target attribute        <br />        </span><span class="default">$href</span><span class="keyword">-&gt;</span><span class="default">removeAttribute</span><span class="keyword">(</span><span class="string">'target'</span><span class="keyword">);<br />        </span><span class="default">$href</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">"target"</span><span class="keyword">, </span><span class="string">"_blank"</span><span class="keyword">);<br /><br />        </span><span class="default">$newURL</span><span class="keyword">=</span><span class="default">$url</span><span class="keyword">.</span><span class="string">"/newurl"</span><span class="keyword">;<br /><br />        </span><span class="comment">//remove and set href attribute        <br />        </span><span class="default">$href</span><span class="keyword">-&gt;</span><span class="default">removeAttribute</span><span class="keyword">(</span><span class="string">'href'</span><span class="keyword">);<br />        </span><span class="default">$href</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">"href"</span><span class="keyword">, </span><span class="default">$newURL</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// save html<br /></span><span class="default">$html</span><span class="keyword">=</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();<br /><br />echo </span><span class="default">$html</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112357">  <div class="votes">
    <div id="Vu112357">
    <a href="/manual/vote-note.php?id=112357&amp;page=domelement.setattribute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112357">
    <a href="/manual/vote-note.php?id=112357&amp;page=domelement.setattribute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112357" title="57% like this...">
    2
    </div>
  </div>
  <a href="#112357" class="name">
  <strong class="user"><em>lehal2@hotmail</em></strong></a><a class="genanchor" href="#112357"> &para;</a><div class="date" title="2013-06-06 09:44"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112357">
<div class="phpcode"><code><span class="html">The use of Dom to first remove and then add the width and height to the first img tag from the text.I hope it help you to save your time<br /><span class="default">&lt;?php<br />$html </span><span class="keyword">= </span><span class="string">'<br /><br />            &lt;img src="<a href="http://www.example.com/images/header.jpg" rel="nofollow" target="_blank">http://www.example.com/images/header.jpg</a>" width="898" height="223" style="border-bottom:5px solid #cccccc;"/&gt;<br />        &lt;img src="<a href="http://www.example.com/images/header2.jpg" rel="nofollow" target="_blank">http://www.example.com/images/header2.jpg</a>" width="898" height="223" style="border-bottom:5px solid #cccccc;"/&gt;<br />        '</span><span class="keyword">;<br /><br /></span><span class="default">$doc </span><span class="keyword">= </span><span class="default">DOMDocument</span><span class="keyword">::</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);<br /></span><span class="default">$c </span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />foreach(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'img'</span><span class="keyword">) as </span><span class="default">$image</span><span class="keyword">){<br />    if (</span><span class="default">$c</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">) continue;<br />    foreach(array(</span><span class="string">'width'</span><span class="keyword">, </span><span class="string">'height'</span><span class="keyword">) as </span><span class="default">$attribute_to_remove</span><span class="keyword">){<br />        echo </span><span class="default">$attribute_to_remove</span><span class="keyword">;<br />        if(</span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">hasAttribute</span><span class="keyword">(</span><span class="default">$attribute_to_remove</span><span class="keyword">)){<br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">removeAttribute</span><span class="keyword">(</span><span class="default">$attribute_to_remove</span><span class="keyword">);<br /><br />        }<br />        if(</span><span class="default">$attribute_to_remove</span><span class="keyword">==</span><span class="string">'height'</span><span class="keyword">){<br />            if(!</span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">hasAttribute</span><span class="keyword">(</span><span class="default">$attribute_to_remove</span><span class="keyword">)){<br />                </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">$attribute_to_remove</span><span class="keyword">,</span><span class="string">'220'</span><span class="keyword">);<br /><br />            }}<br />        if(</span><span class="default">$attribute_to_remove</span><span class="keyword">==</span><span class="string">'width'</span><span class="keyword">){<br />      if(!</span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">hasAttribute</span><span class="keyword">(</span><span class="default">$attribute_to_remove</span><span class="keyword">)){<br />            </span><span class="default">$image</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">$attribute_to_remove</span><span class="keyword">,</span><span class="string">'700'</span><span class="keyword">);<br /><br />        }}<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />    }<br />}<br />echo </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126657">  <div class="votes">
    <div id="Vu126657">
    <a href="/manual/vote-note.php?id=126657&amp;page=domelement.setattribute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126657">
    <a href="/manual/vote-note.php?id=126657&amp;page=domelement.setattribute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126657" title="57% like this...">
    1
    </div>
  </div>
  <a href="#126657" class="name">
  <strong class="user"><em>info at ensostudio dot ru</em></strong></a><a class="genanchor" href="#126657"> &para;</a><div class="date" title="2021-12-02 06:17"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126657">
<div class="phpcode"><code><span class="html">Solution to render HTML 5 tags with attributes with/without value:<br /><span class="default">&lt;?php<br />$dom </span><span class="keyword">= new </span><span class="default">DOMImplementation</span><span class="keyword">();<br /></span><span class="default">$doc </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createDocument</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="string">'html'</span><span class="keyword">, </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createDocumentType</span><span class="keyword">(</span><span class="string">'html'</span><span class="keyword">));<br /><br /></span><span class="default">$tag </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'input'</span><span class="keyword">));<br /></span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'type'</span><span class="keyword">, </span><span class="string">'text'</span><span class="keyword">);<br /></span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'disabled'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br /><br />echo </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">(</span><span class="default">$tag</span><span class="keyword">); </span><span class="comment">// &lt;input type="text" disabled=""&gt;<br /><br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">normalize</span><span class="keyword">(); </span><span class="comment">// normalize attributes<br /></span><span class="keyword">echo </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">(</span><span class="default">$tag</span><span class="keyword">); </span><span class="comment">// &lt;input type="text" disabled&gt;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84211">  <div class="votes">
    <div id="Vu84211">
    <a href="/manual/vote-note.php?id=84211&amp;page=domelement.setattribute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84211">
    <a href="/manual/vote-note.php?id=84211&amp;page=domelement.setattribute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84211" title="56% like this...">
    2
    </div>
  </div>
  <a href="#84211" class="name">
  <strong class="user"><em>address at gmail dot com</em></strong></a><a class="genanchor" href="#84211"> &para;</a><div class="date" title="2008-07-03 07:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84211">
<div class="phpcode"><code><span class="html">If wanting to set an attribute of an element with unique id of "1"<br /><br /><span class="default">&lt;?php<br />$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'test.xml'</span><span class="keyword">);<br /></span><span class="default">$xp </span><span class="keyword">= new </span><span class="default">DomXPath</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$xp</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"//*[@id = '1']"</span><span class="keyword">);<br /></span><span class="default">$res</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'title'</span><span class="keyword">,</span><span class="string">'2'</span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="string">'test.xml'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73599">  <div class="votes">
    <div id="Vu73599">
    <a href="/manual/vote-note.php?id=73599&amp;page=domelement.setattribute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73599">
    <a href="/manual/vote-note.php?id=73599&amp;page=domelement.setattribute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73599" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#73599" class="name">
  <strong class="user"><em>karvjorm at users.sourceforge.net</em></strong></a><a class="genanchor" href="#73599"> &para;</a><div class="date" title="2007-03-02 03:05"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73599">
<div class="phpcode"><code><span class="html">$dom = new DomDocument('1.0','iso-8859-15');<br /><br />$ht_ml = $dom-&gt;appendChild($dom-&gt;createElement('html'));<br />$ht_ml-&gt;setAttribute('xmlns','<a href="http://www.w3.org/1999/xhtml" rel="nofollow" target="_blank">http://www.w3.org/1999/xhtml</a>');<br />$ht_ml-&gt;setAttribute('xml:lang','fi');<br />$ht_ml-&gt;setAttribute('lang','fi');<br /><br />Result:<br /><br />&lt;?xml version="1.0" encoding="iso-8859-15"?&gt;<br />&lt;html xmlns="<a href="http://www.w3.org/1999/xhtml" rel="nofollow" target="_blank">http://www.w3.org/1999/xhtml</a>" xml:lang="fi" lang="fi"&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="76818">  <div class="votes">
    <div id="Vu76818">
    <a href="/manual/vote-note.php?id=76818&amp;page=domelement.setattribute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76818">
    <a href="/manual/vote-note.php?id=76818&amp;page=domelement.setattribute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76818" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#76818" class="name">
  <strong class="user"><em>Vasil Rangelov</em></strong></a><a class="genanchor" href="#76818"> &para;</a><div class="date" title="2007-07-31 04:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76818">
<div class="phpcode"><code><span class="html">@karvjorm,<br />Using this method is not exactly a good practice. Infact, I think it may be a bug.<br />Names beginning with "xml" are reserved (for namespaces in this case).<br />setAttribute() should return false in this case I think, but I suppose it doesn't.<br /><br />Still, the right way to do it is with createElementNS().<br />It lets you specify the namespace when creating the element node.<br /><br />So the equivalent to yours ($html added to allow word wrapping) is:<br /><br />$dom = new DomDocument('1.0','iso-8859-15');<br />$html = $dom-&gt;createElementNS('<a href="http://www.w3.org/1999/xhtml" rel="nofollow" target="_blank">http://www.w3.org/1999/xhtml</a>', 'html');<br />$ht_ml = $dom-&gt;appendChild($html);<br />$ht_ml-&gt;setAttribute('xml:lang','fi');<br />$ht_ml-&gt;setAttribute('lang','fi');</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domelement.setattribute&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domelement.setattribute.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domelement.php">DOMElement</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domelement.after.php" title="after">after</a>
                        </li>
                                                <li class="">
                            <a href="domelement.append.php" title="append">append</a>
                        </li>
                                                <li class="">
                            <a href="domelement.before.php" title="before">before</a>
                        </li>
                                                <li class="">
                            <a href="domelement.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="domelement.getattribute.php" title="getAttribute">getAttribute</a>
                        </li>
                                                <li class="">
                            <a href="domelement.getattributenames.php" title="getAttributeNames">getAttributeNames</a>
                        </li>
                                                <li class="">
                            <a href="domelement.getattributenode.php" title="getAttributeNode">getAttributeNode</a>
                        </li>
                                                <li class="">
                            <a href="domelement.getattributenodens.php" title="getAttributeNodeNS">getAttributeNodeNS</a>
                        </li>
                                                <li class="">
                            <a href="domelement.getattributens.php" title="getAttributeNS">getAttributeNS</a>
                        </li>
                                                <li class="">
                            <a href="domelement.getelementsbytagname.php" title="getElementsByTagName">getElementsByTagName</a>
                        </li>
                                                <li class="">
                            <a href="domelement.getelementsbytagnamens.php" title="getElementsByTagNameNS">getElementsByTagNameNS</a>
                        </li>
                                                <li class="">
                            <a href="domelement.hasattribute.php" title="hasAttribute">hasAttribute</a>
                        </li>
                                                <li class="">
                            <a href="domelement.hasattributens.php" title="hasAttributeNS">hasAttributeNS</a>
                        </li>
                                                <li class="">
                            <a href="domelement.insertadjacentelement.php" title="insertAdjacentElement">insertAdjacentElement</a>
                        </li>
                                                <li class="">
                            <a href="domelement.insertadjacenttext.php" title="insertAdjacentText">insertAdjacentText</a>
                        </li>
                                                <li class="">
                            <a href="domelement.prepend.php" title="prepend">prepend</a>
                        </li>
                                                <li class="">
                            <a href="domelement.remove.php" title="remove">remove</a>
                        </li>
                                                <li class="">
                            <a href="domelement.removeattribute.php" title="removeAttribute">removeAttribute</a>
                        </li>
                                                <li class="">
                            <a href="domelement.removeattributenode.php" title="removeAttributeNode">removeAttributeNode</a>
                        </li>
                                                <li class="">
                            <a href="domelement.removeattributens.php" title="removeAttributeNS">removeAttributeNS</a>
                        </li>
                                                <li class="">
                            <a href="domelement.replacechildren.php" title="replaceChildren">replaceChildren</a>
                        </li>
                                                <li class="">
                            <a href="domelement.replacewith.php" title="replaceWith">replaceWith</a>
                        </li>
                                                <li class="current">
                            <a href="domelement.setattribute.php" title="setAttribute">setAttribute</a>
                        </li>
                                                <li class="">
                            <a href="domelement.setattributenode.php" title="setAttributeNode">setAttributeNode</a>
                        </li>
                                                <li class="">
                            <a href="domelement.setattributenodens.php" title="setAttributeNodeNS">setAttributeNodeNS</a>
                        </li>
                                                <li class="">
                            <a href="domelement.setattributens.php" title="setAttributeNS">setAttributeNS</a>
                        </li>
                                                <li class="">
                            <a href="domelement.setidattribute.php" title="setIdAttribute">setIdAttribute</a>
                        </li>
                                                <li class="">
                            <a href="domelement.setidattributenode.php" title="setIdAttributeNode">setIdAttributeNode</a>
                        </li>
                                                <li class="">
                            <a href="domelement.setidattributens.php" title="setIdAttributeNS">setIdAttributeNS</a>
                        </li>
                                                <li class="">
                            <a href="domelement.toggleattribute.php" title="toggleAttribute">toggleAttribute</a>
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
