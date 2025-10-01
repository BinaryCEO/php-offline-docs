<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionProperty::setAccessible - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reflectionproperty.setaccessible.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reflectionproperty.setaccessible.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reflectionproperty.setaccessible.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.reflectionproperty.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionproperty.isvirtual.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionproperty.setrawvalue.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reflectionproperty.setaccessible.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reflectionproperty.setaccessible.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reflectionproperty.setaccessible.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reflectionproperty.setaccessible.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reflectionproperty.setaccessible.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reflectionproperty.setaccessible.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reflectionproperty.setaccessible.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reflectionproperty.setaccessible.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reflectionproperty.setaccessible.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reflectionproperty.setaccessible.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reflectionproperty.setaccessible.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set property accessibility" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionProperty::setAccessible - Manual" />
<meta name="twitter:description" content="Set property accessibility" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionProperty::setAccessible - Manual" />
<meta itemprop="description" content="Set property accessibility" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set property accessibility" />

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
        <a href="reflectionproperty.setrawvalue.php">
          ReflectionProperty::setRawValue &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionproperty.isvirtual.php">
          &laquo; ReflectionProperty::isVirtual        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.reflection.php'>Reflection</a></li>      <li><a href='class.reflectionproperty.php'>ReflectionProperty</a></li>      </ul>
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
            <option value='en/reflectionproperty.setaccessible.php' selected="selected">English</option>
            <option value='de/reflectionproperty.setaccessible.php'>German</option>
            <option value='es/reflectionproperty.setaccessible.php'>Spanish</option>
            <option value='fr/reflectionproperty.setaccessible.php'>French</option>
            <option value='it/reflectionproperty.setaccessible.php'>Italian</option>
            <option value='ja/reflectionproperty.setaccessible.php'>Japanese</option>
            <option value='pt_BR/reflectionproperty.setaccessible.php'>Brazilian Portuguese</option>
            <option value='ru/reflectionproperty.setaccessible.php'>Russian</option>
            <option value='tr/reflectionproperty.setaccessible.php'>Turkish</option>
            <option value='uk/reflectionproperty.setaccessible.php'>Ukrainian</option>
            <option value='zh/reflectionproperty.setaccessible.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reflectionproperty.setaccessible" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ReflectionProperty::setAccessible</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionProperty::setAccessible</span> &mdash; <span class="dc-title">Set property accessibility</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-reflectionproperty.setaccessible-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ReflectionProperty::setAccessible</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$accessible</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Enables access to a protected or private property via the <span class="methodname"><a href="reflectionproperty.getvalue.php" class="methodname">ReflectionProperty::getValue()</a></span> and
   <span class="methodname"><a href="reflectionproperty.setvalue.php" class="methodname">ReflectionProperty::setValue()</a></span> methods.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    As of PHP 8.1.0, calling this method has no effect; all properties are accessible by default.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-reflectionproperty.setaccessible-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">accessible</code></dt>
     <dd>
      <p class="para">
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to allow accessibility, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-reflectionproperty.setaccessible-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-reflectionproperty.setaccessible-examples">
 <h3 class="title">Examples</h3>
  <div class="example" id="example-5617">
   <p><strong>Example #1 Simple Class definition</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$property </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionProperty</span><span style="color: #007700">(</span><span style="color: #DD0000">"MyClass"</span><span style="color: #007700">, </span><span style="color: #DD0000">"foo"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$property</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAccessible</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$property</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">bar
Fatal error: Uncaught Error: Cannot access private property MyClass::$foo in /in/WJqTv:12</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-reflectionproperty.setaccessible-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="reflectionproperty.isprivate.php" class="methodname" rel="rdfs-seeAlso">ReflectionProperty::isPrivate()</a> - Checks if property is private</span></li>
    <li><span class="methodname"><a href="reflectionproperty.isprotected.php" class="methodname" rel="rdfs-seeAlso">ReflectionProperty::isProtected()</a> - Checks if property is protected</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionproperty/setaccessible.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freflectionproperty.setaccessible%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reflectionproperty.setaccessible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionproperty.setaccessible.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110414">  <div class="votes">
    <div id="Vu110414">
    <a href="/manual/vote-note.php?id=110414&amp;page=reflectionproperty.setaccessible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110414">
    <a href="/manual/vote-note.php?id=110414&amp;page=reflectionproperty.setaccessible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110414" title="91% like this...">
    41
    </div>
  </div>
  <a href="#110414" class="name">
  <strong class="user"><em>matthieu at mnapoli dot fr</em></strong></a><a class="genanchor" href="#110414"> &para;</a><div class="date" title="2012-10-19 08:50"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110414">
<div class="phpcode"><code><span class="html">Note that the property will only become accessible using the ReflectionProperty class. The property is still private or protected in the class instances.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{<br />     private </span><span class="default">$myProperty </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$class </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">"MyClass"</span><span class="keyword">);<br /></span><span class="default">$property </span><span class="keyword">= </span><span class="default">$class</span><span class="keyword">-&gt;</span><span class="default">getProperty</span><span class="keyword">(</span><span class="string">"myProperty"</span><span class="keyword">);<br /></span><span class="default">$property</span><span class="keyword">-&gt;</span><span class="default">setAccessible</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">MyClass</span><span class="keyword">();<br />echo </span><span class="default">$property</span><span class="keyword">-&gt;</span><span class="default">getValue</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">); </span><span class="comment">// Works<br /></span><span class="keyword">echo </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">myProperty</span><span class="keyword">; </span><span class="comment">// Doesn't work (error)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98383">  <div class="votes">
    <div id="Vu98383">
    <a href="/manual/vote-note.php?id=98383&amp;page=reflectionproperty.setaccessible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98383">
    <a href="/manual/vote-note.php?id=98383&amp;page=reflectionproperty.setaccessible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98383" title="71% like this...">
    3
    </div>
  </div>
  <a href="#98383" class="name">
  <strong class="user"><em>Rob McVey</em></strong></a><a class="genanchor" href="#98383"> &para;</a><div class="date" title="2010-06-11 10:11"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98383">
<div class="phpcode"><code><span class="html">If you are using &lt; PHP 5.3 and need to get the private attributes and values, you can use this method:
<br />
<br />This is what you are doing:
<br />
<br /><span class="default">&lt;?php
<br />$obj_with_privates </span><span class="keyword">= new </span><span class="default">MyObject</span><span class="keyword">();
<br /></span><span class="default">$class     </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$obj_with_privates</span><span class="keyword">);
<br /></span><span class="default">$vars     </span><span class="keyword">= </span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$obj_with_privates</span><span class="keyword">);
<br /></span><span class="comment">//will not show private attributes
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$vars</span><span class="keyword">);
<br />
<br /></span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">( </span><span class="default">$class </span><span class="keyword">);
<br /></span><span class="default">$attributes </span><span class="keyword">= </span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">();
<br /></span><span class="comment">//still no private access!
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$attributes</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This is what you should do:
<br />
<br /><span class="default">&lt;?php
<br />$obj_with_privates </span><span class="keyword">= new </span><span class="default">MyObject</span><span class="keyword">();
<br />
<br /></span><span class="default">$class         </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">( </span><span class="default">$obj_with_privates </span><span class="keyword">);
<br /></span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">( </span><span class="default">$class </span><span class="keyword">);
<br /></span><span class="default">$abstract    </span><span class="keyword">= </span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">getMethods</span><span class="keyword">( </span><span class="default">ReflectionMethod</span><span class="keyword">::</span><span class="default">IS_ABSTRACT </span><span class="keyword">);
<br /></span><span class="default">$priv_attr  </span><span class="keyword">= </span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">( </span><span class="default">ReflectionProperty</span><span class="keyword">::</span><span class="default">IS_PRIVATE </span><span class="keyword">);
<br /></span><span class="default">$privates   </span><span class="keyword">= array();
<br /></span><span class="default">$parent     </span><span class="keyword">= </span><span class="default">get_parent_class</span><span class="keyword">( </span><span class="default">$class </span><span class="keyword">);
<br /></span><span class="default">$child         </span><span class="keyword">= </span><span class="default">$class</span><span class="keyword">;
<br /></span><span class="default">$constructor </span><span class="keyword">= </span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">getConstructor</span><span class="keyword">();
<br />
<br /></span><span class="comment">//If the class has abstract methods you need to implement them
<br /></span><span class="default">$abstr_methods </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />if(</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$abstr_methods</span><span class="keyword">))
<br />{
<br />    foreach(</span><span class="default">$abstract </span><span class="keyword">as </span><span class="default">$method</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$mname </span><span class="keyword">= </span><span class="default">$method</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;
<br />        </span><span class="default">$abstr_methods </span><span class="keyword">.= </span><span class="string">"public function </span><span class="default">$mname</span><span class="string">(){return false;}"</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="comment">//Convert private attributes to public attributes
<br /></span><span class="keyword">if(</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$priv_attr</span><span class="keyword">))
<br />{
<br />    </span><span class="default">$parseable </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\0</span><span class="default">$class</span><span class="string">\0"</span><span class="keyword">, </span><span class="string">"\0*\0"</span><span class="keyword">, </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">)));
<br />    foreach(</span><span class="default">$priv_attr </span><span class="keyword">as </span><span class="default">$attribute</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$aname </span><span class="keyword">= </span><span class="default">$attribute</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;
<br />        </span><span class="default">$privates</span><span class="keyword">[</span><span class="default">$aname</span><span class="keyword">] = </span><span class="default">$parseable</span><span class="keyword">-&gt;</span><span class="default">$aname</span><span class="keyword">;
<br />    }
<br />}
<br />            
<br />
<br /></span><span class="default">$temp_child_class </span><span class="keyword">= </span><span class="string">"temp" </span><span class="keyword">. </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"_"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="string">"</span><span class="default">$class</span><span class="string">"</span><span class="keyword">);
<br />
<br /></span><span class="comment">//You can gain access to protected attributes by extending the target class
<br /></span><span class="default">$class_def </span><span class="keyword">= </span><span class="string">"
<br />class </span><span class="default">$temp_child_class</span><span class="string"> extends </span><span class="default">$class</span><span class="string">{
<br />    </span><span class="default">$constructor</span><span class="string">
<br />    public function reflect_getmyvars(){
<br />        return get_object_vars(\$this);
<br />    }
<br />    </span><span class="default">$abstr_methods</span><span class="string">
<br />}
<br />"</span><span class="keyword">;
<br />
<br /></span><span class="comment">//place class definition in memory
<br /></span><span class="keyword">eval(</span><span class="default">$class_def</span><span class="keyword">);
<br />
<br /></span><span class="comment">//generate object from dynamic class
<br /></span><span class="default">$tcobj </span><span class="keyword">=@ new </span><span class="default">$temp_child_class</span><span class="keyword">;    
<br /></span><span class="comment">//call the method we added to the object (to access protected vars)
<br /></span><span class="default">$vars </span><span class="keyword">= </span><span class="default">$tcobj</span><span class="keyword">-&gt;</span><span class="default">reflect_getmyvars</span><span class="keyword">();
<br />
<br /></span><span class="default">$attribs </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$vars</span><span class="keyword">, </span><span class="default">$privates</span><span class="keyword">);
<br />
<br /></span><span class="comment">//will now show private attributes
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$attribs</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100441">  <div class="votes">
    <div id="Vu100441">
    <a href="/manual/vote-note.php?id=100441&amp;page=reflectionproperty.setaccessible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100441">
    <a href="/manual/vote-note.php?id=100441&amp;page=reflectionproperty.setaccessible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100441" title="60% like this...">
    2
    </div>
  </div>
  <a href="#100441" class="name">
  <strong class="user"><em>Yzmir Ramirez</em></strong></a><a class="genanchor" href="#100441"> &para;</a><div class="date" title="2010-10-15 05:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100441">
<div class="phpcode"><code><span class="html">Have you tried:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="string">"PHP Version: "</span><span class="keyword">.</span><span class="default">phpversion</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br /><br />class </span><span class="default">Foo <br /></span><span class="keyword">{<br />    private   </span><span class="default">$bar  </span><span class="keyword">= </span><span class="string">"private"</span><span class="keyword">;<br />    protected </span><span class="default">$bar2 </span><span class="keyword">= </span><span class="string">"protected"</span><span class="keyword">;<br />    public    </span><span class="default">$bar3 </span><span class="keyword">= </span><span class="string">"public"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">;<br /><br /></span><span class="default">$arr </span><span class="keyword">= (array)</span><span class="default">$obj</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />PHP Version: 5.2.12<br />Array<br />(<br />    [Foobar] =&gt; private<br />    [*bar2] =&gt; protected<br />    [bar3] =&gt; public<br />)<br /><br />PHP Version: 5.1.6<br />Array<br />(<br />    [Foobar] =&gt; private<br />    [*bar2] =&gt; protected<br />    [bar3] =&gt; public<br />)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reflectionproperty.setaccessible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionproperty.setaccessible.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.reflectionproperty.php">ReflectionProperty</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="reflectionproperty.clone.php" title="_&#8203;_&#8203;clone">_&#8203;_&#8203;clone</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getattributes.php" title="getAttributes">getAttributes</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getdeclaringclass.php" title="getDeclaringClass">getDeclaringClass</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getdefaultvalue.php" title="getDefaultValue">getDefaultValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getdoccomment.php" title="getDocComment">getDocComment</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.gethook.php" title="getHook">getHook</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.gethooks.php" title="getHooks">getHooks</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getmodifiers.php" title="getModifiers">getModifiers</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getname.php" title="getName">getName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getrawvalue.php" title="getRawValue">getRawValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getsettabletype.php" title="getSettableType">getSettableType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.gettype.php" title="getType">getType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.getvalue.php" title="getValue">getValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.hasdefaultvalue.php" title="hasDefaultValue">hasDefaultValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.hashook.php" title="hasHook">hasHook</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.hashooks.php" title="hasHooks">hasHooks</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.hastype.php" title="hasType">hasType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isabstract.php" title="isAbstract">isAbstract</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isdefault.php" title="isDefault">isDefault</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isdynamic.php" title="isDynamic">isDynamic</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isfinal.php" title="isFinal">isFinal</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isinitialized.php" title="isInitialized">isInitialized</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.islazy.php" title="isLazy">isLazy</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isprivate.php" title="isPrivate">isPrivate</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isprivateset.php" title="isPrivateSet">isPrivateSet</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.ispromoted.php" title="isPromoted">isPromoted</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isprotected.php" title="isProtected">isProtected</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isprotectedset.php" title="isProtectedSet">isProtectedSet</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.ispublic.php" title="isPublic">isPublic</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isreadonly.php" title="isReadOnly">isReadOnly</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isstatic.php" title="isStatic">isStatic</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.isvirtual.php" title="isVirtual">isVirtual</a>
                        </li>
                                                <li class="current">
                            <a href="reflectionproperty.setaccessible.php" title="setAccessible">setAccessible</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.setrawvalue.php" title="setRawValue">setRawValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php" title="setRawValueWithoutLazyInitialization">setRawValueWithoutLazyInitialization</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.setvalue.php" title="setValue">setValue</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.skiplazyinitialization.php" title="skipLazyInitialization">skipLazyInitialization</a>
                        </li>
                                                <li class="">
                            <a href="reflectionproperty.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="reflectionproperty.export.php" title="export">export</a>
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
