<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: token_get_all - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.token-get-all.php">
 <link rel="shorturl" href="https://www.php.net/token-get-all">
 <link rel="alternate" href="https://www.php.net/token-get-all" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.tokenizer.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.tokenizer.php">
 <link rel="next" href="https://www.php.net/manual/en/function.token-name.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.token-get-all.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.token-get-all.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.token-get-all.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.token-get-all.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.token-get-all.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.token-get-all.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.token-get-all.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.token-get-all.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.token-get-all.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.token-get-all.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.token-get-all.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Split given source into PHP tokens" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: token_get_all - Manual" />
<meta name="twitter:description" content="Split given source into PHP tokens" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: token_get_all - Manual" />
<meta itemprop="description" content="Split given source into PHP tokens" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Split given source into PHP tokens" />

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
        <a href="function.token-name.php">
          token_name &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.tokenizer.php">
          &laquo; Tokenizer Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.tokenizer.php'>Tokenizer</a></li>      <li><a href='ref.tokenizer.php'>Tokenizer Functions</a></li>      </ul>
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
            <option value='en/function.token-get-all.php' selected="selected">English</option>
            <option value='de/function.token-get-all.php'>German</option>
            <option value='es/function.token-get-all.php'>Spanish</option>
            <option value='fr/function.token-get-all.php'>French</option>
            <option value='it/function.token-get-all.php'>Italian</option>
            <option value='ja/function.token-get-all.php'>Japanese</option>
            <option value='pt_BR/function.token-get-all.php'>Brazilian Portuguese</option>
            <option value='ru/function.token-get-all.php'>Russian</option>
            <option value='tr/function.token-get-all.php'>Turkish</option>
            <option value='uk/function.token-get-all.php'>Ukrainian</option>
            <option value='zh/function.token-get-all.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.token-get-all" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">token_get_all</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">token_get_all</span> &mdash; <span class="dc-title">Split given source into PHP tokens</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.token-get-all-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>token_get_all</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$code</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>token_get_all()</strong></span> parses the given <code class="parameter">code</code> 
   string into PHP language tokens using the Zend engine&#039;s lexical scanner.
  </p>
  <p class="para">
   For a list of parser tokens, see <a href="tokens.php" class="xref">List of Parser Tokens</a>, or use 
   <span class="function"><a href="function.token-name.php" class="function">token_name()</a></span> to translate a token value into its string
   representation.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.token-get-all-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">code</code></dt>
     <dd>
      <p class="para">
       The PHP source to parse.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       Valid flags:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="tokenizer.constants.php#constant.token-parse">TOKEN_PARSE</a></code></strong> - Recognises the ability to use
          reserved words in specific contexts.
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.token-get-all-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An array of token identifiers. Each individual token identifier is either
   a single character (i.e.: <code class="literal">;</code>, <code class="literal">.</code>, 
   <code class="literal">&gt;</code>, <code class="literal">!</code>, etc...),
   or a three element array containing the token index in element 0, the string
   content of the original token in element 1 and the line number in element 2.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.token-get-all-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4123">
    <p><strong>Example #1 <span class="function"><strong>token_get_all()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$tokens </span><span style="color: #007700">= </span><span style="color: #0000BB">token_get_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;?php echo; ?&gt;'</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$tokens </span><span style="color: #007700">as </span><span style="color: #0000BB">$token</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #DD0000">"Line </span><span style="color: #007700">{</span><span style="color: #0000BB">$token</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]}</span><span style="color: #DD0000">: "</span><span style="color: #007700">, </span><span style="color: #0000BB">token_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]), </span><span style="color: #DD0000">" ('</span><span style="color: #007700">{</span><span style="color: #0000BB">$token</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">')"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Line 1: T_OPEN_TAG (&#039;&lt;?php &#039;)
Line 1: T_ECHO (&#039;echo&#039;)
Line 1: T_WHITESPACE (&#039; &#039;)
Line 1: T_CLOSE_TAG (&#039;?&gt;&#039;)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-4124">
    <p><strong>Example #2 <span class="function"><strong>token_get_all()</strong></span> incorrect usage example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$tokens </span><span style="color: #007700">= </span><span style="color: #0000BB">token_get_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/* comment */'</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$tokens </span><span style="color: #007700">as </span><span style="color: #0000BB">$token</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #DD0000">"Line </span><span style="color: #007700">{</span><span style="color: #0000BB">$token</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]}</span><span style="color: #DD0000">: "</span><span style="color: #007700">, </span><span style="color: #0000BB">token_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]), </span><span style="color: #DD0000">" ('</span><span style="color: #007700">{</span><span style="color: #0000BB">$token</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">')"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Line 1: T_INLINE_HTML (&#039;/* comment */&#039;)</pre>
</div>
    </div>
   </div>
   Note in the previous example that the string is parsed as
   <strong><code><a href="tokens.php#constant.t-inline-html">T_INLINE_HTML</a></code></strong> rather than the expected
   <strong><code><a href="tokens.php#constant.t-comment">T_COMMENT</a></code></strong>. This is because no open tag was used in the
   code provided. This would be equivalent to putting a comment outside of the
   PHP tags in a normal file.
  </p>
  <p class="para">
   <div class="example" id="example-4125">
    <p><strong>Example #3 
     <span class="function"><strong>token_get_all()</strong></span> on a class using a reserved word example
    </strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$source </span><span style="color: #007700">= &lt;&lt;&lt;'code'<br /></span><span style="color: #DD0000">&lt;?php<br /><br />class A<br />{<br />    const PUBLIC = 1;<br />}<br /></span><span style="color: #007700">code;<br /><br /></span><span style="color: #0000BB">$tokens </span><span style="color: #007700">= </span><span style="color: #0000BB">token_get_all</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">, </span><span style="color: #0000BB">TOKEN_PARSE</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$tokens </span><span style="color: #007700">as </span><span style="color: #0000BB">$token</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #0000BB">token_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]) , </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">T_OPEN_TAG
T_WHITESPACE
T_CLASS
T_WHITESPACE
T_STRING
T_CONST
T_WHITESPACE
T_STRING
T_LNUMBER</pre>
</div>
    </div>
   </div>
   Without the <strong><code><a href="tokenizer.constants.php#constant.token-parse">TOKEN_PARSE</a></code></strong> flag, the penultimate
   token (<strong><code><a href="tokens.php#constant.t-string">T_STRING</a></code></strong>) would have been
   <strong><code><a href="tokens.php#constant.t-public">T_PUBLIC</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.token-get-all-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="phptoken.tokenize.php" class="function" rel="rdfs-seeAlso">PhpToken::tokenize()</a> - Splits given source into PHP tokens, represented by PhpToken objects.</span></li>
    <li><span class="function"><a href="function.token-name.php" class="function" rel="rdfs-seeAlso">token_name()</a> - Get the symbolic name of a given PHP token</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/tokenizer/functions/token-get-all.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.token-get-all%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.token-get-all&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.token-get-all.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91847">  <div class="votes">
    <div id="Vu91847">
    <a href="/manual/vote-note.php?id=91847&amp;page=function.token-get-all&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91847">
    <a href="/manual/vote-note.php?id=91847&amp;page=function.token-get-all&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91847" title="64% like this...">
    5
    </div>
  </div>
  <a href="#91847" class="name">
  <strong class="user"><em>Dennis Robinson from basnetworks dot net</em></strong></a><a class="genanchor" href="#91847"> &para;</a><div class="date" title="2009-06-28 09:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91847">
<div class="phpcode"><code><span class="html">I wanted to use the tokenizer functions to count source lines of code, including counting comments.  Attempting to do this with regular expressions does not work well because of situations where /* appears in a string, or other situations.  The token_get_all() function makes this task easy by detecting all the comments properly.  However, it does not tokenize newline characters.  I wrote the below set of functions to also tokenize newline characters as T_NEW_LINE.<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="string">'T_NEW_LINE'</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br /><br />function </span><span class="default">token_get_all_nl</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">)<br />{<br />    </span><span class="default">$new_tokens </span><span class="keyword">= array();<br /><br />    </span><span class="comment">// Get the tokens<br />    </span><span class="default">$tokens </span><span class="keyword">= </span><span class="default">token_get_all</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">);<br /><br />    </span><span class="comment">// Split newlines into their own tokens<br />    </span><span class="keyword">foreach (</span><span class="default">$tokens </span><span class="keyword">as </span><span class="default">$token</span><span class="keyword">)<br />    {<br />        </span><span class="default">$token_name </span><span class="keyword">= </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">) ? </span><span class="default">$token</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$token_data </span><span class="keyword">= </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">) ? </span><span class="default">$token</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="default">$token</span><span class="keyword">;<br /><br />        </span><span class="comment">// Do not split encapsed strings or multiline comments<br />        </span><span class="keyword">if (</span><span class="default">$token_name </span><span class="keyword">== </span><span class="default">T_CONSTANT_ENCAPSED_STRING </span><span class="keyword">|| </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$token_data</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) == </span><span class="string">'/*'</span><span class="keyword">)<br />        {<br />            </span><span class="default">$new_tokens</span><span class="keyword">[] = array(</span><span class="default">$token_name</span><span class="keyword">, </span><span class="default">$token_data</span><span class="keyword">);<br />            continue;<br />        }<br /><br />        </span><span class="comment">// Split the data up by newlines<br />        </span><span class="default">$split_data </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'#(\r\n|\n)#'</span><span class="keyword">, </span><span class="default">$token_data</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_DELIM_CAPTURE </span><span class="keyword">| </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">);<br /><br />        foreach (</span><span class="default">$split_data </span><span class="keyword">as </span><span class="default">$data</span><span class="keyword">)<br />        {<br />            if (</span><span class="default">$data </span><span class="keyword">== </span><span class="string">"\r\n" </span><span class="keyword">|| </span><span class="default">$data </span><span class="keyword">== </span><span class="string">"\n"</span><span class="keyword">)<br />            {<br />                </span><span class="comment">// This is a new line token<br />                </span><span class="default">$new_tokens</span><span class="keyword">[] = array(</span><span class="default">T_NEW_LINE</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />            }<br />            else<br />            {<br />                </span><span class="comment">// Add the token under the original token name<br />                </span><span class="default">$new_tokens</span><span class="keyword">[] = </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">) ? array(</span><span class="default">$token_name</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">) : </span><span class="default">$data</span><span class="keyword">;<br />            }<br />        }<br />    }<br /><br />    return </span><span class="default">$new_tokens</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">token_name_nl</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">)<br />{<br />    if (</span><span class="default">$token </span><span class="keyword">=== </span><span class="default">T_NEW_LINE</span><span class="keyword">)<br />    {<br />        return </span><span class="string">'T_NEW_LINE'</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">token_name</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Example usage:<br /><br /><span class="default">&lt;?php<br /><br />$tokens </span><span class="keyword">= </span><span class="default">token_get_all_nl</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'somecode.php'</span><span class="keyword">));<br /><br />foreach (</span><span class="default">$tokens </span><span class="keyword">as </span><span class="default">$token</span><span class="keyword">)<br />{<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">))<br />    {<br />        echo (</span><span class="default">token_name_nl</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) . </span><span class="string">': "' </span><span class="keyword">. </span><span class="default">$token</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="string">'"&lt;br /&gt;'</span><span class="keyword">);<br />    }<br />    else<br />    {<br />        echo (</span><span class="string">'"' </span><span class="keyword">. </span><span class="default">$token </span><span class="keyword">. </span><span class="string">'"&lt;br /&gt;'</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />I'm sure you can figure out how to count the lines of code, and lines of comments with these functions.  This was a huge improvement on my previous attempt at counting lines of code with regular expressions.  I hope this helps someone, as many of the user contributed examples on this website have helped me in the past.</span></code></div>
  </div>
 </div>
  <div class="note" id="92653">  <div class="votes">
    <div id="Vu92653">
    <a href="/manual/vote-note.php?id=92653&amp;page=function.token-get-all&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92653">
    <a href="/manual/vote-note.php?id=92653&amp;page=function.token-get-all&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92653" title="60% like this...">
    4
    </div>
  </div>
  <a href="#92653" class="name">
  <strong class="user"><em>gomodo at free dot fr</em></strong></a><a class="genanchor" href="#92653"> &para;</a><div class="date" title="2009-08-02 10:08"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92653">
<div class="phpcode"><code><span class="html">Yes, some problems (On WAMP, PHP 5.3.0 ) with get_token_all() <br /><br />1 : bug line numbers<br /> Since PHP 5.2.2 token_get_all()  should return Line numbers in element 2..<br />.. but for instance (5.3.0 on WAMP), it work perfectly only with PHP code (not HMTL miwed), but if you have some T_INLINE_HTML detected by token_get_all() ,  sometimes you find wrongs line numbers  (return next line)... :(<br /><br />2: bug warning message can impact loops<br />Warning with php code uncompleted (ex : php code line by line) :<br />for example if a comment tag is not closed  token_get_all()  can block loops on this  warning :<br />Warning: Unterminated comment starting line<br /><br />This problem seem not occur in CLI mod (php command line), but only in web mod.<br /><br />Waiting more stability, used token_get_all()  only on PHP code (not HMTL miwed) :<br />First extract entirely PHP code (with open et close php tag), <br />Second use token_get_all()  on the pure PHP code.<br /><br />3 : Why there not function to extract PHP code (to extract HTML, we have Tidy..)?<br /><br />Waiting, I used a function :<br /><br />The code at end this post :<br /><a href="http://www.developpez.net/forums/d786381/php/langage/" rel="nofollow" target="_blank">http://www.developpez.net/forums/d786381/php/langage/</a><br />fonctions/analyser-fichier-php-token_get_all/<br /><br />This function not support :<br />- Old notation :  "&lt;?  ?&gt;" and "&lt;% %&gt;"<br />- heredoc syntax <br />- nowdoc syntax (since PHP 5.3.0)</span></code></div>
  </div>
 </div>
  <div class="note" id="123077">  <div class="votes">
    <div id="Vu123077">
    <a href="/manual/vote-note.php?id=123077&amp;page=function.token-get-all&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123077">
    <a href="/manual/vote-note.php?id=123077&amp;page=function.token-get-all&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123077" title="60% like this...">
    1
    </div>
  </div>
  <a href="#123077" class="name">
  <strong class="user"><em>Ivan Ustanin</em></strong></a><a class="genanchor" href="#123077"> &para;</a><div class="date" title="2018-08-25 05:40"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123077">
<div class="phpcode"><code><span class="html">As a caution: when using TOKEN_PARSE with an invalid php-file, one can get an error like this:<br />Parse error: syntax error, unexpected '__construct' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) in  on line 15<br />Notice the missing filename as this function accepts a string, not a filename and thus has no idea of the latter.<br />However an exception would be more appreciated.</span></code></div>
  </div>
 </div>
  <div class="note" id="119110">  <div class="votes">
    <div id="Vu119110">
    <a href="/manual/vote-note.php?id=119110&amp;page=function.token-get-all&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119110">
    <a href="/manual/vote-note.php?id=119110&amp;page=function.token-get-all&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119110" title="60% like this...">
    1
    </div>
  </div>
  <a href="#119110" class="name">
  <strong class="user"><em>Theriault</em></strong></a><a class="genanchor" href="#119110"> &para;</a><div class="date" title="2016-04-02 11:23"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119110">
<div class="phpcode"><code><span class="html">The T_OPEN_TAG token will include the first trailing newline (\r, \n, or \r\n), tab (\t), or space. Any additional space after this token will be in a T_WHITESPACE token.<br /><br />The T_CLOSE_TAG token will include the first trailing newline (\r, \n, or \r\n; as described here <a href="http://php.net/manual/en/language.basic-syntax.instruction-separation.php" rel="nofollow" target="_blank">http://php.net/manual/en/language.basic-syntax.instruction-separation.php</a>). Any additional space after this token will be in a T_INLINE_HTML token.</span></code></div>
  </div>
 </div>
  <div class="note" id="121116">  <div class="votes">
    <div id="Vu121116">
    <a href="/manual/vote-note.php?id=121116&amp;page=function.token-get-all&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121116">
    <a href="/manual/vote-note.php?id=121116&amp;page=function.token-get-all&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121116" title="55% like this...">
    1
    </div>
  </div>
  <a href="#121116" class="name">
  <strong class="user"><em>bart</em></strong></a><a class="genanchor" href="#121116"> &para;</a><div class="date" title="2017-05-23 08:34"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121116">
<div class="phpcode"><code><span class="html">Not all tokens are returned as an array. The rule appears to be that if a token is not variable, but instead it is one particular constant string, it is returned as a string instead. You don't get a line number. This is the case for braces( "{", "}"), parentheses ("(", ")"), brackets ("[", "]"), comma (","), semi-colon (";"), and a whole slew of operator signs ("!", "=", "+", "*", "/", ".", "+=", ...).</span></code></div>
  </div>
 </div>
  <div class="note" id="79557">  <div class="votes">
    <div id="Vu79557">
    <a href="/manual/vote-note.php?id=79557&amp;page=function.token-get-all&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79557">
    <a href="/manual/vote-note.php?id=79557&amp;page=function.token-get-all&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79557" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#79557" class="name">
  <strong class="user"><em>nicolas dot grekas+php at gmail dot com</em></strong></a><a class="genanchor" href="#79557"> &para;</a><div class="date" title="2007-12-03 01:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79557">
<div class="phpcode"><code><span class="html">Well, there is a way to parse for errors. See<br /><a href="http://www.php.net/manual/function.php-check-syntax.php#77318" rel="nofollow" target="_blank">http://www.php.net/manual/function.php-check-syntax.php#77318</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.token-get-all&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.token-get-all.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.tokenizer.php">Tokenizer Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.token-get-all.php" title="token_&#8203;get_&#8203;all">token_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.token-name.php" title="token_&#8203;name">token_&#8203;name</a>
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
