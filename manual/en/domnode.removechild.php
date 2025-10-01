<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMNode::removeChild - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domnode.removechild.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domnode.removechild.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domnode.removechild.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domnode.php">
 <link rel="prev" href="https://www.php.net/manual/en/domnode.normalize.php">
 <link rel="next" href="https://www.php.net/manual/en/domnode.replacechild.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domnode.removechild.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domnode.removechild.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domnode.removechild.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domnode.removechild.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domnode.removechild.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domnode.removechild.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domnode.removechild.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domnode.removechild.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domnode.removechild.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domnode.removechild.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domnode.removechild.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Removes child from list of children" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMNode::removeChild - Manual" />
<meta name="twitter:description" content="Removes child from list of children" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMNode::removeChild - Manual" />
<meta itemprop="description" content="Removes child from list of children" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Removes child from list of children" />

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
        <a href="domnode.replacechild.php">
          DOMNode::replaceChild &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domnode.normalize.php">
          &laquo; DOMNode::normalize        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domnode.php'>DOMNode</a></li>      </ul>
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
            <option value='en/domnode.removechild.php' selected="selected">English</option>
            <option value='de/domnode.removechild.php'>German</option>
            <option value='es/domnode.removechild.php'>Spanish</option>
            <option value='fr/domnode.removechild.php'>French</option>
            <option value='it/domnode.removechild.php'>Italian</option>
            <option value='ja/domnode.removechild.php'>Japanese</option>
            <option value='pt_BR/domnode.removechild.php'>Brazilian Portuguese</option>
            <option value='ru/domnode.removechild.php'>Russian</option>
            <option value='tr/domnode.removechild.php'>Turkish</option>
            <option value='uk/domnode.removechild.php'>Ukrainian</option>
            <option value='zh/domnode.removechild.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domnode.removechild" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMNode::removeChild</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMNode::removeChild</span> &mdash; <span class="dc-title">
   Removes child from list of children
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domnode.removechild-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMNode::removeChild</strong></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$child</code></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This functions removes a child from a list of children.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domnode.removechild-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">child</code></dt>
     <dd>
      <p class="para">
       The removed child.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domnode.removechild-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If the child could be removed the function returns the old child or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-domnode.removechild-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   <dl>
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-no-modification-allowed-err">DOM_NO_MODIFICATION_ALLOWED_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if this node is readonly.
      </p>
     </dd>
    
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-not-found-err">DOM_NOT_FOUND_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if <code class="parameter">child</code> is not a child of this node.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-domnode.removechild-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   The following example will delete the <code class="literal">chapter</code> element of our XML document.
   <div class="example" id="example-5822">
    <p><strong>Example #1 Removing a child</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book-docbook.xml'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$book </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">documentElement</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// we retrieve the chapter and remove it from the book<br /></span><span style="color: #0000BB">$chapter </span><span style="color: #007700">= </span><span style="color: #0000BB">$book</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElementsByTagName</span><span style="color: #007700">(</span><span style="color: #DD0000">'chapter'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$oldchapter </span><span style="color: #007700">= </span><span style="color: #0000BB">$book</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">removeChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$chapter</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;!DOCTYPE book PUBLIC &quot;-//OASIS//DTD DocBook XML V4.1.2//EN&quot; 
          &quot;http://www.oasis-open.org/docbook/xml/4.1.2/docbookx.dtd&quot;&gt;
&lt;book id=&quot;listing&quot;&gt;
 &lt;title&gt;My lists&lt;/title&gt;
 
&lt;/book&gt;</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domnode.removechild-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domchildnode.remove.php" class="methodname" rel="rdfs-seeAlso">DOMChildNode::remove()</a> - Removes the node</span></li>
    <li><span class="methodname"><a href="domnode.appendchild.php" class="methodname" rel="rdfs-seeAlso">DOMNode::appendChild()</a> - Adds new child at the end of the children</span></li>
    <li><span class="methodname"><a href="domnode.replacechild.php" class="methodname" rel="rdfs-seeAlso">DOMNode::replaceChild()</a> - Replaces a child</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domnode/removechild.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomnode.removechild%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domnode.removechild&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.removechild.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="90292">  <div class="votes">
    <div id="Vu90292">
    <a href="/manual/vote-note.php?id=90292&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90292">
    <a href="/manual/vote-note.php?id=90292&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90292" title="83% like this...">
    92
    </div>
  </div>
  <a href="#90292" class="name">
  <strong class="user"><em>crazy888s at hotmail dot com</em></strong></a><a class="genanchor" href="#90292"> &para;</a><div class="date" title="2009-04-15 01:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90292">
<div class="phpcode"><code><span class="html">You can't remove DOMNodes from a DOMNodeList as you're iterating over them in a foreach loop. For example...
<br />
<br /><span class="default">&lt;?php
<br />$domNodeList </span><span class="keyword">= </span><span class="default">$domDocument</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagname</span><span class="keyword">(</span><span class="string">'p'</span><span class="keyword">);
<br />foreach ( </span><span class="default">$domNodeList </span><span class="keyword">as </span><span class="default">$domElement </span><span class="keyword">) {
<br />  </span><span class="comment">//  ...do stuff with $domElement...
<br />  </span><span class="default">$domElement</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$domElement</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />... will seemingly leave the internal iterator on the foreach out of wack and results will be quite strange. Though, making a queue of items to remove seems to work. For example...
<br />
<br /><span class="default">&lt;?php
<br />$domNodeList </span><span class="keyword">= </span><span class="default">$domDocument</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagname</span><span class="keyword">(</span><span class="string">'p'</span><span class="keyword">);
<br /></span><span class="default">$domElemsToRemove </span><span class="keyword">= array();
<br />foreach ( </span><span class="default">$domNodeList </span><span class="keyword">as </span><span class="default">$domElement </span><span class="keyword">) {
<br />  </span><span class="comment">// ...do stuff with $domElement...
<br />  </span><span class="default">$domElemsToRemove</span><span class="keyword">[] = </span><span class="default">$domElement</span><span class="keyword">;
<br />}
<br />foreach( </span><span class="default">$domElemsToRemove </span><span class="keyword">as </span><span class="default">$domElement </span><span class="keyword">){
<br />  </span><span class="default">$domElement</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$domElement</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56103">  <div class="votes">
    <div id="Vu56103">
    <a href="/manual/vote-note.php?id=56103&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56103">
    <a href="/manual/vote-note.php?id=56103&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56103" title="100% like this...">
    4
    </div>
  </div>
  <a href="#56103" class="name">
  <strong class="user"><em>blaine (at) blainegarrett (dot com)</em></strong></a><a class="genanchor" href="#56103"> &para;</a><div class="date" title="2005-08-23 10:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56103">
<div class="phpcode"><code><span class="html">This might be obvious, but might help someone as well...
<br />
<br />If you simply have a node that you need to remove (perhaps from an xpath) and don't know the parent node offhand (the examples seem to assume you have the parent in a variable), then you can do something easy like this...
<br />
<br />$node-&gt;parentNode-&gt;removeChild($node);
<br />
<br />parentNode is a scalar property of the Element.
<br />
<br />Hope that helps.
<br />
<br />--
<br />Blaine Garrett</span></code></div>
  </div>
 </div>
  <div class="note" id="49945">  <div class="votes">
    <div id="Vu49945">
    <a href="/manual/vote-note.php?id=49945&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49945">
    <a href="/manual/vote-note.php?id=49945&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49945" title="88% like this...">
    7
    </div>
  </div>
  <a href="#49945" class="name">
  <strong class="user"><em>vsematika at centrum dot cz</em></strong></a><a class="genanchor" href="#49945"> &para;</a><div class="date" title="2005-02-13 03:35"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49945">
<div class="phpcode"><code><span class="html">For those who don't understand &gt;sbeam at onsetcorps dot net on 02-Feb-2005 12:07&lt; 'hack', here's a little discussion:
<br />
<br />First but *wrong* try would be:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">foreach (</span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">) {
<br />   </span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>This doesn't work because DOM tree id modified on-the-fly and this confuses foreach loop.
<br />
<br />The idea behind sbeam's trick is that after removing the first item in the first iteration, the second item in childNodes nodelist immediately becomes the first item. That's why we must _always_ remove the first child. Here's another implementation:
<br />
<br /><span class="default">&lt;?php
<br />$count </span><span class="keyword">= </span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;
<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />   </span><span class="default">$oldNode </span><span class="keyword">= </span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)); </span><span class="comment">// !!! not item($i) !!!
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88592">  <div class="votes">
    <div id="Vu88592">
    <a href="/manual/vote-note.php?id=88592&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88592">
    <a href="/manual/vote-note.php?id=88592&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88592" title="78% like this...">
    16
    </div>
  </div>
  <a href="#88592" class="name">
  <strong class="user"><em>Justin Sheckler</em></strong></a><a class="genanchor" href="#88592"> &para;</a><div class="date" title="2009-01-30 08:44"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88592">
<div class="phpcode"><code><span class="html">These two functions might be helpful to anyone trying to delete a node and all of its children:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">deleteNode</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">) {
<br />    </span><span class="default">deleteChildren</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);
<br />    </span><span class="default">$parent </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">;
<br />    </span><span class="default">$oldnode </span><span class="keyword">= </span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);
<br />}
<br />
<br />function </span><span class="default">deleteChildren</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">) {
<br />    while (isset(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">)) {
<br />        </span><span class="default">deleteChildren</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">);
<br />        </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94445">  <div class="votes">
    <div id="Vu94445">
    <a href="/manual/vote-note.php?id=94445&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94445">
    <a href="/manual/vote-note.php?id=94445&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94445" title="81% like this...">
    7
    </div>
  </div>
  <a href="#94445" class="name">
  <strong class="user"><em>Justin Carlson</em></strong></a><a class="genanchor" href="#94445"> &para;</a><div class="date" title="2009-11-05 11:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94445">
<div class="phpcode"><code><span class="html">Just a note, if you remove a node the whitespace it occupied will remain if you save the file.
<br />
<br />To avoid this, use $document-&gt;preserveWhiteSpace = false;
<br />
<br />For Example:
<br />
<br /><span class="default">&lt;?php
<br />$document </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">();
<br /></span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84257">  <div class="votes">
    <div id="Vu84257">
    <a href="/manual/vote-note.php?id=84257&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84257">
    <a href="/manual/vote-note.php?id=84257&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84257" title="75% like this...">
    2
    </div>
  </div>
  <a href="#84257" class="name">
  <strong class="user"><em>Michael D (DigitalGemstones.com)</em></strong></a><a class="genanchor" href="#84257"> &para;</a><div class="date" title="2008-07-05 04:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84257">
<div class="phpcode"><code><span class="html">Note that iterating through the childNodes array and removing those children will stop the iteration.
<br />
<br />For example:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">foreach(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">)
<br />{
<br />  if(</span><span class="default">iWantToDeleteThisNode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">))
<br />     </span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Will not work.  Note that in removing the node, the childNodes array gets rebuilt (it seems) and so only the first item will be removed.  In order to properly remove all the children you want to remove, you will need to do something like the following:
<br />
<br /><span class="default">&lt;?php
<br />$nodesToDelete </span><span class="keyword">= array();
<br />foreach(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">)
<br />{
<br />  if(</span><span class="default">iWantToDeleteThisNode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">))
<br />    </span><span class="default">$nodesToDelete</span><span class="keyword">[] = </span><span class="default">$child</span><span class="keyword">;
<br />}
<br />foreach(</span><span class="default">$nodesToDelete </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />I believe this is actually more efficient than the first snippet would be (if it worked) but obviously I cannot benchmark it.</span></code></div>
  </div>
 </div>
  <div class="note" id="123576">  <div class="votes">
    <div id="Vu123576">
    <a href="/manual/vote-note.php?id=123576&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123576">
    <a href="/manual/vote-note.php?id=123576&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123576" title="66% like this...">
    1
    </div>
  </div>
  <a href="#123576" class="name">
  <strong class="user"><em>nggit@phpindonesia</em></strong></a><a class="genanchor" href="#123576"> &para;</a><div class="date" title="2019-02-01 02:29"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123576">
<div class="phpcode"><code><span class="html">You can use foreach to remove multiple elements from a DOMNodeList, only if you use a temporary array or via XPath query.<br />If not, the simplest way will be:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">while (</span><span class="default">$element </span><span class="keyword">= </span><span class="default">$nodeList</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)) {<br />    </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111786">  <div class="votes">
    <div id="Vu111786">
    <a href="/manual/vote-note.php?id=111786&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111786">
    <a href="/manual/vote-note.php?id=111786&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111786" title="66% like this...">
    1
    </div>
  </div>
  <a href="#111786" class="name">
  <strong class="user"><em>Kenney</em></strong></a><a class="genanchor" href="#111786"> &para;</a><div class="date" title="2013-03-28 10:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111786">
<div class="phpcode"><code><span class="html">This method will remove all child nodes but leave the attributes (and namespace declarations) intact.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">removeChildren</span><span class="keyword">( &amp;</span><span class="default">$node </span><span class="keyword">)<br />{<br />  </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">replaceChild</span><span class="keyword">(<br />    </span><span class="default">$n </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">cloneNode</span><span class="keyword">( </span><span class="default">false </span><span class="keyword">),<br />    </span><span class="default">$node </span><span class="keyword">);<br /><br />  </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$n</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82303">  <div class="votes">
    <div id="Vu82303">
    <a href="/manual/vote-note.php?id=82303&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82303">
    <a href="/manual/vote-note.php?id=82303&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82303" title="100% like this...">
    1
    </div>
  </div>
  <a href="#82303" class="name">
  <strong class="user"><em>Wala</em></strong></a><a class="genanchor" href="#82303"> &para;</a><div class="date" title="2008-04-04 10:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82303">
<div class="phpcode"><code><span class="html">I used the following to delete an entire node using the child element:<br /><br /><span class="default">&lt;?php<br />$childElement</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt; </span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$childElement</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I could not have thought of it without the help of everyone who contributed to this thread.<br /><br />Thanks!<br /><br />(I had to introduce the extra space between parentNode-&gt;removeChild to get rid of the wordwrap() warning while posting this note)</span></code></div>
  </div>
 </div>
  <div class="note" id="96167">  <div class="votes">
    <div id="Vu96167">
    <a href="/manual/vote-note.php?id=96167&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96167">
    <a href="/manual/vote-note.php?id=96167&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96167" title="50% like this...">
    0
    </div>
  </div>
  <a href="#96167" class="name">
  <strong class="user"><em>drimsun at gmail dot com</em></strong></a><a class="genanchor" href="#96167"> &para;</a><div class="date" title="2010-02-11 03:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96167">
<div class="phpcode"><code><span class="html">If you try to remove children of a nested node (e.g. a &lt;ul&gt; list that contains another &lt;ul&gt;) and only remove the first level of child nodes, you'll get a messed-up node object.<br /><br />Upon re-use of the messed-up node you'll get an error message that says: "Fatal error: Call to a member function blahblah() on a non-object".<br /><br />To remove ALL child nodes, use this recursive function instead:<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Helper function that removes all child nodes of $node recursively<br /> * (i.e. including child nodes of the child nodes and so forth).<br /> */<br /></span><span class="keyword">function </span><span class="default">remove_children</span><span class="keyword">(&amp;</span><span class="default">$node</span><span class="keyword">) {<br />  while (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">) {<br />    while (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">) {<br />      </span><span class="default">remove_children</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">);<br />    }<br />    </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84574">  <div class="votes">
    <div id="Vu84574">
    <a href="/manual/vote-note.php?id=84574&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84574">
    <a href="/manual/vote-note.php?id=84574&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84574" title="50% like this...">
    0
    </div>
  </div>
  <a href="#84574" class="name">
  <strong class="user"><em>tim cameron ryan</em></strong></a><a class="genanchor" href="#84574"> &para;</a><div class="date" title="2008-07-19 01:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84574">
<div class="phpcode"><code><span class="html">Or something like:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">while (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">)<br />     </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53367">  <div class="votes">
    <div id="Vu53367">
    <a href="/manual/vote-note.php?id=53367&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53367">
    <a href="/manual/vote-note.php?id=53367&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53367" title="50% like this...">
    0
    </div>
  </div>
  <a href="#53367" class="name">
  <strong class="user"><em>pedro at leb dot usp dot br</em></strong></a><a class="genanchor" href="#53367"> &para;</a><div class="date" title="2005-05-30 04:24"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53367">
<div class="phpcode"><code><span class="html">You may also use the hasChild function:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">while(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()) {<br />  </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />When you remove a childNode, the next node becomes the first one!</span></code></div>
  </div>
 </div>
  <div class="note" id="56556">  <div class="votes">
    <div id="Vu56556">
    <a href="/manual/vote-note.php?id=56556&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56556">
    <a href="/manual/vote-note.php?id=56556&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56556" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#56556" class="name">
  <strong class="user"><em>mytto at openxtrem dot com</em></strong></a><a class="genanchor" href="#56556"> &para;</a><div class="date" title="2005-09-07 02:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56556">
<div class="phpcode"><code><span class="html">Back again on removing childs and iterators robustness. <br /><br />Things get a bit more complicated when you only want to remove 'some' nodes according to a certain condition. Then you can't just remove the first one repeatedly.<br /><br />The trick is to copy the content of the node list into a more robust collection than DOMNodeList, I name array!<br /><br />The following piece of code will, for instance, remove all empty child nodes:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Copy childNodes array<br /></span><span class="default">$childNodes </span><span class="keyword">= array();<br />foreach(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$childNode</span><span class="keyword">) {<br />  </span><span class="default">$childNodes</span><span class="keyword">[] = </span><span class="default">$childNode</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Browse with the copy     <br /></span><span class="keyword">foreach (</span><span class="default">$childNodes </span><span class="keyword">as </span><span class="default">$childNode</span><span class="keyword">) {<br />  if (!</span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()); {<br />    </span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$childNode</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78326">  <div class="votes">
    <div id="Vu78326">
    <a href="/manual/vote-note.php?id=78326&amp;page=domnode.removechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78326">
    <a href="/manual/vote-note.php?id=78326&amp;page=domnode.removechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78326" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#78326" class="name">
  <strong class="user"><em>Vasil Rangelov</em></strong></a><a class="genanchor" href="#78326"> &para;</a><div class="date" title="2007-10-06 10:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78326">
<div class="phpcode"><code><span class="html">At the time of writing, I suppose rightfully, removeChild() removes only the selected node, but when you remove an element, it's child elements are not removed. If you want to achieve that, replaceChild() is the solution.<br /><br />The following should remove all descendants of the $node DOMNode, regardless of it's name:<br /><span class="default">&lt;?php<br />$node</span><span class="keyword">-&gt;</span><span class="default">replaceChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">), </span><span class="default">$node</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>If you're replacing the root element, you must explicitly state that with $node-&gt;documentElement as the second argument.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domnode.removechild&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.removechild.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domnode.php">DOMNode</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domnode.appendchild.php" title="appendChild">appendChild</a>
                        </li>
                                                <li class="">
                            <a href="domnode.c14n.php" title="C14N">C14N</a>
                        </li>
                                                <li class="">
                            <a href="domnode.c14nfile.php" title="C14NFile">C14NFile</a>
                        </li>
                                                <li class="">
                            <a href="domnode.clonenode.php" title="cloneNode">cloneNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.comparedocumentposition.php" title="compareDocumentPosition">compareDocumentPosition</a>
                        </li>
                                                <li class="">
                            <a href="domnode.contains.php" title="contains">contains</a>
                        </li>
                                                <li class="">
                            <a href="domnode.getlineno.php" title="getLineNo">getLineNo</a>
                        </li>
                                                <li class="">
                            <a href="domnode.getnodepath.php" title="getNodePath">getNodePath</a>
                        </li>
                                                <li class="">
                            <a href="domnode.getrootnode.php" title="getRootNode">getRootNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.hasattributes.php" title="hasAttributes">hasAttributes</a>
                        </li>
                                                <li class="">
                            <a href="domnode.haschildnodes.php" title="hasChildNodes">hasChildNodes</a>
                        </li>
                                                <li class="">
                            <a href="domnode.insertbefore.php" title="insertBefore">insertBefore</a>
                        </li>
                                                <li class="">
                            <a href="domnode.isdefaultnamespace.php" title="isDefaultNamespace">isDefaultNamespace</a>
                        </li>
                                                <li class="">
                            <a href="domnode.isequalnode.php" title="isEqualNode">isEqualNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.issamenode.php" title="isSameNode">isSameNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.issupported.php" title="isSupported">isSupported</a>
                        </li>
                                                <li class="">
                            <a href="domnode.lookupnamespaceuri.php" title="lookupNamespaceURI">lookupNamespaceURI</a>
                        </li>
                                                <li class="">
                            <a href="domnode.lookupprefix.php" title="lookupPrefix">lookupPrefix</a>
                        </li>
                                                <li class="">
                            <a href="domnode.normalize.php" title="normalize">normalize</a>
                        </li>
                                                <li class="current">
                            <a href="domnode.removechild.php" title="removeChild">removeChild</a>
                        </li>
                                                <li class="">
                            <a href="domnode.replacechild.php" title="replaceChild">replaceChild</a>
                        </li>
                                                <li class="">
                            <a href="domnode.sleep.php" title="_&#8203;_&#8203;sleep">_&#8203;_&#8203;sleep</a>
                        </li>
                                                <li class="">
                            <a href="domnode.wakeup.php" title="_&#8203;_&#8203;wakeup">_&#8203;_&#8203;wakeup</a>
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
