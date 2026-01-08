---
id: f4f0fd1c-a3ff-444e-b1b8-edb3abacf74a
blueprint: html
title: 'Area Element: Defining Image Map Regions'
teaser: 'The area HTML element defines clickable areas within an image map, linking specific regions to URLs for interactive navigation.'
reference_title:
  code: '<area>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<area>'
      -
        type: text
        text: ' HTML tag is used to define clickable regions within an image map, allowing users to interact with specific areas of an image. This tag is always used in conjunction with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<map>'
      -
        type: text
        text: ' element, which defines the overall image map. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<area>'
      -
        type: text
        text: ' element itself is a void element, meaning it does not have a closing tag. It is particularly useful for creating interactive images where different sections can link to various destinations or perform specific actions when clicked. By utilizing the '
      -
        type: text
        marks:
          -
            type: code
        text: '<area>'
      -
        type: text
        text: ' tag, developers can enhance the interactivity of images on a webpage.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<area>'
      -
        type: text
        text: ' tag requires certain attributes to function effectively. The '
      -
        type: text
        marks:
          -
            type: code
        text: shape
      -
        type: text
        text: ' attribute specifies the geometric shape of the clickable area, such as a rectangle, circle, or polygon. The '
      -
        type: text
        marks:
          -
            type: code
        text: coords
      -
        type: text
        text: ' attribute provides the coordinates for the shape, defining its size and position within the image. Additionally, the '
      -
        type: text
        marks:
          -
            type: code
        text: href
      -
        type: text
        text: ' attribute is used to specify the URL or resource that the area links to. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<area>'
      -
        type: text
        text: ' tag can be used within an image map:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <img src="workplace.jpg" alt="Workplace" usemap="#workmap">
          <map name="workmap">
            <area shape="rect" coords="34,44,270,350" alt="Computer" href="computer.htm">
            <area shape="rect" coords="290,172,333,250" alt="Phone" href="phone.htm">
            <area shape="circle" coords="337,300,44" alt="Coffee" href="coffee.htm">
          </map>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<area>'
  -
    type: set
    attrs:
      id: m0h1nanp
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - alt
              - 'Provides alternative text for the area, useful for accessibility.'
          -
            cells:
              - coords
              - 'Specifies the coordinates for the shape of the area.'
          -
            cells:
              - download
              - 'Indicates that the target should be downloaded rather than displayed.'
          -
            cells:
              - href
              - 'Specifies the URL or resource the area links to.'
          -
            cells:
              - hreflang
              - 'Specifies the language of the linked resource.'
          -
            cells:
              - media
              - 'Specifies the media type for which the linked resource is optimized.'
          -
            cells:
              - nohref
              - 'Specifies that an area should not have a hyperlink.'
          -
            cells:
              - rel
              - 'Defines the relationship between the current document and the linked resource.'
          -
            cells:
              - shape
              - 'Defines the shape of the clickable area (e.g., rect, circle, poly).'
          -
            cells:
              - target
              - 'Specifies where to open the linked document (e.g., _blank for new tab).'
          -
            cells:
              - type
              - 'Specifies the MIME type of the target URL.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<area>'
      -
        type: text
        text: ' tag is a powerful tool for creating interactive and clickable areas within images, enhancing user engagement and navigation on a webpage. It is essential for developers to use this tag in conjunction with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<map>'
      -
        type: text
        text: ' element to create effective image maps.'
link: 'https://html.spec.whatwg.org/multipage/image-maps.html#the-area-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: image_and_multimedia
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743364830
seo_title: 'HTML Area Element: Image Map Regions Explained'
seo_description: 'Discover the area HTML element for defining interactive regions in image maps, enhancing web navigation.'
og_title: 'Understanding the HTML Area Element'
og_description: 'Learn how the area element in HTML is used to create interactive regions within image maps, linking specific areas to URLs for improved navigation.'
date: '2025-03-30'
---
