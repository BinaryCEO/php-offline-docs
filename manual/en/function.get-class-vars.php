<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: get_class_vars - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.get-class-vars.php">
 <link rel="shorturl" href="https://www.php.net/get-class-vars">
 <link rel="alternate" href="https://www.php.net/get-class-vars" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.classobj.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.get-class-methods.php">
 <link rel="next" href="https://www.php.net/manual/en/function.get-declared-classes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.get-class-vars.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.get-class-vars.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.get-class-vars.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.get-class-vars.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.get-class-vars.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.get-class-vars.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.get-class-vars.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.get-class-vars.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.get-class-vars.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.get-class-vars.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.get-class-vars.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the default properties of the class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: get_class_vars - Manual" />
<meta name="twitter:description" content="Get the default properties of the class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: get_class_vars - Manual" />
<meta itemprop="description" content="Get the default properties of the class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the default properties of the class" />

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
        <a href="function.get-declared-classes.php">
          get_declared_classes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.get-class-methods.php">
          &laquo; get_class_methods        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.classobj.php'>Classes/Objects</a></li>      <li><a href='ref.classobj.php'>Classes/Object Functions</a></li>      </ul>
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
            <option value='en/function.get-class-vars.php' selected="selected">English</option>
            <option value='de/function.get-class-vars.php'>German</option>
            <option value='es/function.get-class-vars.php'>Spanish</option>
            <option value='fr/function.get-class-vars.php'>French</option>
            <option value='it/function.get-class-vars.php'>Italian</option>
            <option value='ja/function.get-class-vars.php'>Japanese</option>
            <option value='pt_BR/function.get-class-vars.php'>Brazilian Portuguese</option>
            <option value='ru/function.get-class-vars.php'>Russian</option>
            <option value='tr/function.get-class-vars.php'>Turkish</option>
            <option value='uk/function.get-class-vars.php'>Ukrainian</option>
            <option value='zh/function.get-class-vars.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.get-class-vars" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">get_class_vars</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">get_class_vars</span> &mdash; <span class="dc-title">Get the default properties of the class</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.get-class-vars-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>get_class_vars</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Get the default properties of the given class.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.get-class-vars-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">class</code></dt>
     <dd>
      <p class="para">
       The class name
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.get-class-vars-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an associative array of declared properties visible from the
   current scope, with their default value.
   The resulting array elements are in the form of 
   <code class="literal">varname =&gt; value</code>.
   In case of an error, it returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.get-class-vars-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5347">
    <p><strong>Example #1 <span class="function"><strong>get_class_vars()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$var1</span><span style="color: #007700">; </span><span style="color: #FF8000">// This has no explicit default value (technically it has NULL as a default)...<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">$var2 </span><span style="color: #007700">= </span><span style="color: #DD0000">"xyz"</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$var3 </span><span style="color: #007700">= </span><span style="color: #0000BB">100</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$var4</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #FF8000">// Change some properties<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var1 </span><span style="color: #007700">= </span><span style="color: #DD0000">"foo"</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var2 </span><span style="color: #007700">= </span><span style="color: #DD0000">"bar"</span><span style="color: #007700">;<br />        return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$my_class </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$class_vars </span><span style="color: #007700">= </span><span style="color: #0000BB">get_class_vars</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$my_class</span><span style="color: #007700">));<br /><br />foreach (</span><span style="color: #0000BB">$class_vars </span><span style="color: #007700">as </span><span style="color: #0000BB">$name </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">: "</span><span style="color: #007700">, </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">var1: NULL
var2: &#039;xyz&#039;
var3: 100</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5348">
    <p><strong>Example #2 <span class="function"><strong>get_class_vars()</strong></span> and scoping behaviour</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'|'</span><span style="color: #007700">, </span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">TestCase<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$a    </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    protected </span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$c   </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /><br />    public static function </span><span style="color: #0000BB">expose</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class_vars</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">));<br />    }<br />}<br /><br /></span><span style="color: #0000BB">TestCase</span><span style="color: #007700">::</span><span style="color: #0000BB">expose</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class_vars</span><span style="color: #007700">(</span><span style="color: #DD0000">'TestCase'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">// 5.0.0
a| * b| TestCase c
a| * b| TestCase c

// 5.0.1 - 5.0.2
a|b|c
a|b|c

// 5.0.3 +
a|b|c
a</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.get-class-vars-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-class-methods.php" class="function" rel="rdfs-seeAlso">get_class_methods()</a> - Gets the class methods' names</span></li>
    <li><span class="function"><a href="function.get-object-vars.php" class="function" rel="rdfs-seeAlso">get_object_vars()</a> - Gets the properties of the given object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/classobj/functions/get-class-vars.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.get-class-vars%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.get-class-vars&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-class-vars.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="28788">  <div class="votes">
    <div id="Vu28788">
    <a href="/manual/vote-note.php?id=28788&amp;page=function.get-class-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28788">
    <a href="/manual/vote-note.php?id=28788&amp;page=function.get-class-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28788" title="70% like this...">
    13
    </div>
  </div>
  <a href="#28788" class="name">
  <strong class="user"><em>rec at NOSPAM dot instantmassacre dot com</em></strong></a><a class="genanchor" href="#28788"> &para;</a><div class="date" title="2003-01-23 04:23"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28788">
<div class="phpcode"><code><span class="html">If you want to retrieve the class vars from within the class itself, use $this.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br /><br />    var </span><span class="default">$a</span><span class="keyword">;<br />    var </span><span class="default">$b</span><span class="keyword">;<br />    var </span><span class="default">$c</span><span class="keyword">;<br />    var </span><span class="default">$d</span><span class="keyword">;<br />    var </span><span class="default">$e</span><span class="keyword">;<br /><br />    function </span><span class="default">GetClassVars</span><span class="keyword">()<br />    {<br />        return </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">get_class_vars</span><span class="keyword">(</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">))); </span><span class="comment">// $this<br />    </span><span class="keyword">}<br /><br />}<br /><br /></span><span class="default">$Foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">;<br /><br /></span><span class="default">$class_vars </span><span class="keyword">= </span><span class="default">$Foo</span><span class="keyword">-&gt;</span><span class="default">GetClassVars</span><span class="keyword">();<br /><br />foreach (</span><span class="default">$class_vars </span><span class="keyword">as </span><span class="default">$cvar</span><span class="keyword">)<br />{<br />    echo </span><span class="default">$cvar </span><span class="keyword">. </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Produces, after PHP 4.2.0, the following:<br /><br />a<br />b<br />c<br />d<br />e</span></code></div>
  </div>
 </div>
  <div class="note" id="109995">  <div class="votes">
    <div id="Vu109995">
    <a href="/manual/vote-note.php?id=109995&amp;page=function.get-class-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109995">
    <a href="/manual/vote-note.php?id=109995&amp;page=function.get-class-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109995" title="60% like this...">
    5
    </div>
  </div>
  <a href="#109995" class="name">
  <strong class="user"><em>bof at bof dot de</em></strong></a><a class="genanchor" href="#109995"> &para;</a><div class="date" title="2012-09-09 07:02"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109995">
<div class="phpcode"><code><span class="html">I needed to get only the class static variables, leaving out instance variables.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_static_vars</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    foreach (</span><span class="default">get_class_vars</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$default</span><span class="keyword">)<br />        if (isset(</span><span class="default">$class</span><span class="keyword">::$</span><span class="default">$name</span><span class="keyword">))<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$default</span><span class="keyword">;<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />That function returns only the public ones. The same pattern can be used inside a class, then it returns private and protected static variables, too:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">static protected function </span><span class="default">get_static_vars</span><span class="keyword">(</span><span class="default">$class </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">) {<br />    if (!isset(</span><span class="default">$class</span><span class="keyword">)) </span><span class="default">$class </span><span class="keyword">= </span><span class="default">get_called_class</span><span class="keyword">();<br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    foreach (</span><span class="default">get_class_vars</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$default</span><span class="keyword">)<br />        if (isset(</span><span class="default">$class</span><span class="keyword">::$</span><span class="default">$name</span><span class="keyword">))<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$default</span><span class="keyword">;<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100248">  <div class="votes">
    <div id="Vu100248">
    <a href="/manual/vote-note.php?id=100248&amp;page=function.get-class-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100248">
    <a href="/manual/vote-note.php?id=100248&amp;page=function.get-class-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100248" title="63% like this...">
    3
    </div>
  </div>
  <a href="#100248" class="name">
  <strong class="user"><em>ken at verango dot com</em></strong></a><a class="genanchor" href="#100248"> &para;</a><div class="date" title="2010-10-04 04:50"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100248">
<div class="phpcode"><code><span class="html">All 3 of get_object_vars, get_class_vars and reflection getDefaultProperties will reveal the name of the array.  For serialization I recommend:
<br />
<br /><span class="default">&lt;?php
<br />$cName </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);
<br /></span><span class="default">$varTemplate</span><span class="keyword">= </span><span class="default">get_class_vars</span><span class="keyword">(</span><span class="default">$cName</span><span class="keyword">)
<br />foreach (</span><span class="default">$varTemplate </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$defaultVal</span><span class="keyword">) {
<br />  </span><span class="default">$vars</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">; </span><span class="comment">// gets actual val.
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;
<br /></span>
<br />No scan the $vars and create serialization string how you wish.
<br />
<br />This protects against erroneous prior deserializing in maintaining the integrity of the class template and ignoring unintended object properties.</span></code></div>
  </div>
 </div>
  <div class="note" id="118317">  <div class="votes">
    <div id="Vu118317">
    <a href="/manual/vote-note.php?id=118317&amp;page=function.get-class-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118317">
    <a href="/manual/vote-note.php?id=118317&amp;page=function.get-class-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118317" title="55% like this...">
    1
    </div>
  </div>
  <a href="#118317" class="name">
  <strong class="user"><em>flobee</em></strong></a><a class="genanchor" href="#118317"> &para;</a><div class="date" title="2015-11-16 12:43"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118317">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">someClass </span><span class="keyword">{<br />    public function </span><span class="default">toArray</span><span class="keyword">() {<br />        </span><span class="default">$records </span><span class="keyword">= array();<br /><br />        foreach( </span><span class="default">$this </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">) {<br />                </span><span class="default">$records</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br /><br />        return </span><span class="default">$records</span><span class="keyword">;<br />    }<br /><br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107320">  <div class="votes">
    <div id="Vu107320">
    <a href="/manual/vote-note.php?id=107320&amp;page=function.get-class-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107320">
    <a href="/manual/vote-note.php?id=107320&amp;page=function.get-class-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107320" title="55% like this...">
    1
    </div>
  </div>
  <a href="#107320" class="name">
  <strong class="user"><em>ciantic</em></strong></a><a class="genanchor" href="#107320"> &para;</a><div class="date" title="2012-01-30 10:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107320">
<div class="phpcode"><code><span class="html">I propse following for getting Public members, always:<br /><span class="default">&lt;?PHP<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"get_public_class_vars"</span><span class="keyword">)) {<br />    function </span><span class="default">get_public_class_vars</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />        return </span><span class="default">get_class_vars</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br />    }<br />}<br />if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"get_public_object_vars"</span><span class="keyword">)) {<br />    function </span><span class="default">get_public_object_vars</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">) {<br />        return </span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />This is to mitigate the problem and a feature that get_object_vars($this) returns private members. Running it simply outside the scope will get the public.<br /><br />Iterating public members only and their defaults are enormously useful in e.g. in serialization classes such as options where each public member is an serializable that is saved and loaded.</span></code></div>
  </div>
 </div>
  <div class="note" id="94535">  <div class="votes">
    <div id="Vu94535">
    <a href="/manual/vote-note.php?id=94535&amp;page=function.get-class-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94535">
    <a href="/manual/vote-note.php?id=94535&amp;page=function.get-class-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94535" title="55% like this...">
    1
    </div>
  </div>
  <a href="#94535" class="name">
  <strong class="user"><em>ianitsky at gmail dot com</em></strong></a><a class="genanchor" href="#94535"> &para;</a><div class="date" title="2009-11-10 11:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94535">
<div class="phpcode"><code><span class="html">If you need get the child protected/private vars ignoring the parent vars, use like this:<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">childClass </span><span class="keyword">extends </span><span class="default">parentClass </span><span class="keyword">{<br />    private </span><span class="default">$login</span><span class="keyword">;<br />    private </span><span class="default">$password</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) {<br />        if (</span><span class="default">$key </span><span class="keyword">== </span><span class="string">'password'</span><span class="keyword">)<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$key </span><span class="keyword">= </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />        else<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$key </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">parentClass </span><span class="keyword">{<br />    public </span><span class="default">$name</span><span class="keyword">;<br />    public </span><span class="default">$email</span><span class="keyword">;<br />    <br />    function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br />        </span><span class="default">$vars </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">getdefaultProperties</span><span class="keyword">());<br />        </span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">__CLASS__</span><span class="keyword">);<br />        </span><span class="default">$parent_vars </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">getdefaultProperties</span><span class="keyword">());<br />        <br />        </span><span class="default">$my_child_vars </span><span class="keyword">= array();<br />        foreach (</span><span class="default">$vars </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">) {<br />            if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$parent_vars</span><span class="keyword">)) {<br />                </span><span class="default">$my_child_vars</span><span class="keyword">[] = </span><span class="default">$key</span><span class="keyword">;<br />            }<br />        }<br />        <br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$my_child_vars</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$child_class </span><span class="keyword">= new </span><span class="default">childClass</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79240">  <div class="votes">
    <div id="Vu79240">
    <a href="/manual/vote-note.php?id=79240&amp;page=function.get-class-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79240">
    <a href="/manual/vote-note.php?id=79240&amp;page=function.get-class-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79240" title="53% like this...">
    1
    </div>
  </div>
  <a href="#79240" class="name">
  <strong class="user"><em>artktec  at  art-k-tec dot com</em></strong></a><a class="genanchor" href="#79240"> &para;</a><div class="date" title="2007-11-16 09:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79240">
<div class="phpcode"><code><span class="html">There seems to be be a function to get constants missing , i.e. get_class_constants() ... so here is a simple function for you all. Hopefully Zend will include this in the next round as a native php call, without using reflection.<br /><br /><span class="default">&lt;?php<br />   </span><span class="keyword">function </span><span class="default">GetClassConstants</span><span class="keyword">(</span><span class="default">$sClassName</span><span class="keyword">) {<br />      </span><span class="default">$oClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$sClassName</span><span class="keyword">);<br />      return </span><span class="default">$oClass</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">());<br />   }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.get-class-vars&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-class-vars.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.classobj.php">Classes/Object Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-alias.php" title="class_&#8203;alias">class_&#8203;alias</a>
                        </li>
                                                <li class="">
                            <a href="function.class-exists.php" title="class_&#8203;exists">class_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.enum-exists.php" title="enum_&#8203;exists">enum_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.get-called-class.php" title="get_&#8203;called_&#8203;class">get_&#8203;called_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class.php" title="get_&#8203;class">get_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class-methods.php" title="get_&#8203;class_&#8203;methods">get_&#8203;class_&#8203;methods</a>
                        </li>
                                                <li class="current">
                            <a href="function.get-class-vars.php" title="get_&#8203;class_&#8203;vars">get_&#8203;class_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-classes.php" title="get_&#8203;declared_&#8203;classes">get_&#8203;declared_&#8203;classes</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-interfaces.php" title="get_&#8203;declared_&#8203;interfaces">get_&#8203;declared_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-traits.php" title="get_&#8203;declared_&#8203;traits">get_&#8203;declared_&#8203;traits</a>
                        </li>
                                                <li class="">
                            <a href="function.get-mangled-object-vars.php" title="get_&#8203;mangled_&#8203;object_&#8203;vars">get_&#8203;mangled_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-object-vars.php" title="get_&#8203;object_&#8203;vars">get_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-parent-class.php" title="get_&#8203;parent_&#8203;class">get_&#8203;parent_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.interface-exists.php" title="interface_&#8203;exists">interface_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.is-a.php" title="is_&#8203;a">is_&#8203;a</a>
                        </li>
                                                <li class="">
                            <a href="function.is-subclass-of.php" title="is_&#8203;subclass_&#8203;of">is_&#8203;subclass_&#8203;of</a>
                        </li>
                                                <li class="">
                            <a href="function.method-exists.php" title="method_&#8203;exists">method_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.property-exists.php" title="property_&#8203;exists">property_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.trait-exists.php" title="trait_&#8203;exists">trait_&#8203;exists</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.autoload.php" title="_&#8203;_&#8203;autoload">_&#8203;_&#8203;autoload</a>
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
