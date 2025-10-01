<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Variables From External Sources - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.variables.external.php">
 <link rel="shorturl" href="https://www.php.net/variables.external">
 <link rel="alternate" href="https://www.php.net/variables.external" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.variables.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.variables.variable.php">
 <link rel="next" href="https://www.php.net/manual/en/language.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.variables.external.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.variables.external.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.variables.external.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.variables.external.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.variables.external.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.variables.external.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.variables.external.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.variables.external.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.variables.external.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.variables.external.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.variables.external.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Variables From External Sources" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Variables From External Sources - Manual" />
<meta name="twitter:description" content="Variables From External Sources" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Variables From External Sources - Manual" />
<meta itemprop="description" content="Variables From External Sources" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Variables From External Sources" />

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
        <a href="language.constants.php">
          Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.variables.variable.php">
          &laquo; Variable variables        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.variables.php'>Variables</a></li>      </ul>
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
            <option value='en/language.variables.external.php' selected="selected">English</option>
            <option value='de/language.variables.external.php'>German</option>
            <option value='es/language.variables.external.php'>Spanish</option>
            <option value='fr/language.variables.external.php'>French</option>
            <option value='it/language.variables.external.php'>Italian</option>
            <option value='ja/language.variables.external.php'>Japanese</option>
            <option value='pt_BR/language.variables.external.php'>Brazilian Portuguese</option>
            <option value='ru/language.variables.external.php'>Russian</option>
            <option value='tr/language.variables.external.php'>Turkish</option>
            <option value='uk/language.variables.external.php'>Ukrainian</option>
            <option value='zh/language.variables.external.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.variables.external" class="sect1">
   <h2 class="title">Variables From External Sources</h2>
   
   <div class="sect2" id="language.variables.external.form">
    <h3 class="title">HTML Forms (GET and POST)</h3>

    <p class="simpara">
     When a form is submitted to a PHP script, the information from 
     that form is automatically made available to the script. There 
     are few ways to access this information, for example:
    </p>

    <p class="para">
     <div class="example" id="example-143">
      <p><strong>Example #1 A simple HTML form</strong></p>
      <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;form action=&quot;foo.php&quot; method=&quot;post&quot;&gt;
    Name:  &lt;input type=&quot;text&quot; name=&quot;username&quot; /&gt;&lt;br /&gt;
    Email: &lt;input type=&quot;text&quot; name=&quot;email&quot; /&gt;&lt;br /&gt;
    &lt;input type=&quot;submit&quot; name=&quot;submit&quot; value=&quot;Submit me!&quot; /&gt;
&lt;/form&gt;</pre>
</div>
      </div>

     </div>
    </p>

    <p class="para">
     There are only two ways to access data from HTML forms.
     Currently available methods are listed below:
    </p>

    <p class="para">
     <div class="example" id="example-144">
      <p><strong>Example #2 Accessing data from a simple POST HTML form</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'username'</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'username'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>

    <p class="para">
     Using a GET form is similar except the appropriate
     GET predefined variable can be used instead. GET also applies to the
     <code class="literal">QUERY_STRING</code> (the information after the &#039;?&#039; in a URL). So,
     for example, <code class="literal">http://www.example.com/test.php?id=3</code>
     contains GET data which is accessible with <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET['id']</a></var>.
     See also <var class="varname"><a href="reserved.variables.request.php" class="classname">$_REQUEST</a></var>.
    </p>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Dots and spaces in variable names are converted to underscores. For
      example <code class="literal">&lt;input name=&quot;a.b&quot; /&gt;</code> becomes
      <code class="literal">$_REQUEST[&quot;a_b&quot;]</code>.
     </p>
    </p></blockquote>

    <p class="simpara">
     PHP also understands arrays in the context of form variables 
     (see the <a href="faq.html.php" class="link">related faq</a>).
     For example, related variables may be grouped together, or this
     feature may be used to retrieve values from a multiple select input. For
     example, let&#039;s post a form to itself and upon submission display 
     the data:
    </p>

    <p class="para">
     <div class="example" id="example-145">
      <p><strong>Example #3 More complex form variables</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'&lt;pre&gt;'</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />    echo </span><span style="color: #DD0000">'&lt;/pre&gt;'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;<br /></span>&lt;form action="" method="post"&gt;<br />    Name:  &lt;input type="text" name="personal[name]" /&gt;&lt;br /&gt;<br />    Email: &lt;input type="text" name="personal[email]" /&gt;&lt;br /&gt;<br />    Beer: &lt;br /&gt;<br />    &lt;select multiple name="beer[]"&gt;<br />        &lt;option value="warthog"&gt;Warthog&lt;/option&gt;<br />        &lt;option value="guinness"&gt;Guinness&lt;/option&gt;<br />        &lt;option value="stuttgarter"&gt;Stuttgarter Schwabenbräu&lt;/option&gt;<br />    &lt;/select&gt;&lt;br /&gt;<br />    &lt;input type="submit" value="submit me!" /&gt;<br />&lt;/form&gt;</span></code></div>
      </div>

     </div>
    </p>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      If an external variable name begins with a valid array syntax, trailing characters
      are silently ignored. For example, <code class="literal">&lt;input name=&quot;foo[bar]baz&quot;&gt;</code>
      becomes <code class="literal">$_REQUEST[&#039;foo&#039;][&#039;bar&#039;]</code>.
     </span>
    </p></blockquote>
 
    <div class="sect3" id="language.variables.external.form.submit">
     <h4 class="title">IMAGE SUBMIT variable names</h4>

     <p class="simpara">
      When submitting a form, it is possible to use an image instead
      of the standard submit button with a tag like:
     </p>

     <div class="informalexample">
      <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;input type=&quot;image&quot; src=&quot;image.gif&quot; name=&quot;sub&quot; /&gt;</pre>
</div>
      </div>

     </div>

     <p class="simpara">
      When the user clicks somewhere on the image, the accompanying
      form will be transmitted to the server with two additional
      variables, <var class="varname">sub_x</var> and <var class="varname">sub_y</var>.
      These contain the coordinates of the
      user click within the image. The experienced may note that the
      actual variable names sent by the browser contains a period
      rather than an underscore, but PHP converts the period to an
      underscore automatically.
     </p>
    </div>

   </div>

   <div class="sect2" id="language.variables.external.cookies">
    <h3 class="title">HTTP Cookies</h3>

    <p class="simpara">
     PHP transparently supports HTTP cookies as defined by <a href="https://datatracker.ietf.org/doc/html/rfc6265" class="link external">&raquo;&nbsp;RFC 6265</a>. Cookies are a
     mechanism for storing data in the remote browser and thus
     tracking or identifying return users. It is possible to set cookies using
     the <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span> function. Cookies are part of
     the HTTP header, so the SetCookie function must be called before
     any output is sent to the browser. This is the same restriction
     as for the <span class="function"><a href="function.header.php" class="function">header()</a></span> function. Cookie data
     is then available in the appropriate cookie data arrays, such
     as <var class="varname"><a href="reserved.variables.cookies.php" class="classname">$_COOKIE</a></var> as well as in <var class="varname"><a href="reserved.variables.request.php" class="classname">$_REQUEST</a></var>.
     See the <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span> manual page for more details and 
     examples.
    </p>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      As of PHP 7.2.34, 7.3.23 and 7.4.11, respectively, the <em>names</em>
      of incoming cookies are no longer url-decoded for security reasons.
     </span>
    </p></blockquote>

    <p class="simpara">
     If multiple values should be assigned to a single cookie variable,
     they can be assigned as an array. For example:
    </p>

    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />  setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"MyCookie[foo]"</span><span style="color: #007700">, </span><span style="color: #DD0000">'Testing 1'</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">3600</span><span style="color: #007700">);<br />  </span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"MyCookie[bar]"</span><span style="color: #007700">, </span><span style="color: #DD0000">'Testing 2'</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">3600</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    
    <p class="simpara">
     That will create two separate cookies although <var class="varname">MyCookie</var> will now 
     be a single array in the script. If just one cookie should be set
     with multiple values, consider using <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span> or
     <span class="function"><a href="function.explode.php" class="function">explode()</a></span> on the value first.
    </p>

    <p class="simpara">
     Note that a cookie will replace a previous cookie by the same
     name in the browser unless the path or domain is different. So,
     for a shopping cart application a counter may be kept,
     and passed along. I.e.
    </p>

    <div class="example" id="example-146">
     <p><strong>Example #4 A <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span> example</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (isset(</span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">[</span><span style="color: #DD0000">'count'</span><span style="color: #007700">])) {<br />    </span><span style="color: #0000BB">$count </span><span style="color: #007700">= </span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">[</span><span style="color: #DD0000">'count'</span><span style="color: #007700">] + </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />} else {<br />    </span><span style="color: #0000BB">$count </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">'count'</span><span style="color: #007700">, </span><span style="color: #0000BB">$count</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">3600</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"Cart[</span><span style="color: #0000BB">$count</span><span style="color: #DD0000">]"</span><span style="color: #007700">, </span><span style="color: #0000BB">$item</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">3600</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

   </div>

   <div class="sect2" id="language.variables.external.dot-in-names">
    <h3 class="title">Dots in incoming variable names</h3>

    <p class="para">
     Typically, PHP does not alter the names of variables when they
     are passed into a script. However, it should be noted that the
     dot (period, full stop) is not a valid character in a PHP
     variable name. For the reason, look at it:
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$varname</span><span style="color: #007700">.</span><span style="color: #0000BB">ext</span><span style="color: #007700">;  </span><span style="color: #FF8000">/* invalid variable name */<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     Now, what the parser sees is a variable named
     <var class="varname">$varname</var>, followed by the string concatenation
     operator, followed by the barestring (i.e. unquoted string which
     doesn&#039;t match any known key or reserved words) &#039;ext&#039;. Obviously,
     this doesn&#039;t have the intended result.
    </p>

    <p class="para">
     For this reason, it is important to note that PHP will
     automatically replace any dots in incoming variable names with
     underscores.
    </p>

   </div>

   <div class="sect2" id="language.variables.determining-type-of">
    <h3 class="title">Determining variable types</h3>

    <p class="para">
     Because PHP determines the types of variables and converts them
     (generally) as needed, it is not always obvious what type a given
     variable is at any one time. PHP includes several functions
     which find out what type a variable is, such as:
     <span class="function"><a href="function.gettype.php" class="function">gettype()</a></span>, <span class="function"><a href="function.is-array.php" class="function">is_array()</a></span>,
     <span class="function"><a href="function.is-float.php" class="function">is_float()</a></span>, <span class="function"><a href="function.is-int.php" class="function">is_int()</a></span>,
     <span class="function"><a href="function.is-object.php" class="function">is_object()</a></span>, and
     <span class="function"><a href="function.is-string.php" class="function">is_string()</a></span>. See also the chapter on
     <a href="language.types.php" class="link">Types</a>.
    </p>
    <p class="para">
     HTTP being a text protocol, most, if not all, content that comes in
     <a href="language.variables.superglobals.php" class="link">Superglobal arrays</a>, 
     like <var class="varname"><a href="reserved.variables.post.php" class="classname">$_POST</a></var> and <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET</a></var> will remain
     as strings. PHP will not try to convert values to a specific type.
     In the example below, <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET["var1"]</a></var> will contain the
     string &quot;null&quot; and <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET["var2"]</a></var>, the string &quot;123&quot;.
     <div class="example-contents">
<div class="cdata"><pre>
/index.php?var1=null&amp;var2=123
</pre></div>
      </div>

    </p>
   </div>

   <div class="sect2" id="language.variables.external.changelog">
    <h3 class="title">Changelog</h3>

    <p class="para">
     <table class="doctable informaltable">
      
       <thead>
        <tr>
         <th>Version</th>
         <th>Description</th>
        </tr>

       </thead>

       <tbody class="tbody">
        <tr>
         <td>7.2.34, 7.3.23, 7.4.11</td>
         <td>
          The <em>names</em> of incoming cookies are no longer url-decoded
          for security reasons.
         </td>
        </tr>

       </tbody>
      
     </table>

    </p>
   </div>

  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/variables.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.variables.external%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.variables.external&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.variables.external.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="81080">  <div class="votes">
    <div id="Vu81080">
    <a href="/manual/vote-note.php?id=81080&amp;page=language.variables.external&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81080">
    <a href="/manual/vote-note.php?id=81080&amp;page=language.variables.external&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81080" title="51% like this...">
    12
    </div>
  </div>
  <a href="#81080" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#81080"> &para;</a><div class="date" title="2008-02-13 06:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81080">
<div class="phpcode"><code><span class="html">The full list of field-name characters that PHP converts to _ (underscore) is the following (not just dot):<br />chr(32) ( ) (space)<br />chr(46) (.) (dot)<br />chr(91) ([) (open square bracket)<br />chr(128) - chr(159) (various)<br /><br />PHP irreversibly modifies field names containing these characters in an attempt to maintain compatibility with the deprecated register_globals feature.</span></code></div>
  </div>
 </div>
  <div class="note" id="52503">  <div class="votes">
    <div id="Vu52503">
    <a href="/manual/vote-note.php?id=52503&amp;page=language.variables.external&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52503">
    <a href="/manual/vote-note.php?id=52503&amp;page=language.variables.external&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52503" title="53% like this...">
    10
    </div>
  </div>
  <a href="#52503" class="name">
  <strong class="user"><em>krydprz at iit dot edu</em></strong></a><a class="genanchor" href="#52503"> &para;</a><div class="date" title="2005-05-03 01:14"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52503">
<div class="phpcode"><code><span class="html">This post is with regards to handling forms that have more than one submit button.
<br />
<br />Suppose we have an HTML form with a submit button specified like this:
<br />
<br />&lt;input type="submit" value="Delete" name="action_button"&gt;
<br />
<br />Normally the 'value' attribute of the HTML 'input' tag (in this case "Delete") that creates the submit button can be accessed in PHP after post like this:
<br />
<br /><span class="default">&lt;?php
<br />$_POST</span><span class="keyword">[</span><span class="string">'action_button'</span><span class="keyword">];
<br /></span><span class="default">?&gt;
<br /></span>
<br />We of course use the 'name' of the button as an index into the $_POST array.
<br />
<br />This works fine, except when we want to pass more information with the click of this particular button.
<br />
<br />Imagine a scenario where you're dealing with user management in some administrative interface.  You are presented with a list of user names queried from a database and wish to add a "Delete" and "Modify" button next to each of the names in the list.  Naturally the 'value' of our buttons in the HTML form that we want to display will be "Delete" and "Modify" since that's what we want to appear on the buttons' faceplates.
<br />
<br />Both buttons (Modify and Delete) will be named "action_button" since that's what we want to index the $_POST array with.  In other words, the 'name' of the buttons along cannot carry any uniquely identifying information if we want to process them systematically after submit. Since these buttons will exist for every user in the list, we need some further way to distinguish them, so that we know for which user one of the buttons has been pressed.
<br />
<br />Using arrays is the way to go.  Assuming that we know the unique numerical identifier of each user, such as their primary key from the database, and we DON'T wish to protect that number from the public, we can make the 'action_button' into an array and use the user's unique numerical identifier as a key in this array.
<br />
<br />Our HTML code to display the buttons will become:
<br />
<br />&lt;input type="submit" value="Delete" name="action_button[0000000002]"&gt;
<br />&lt;input type="submit" value="Modify" name="action_button[0000000002]"&gt;
<br />
<br />The 0000000002 is of course the unique numerical identifier for this particular user.
<br />
<br />Then when we handle this form in PHP we need to do the following to extract both the 'value' of the button ("Delete" or "Modify") and the unique numerical identifier of the user we wish to affect (0000000002 in this case). The following will print either "Modify" or "Delete", as well as the unique number of the user:
<br />
<br /><span class="default">&lt;?php
<br />$submitted_array </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'action_button'</span><span class="keyword">]);
<br />echo (</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'action_button'</span><span class="keyword">][</span><span class="default">$submitted_array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]] . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$submitted_array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br /></span><span class="default">?&gt;
<br /></span>
<br />$submitted_array[0] carries the 0000000002.
<br />When we index that into the $_POST['action_button'], like we did above, we will extract the string that was used as 'value' in the HTML code 'input' tag that created this button.
<br />
<br />If we wish to protect the unique numerical identifier, we must use some other uniquely identifying attribute of each user. Possibly that attribute should be encrypted when output into the form for greater security.
<br />
<br />Enjoy!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.variables.external&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.variables.external.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.variables.php">Variables</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.variables.basics.php" title="Basics">Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.predefined.php" title="Predefined Variables">Predefined Variables</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.scope.php" title="Variable scope">Variable scope</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.variable.php" title="Variable variables">Variable variables</a>
                        </li>
                                                <li class="current">
                            <a href="language.variables.external.php" title="Variables From External Sources">Variables From External Sources</a>
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
