<?php

/**
 * @OA\Schema(
 *      schema="Subscribe",
 *      @OA\Property(
 *           property="email",
 *           type="string",
 *           default="my@mail.com"
 *      ),
 *      @OA\Property(
 *           property="accept",
 *           type="boolean",
 *           default=true
 *      ),
 * )
 *
 * @OA\Schema(
 *      schema="RentRequest",
 *      @OA\Property(
 *           property="name",
 *           type="string"
 *      ),
 *      @OA\Property(
 *           property="email",
 *           type="string"
 *      ),
 *     @OA\Property(
 *           property="phone",
 *           type="string"
 *      ),
 *     @OA\Property(
 *           property="comment",
 *           type="string"
 *      ),
 * )

 * @OA\Schema(
 *      schema="SubscribeResponse",
 *      @OA\Property(
 *          property="result",
 *          type="bollean",
 *          default=true
 *      ),
 *      @OA\Property(
 *          property="message",
 *          type="string"
 *      ),
 * )
 *
 * @OA\Schema(
 *      schema="LevelResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            type="array",
 *            @OA\Items(
 *              ref="#/components/schemas/LevelItem"
 *            )
 *       )
 * )
 * @OA\Schema (
 *     schema="LevelItem",
 *     @OA\Property(
 *         property="id",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="point",
 *         type="string"
 *     ),
 *     @OA\Property(
 *          property="category",
 *          ref="#/components/schemas/CategorySmall"
 *      ),
 *     @OA\Property(
 *         property="logo",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="type",
 *         type="string",
 *         default="shop | restaurant | service"
 *     )
 * )
 * @OA\Schema(
 *      schema="ContactsResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            type="array",
 *            @OA\Items(
 *              ref="#/components/schemas/Contact"
 *            )
 *       )
 * )
 * @OA\Schema (
 *     schema="Contact",
 *     @OA\Property(
 *         property="department_name",
 *         type="string",
 *         default="Административныый отдел"
 *     ),
 *     @OA\Property(
 *         property="email",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="phone",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="contact_name",
 *         type="string",
 *         default="Иванов Иван Иванович"
 *     )
 * )
 * @OA\Schema(
 *      schema="JobsResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            type="array",
 *            @OA\Items(
 *              ref="#/components/schemas/JobItem"
 *            )
 *       )
 * )
 * @OA\Schema (
 *     schema="JobItem",
 *     @OA\Property(
 *         property="id",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         default="2021-09-22T23:53:30.000000Z"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         default="2021-09-22T23:55:52.000000Z"
 *     )
 * )
 * @OA\Schema(
 *      schema="CategoryListResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            type="array",
 *            @OA\Items(
 *              ref="#/components/schemas/CategorySmall"
 *            )
 *       )
 * )
 * @OA\Schema (
 *     schema="CategorySmall",
 *     @OA\Property(
 *         property="id",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string"
 *     )
 * )
 * @OA\Schema(
 *      schema="CategoryItemDetailResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            type="array",
 *            @OA\Items(
 *              ref="#/components/schemas/CategoryDetail"
 *            )
 *       )
 * )
 * @OA\Schema (
 *     schema="CategoryDetail",
 *     @OA\Property(
 *         property="current_page",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(
 *             ref="#/components/schemas/CategoryDetailItem"
 *         ),
 *     ),
 *     @OA\Property(
 *         property="first_page_url",
 *         type="string"
 *     ),
 *      @OA\Property(
 *         property="from",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="next_page_url",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="path",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="per_page",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="prev_page_url",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="to",
 *         type="integer"
 *     )
 * )
 * @OA\Schema (
 *     schema="CategoryDetailItem",
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="logo",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="level",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *          property="category",
 *          ref="#/components/schemas/CategorySmall"
 *      ),
 * )
 * @OA\Schema(
 *      schema="ItemDetailResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            ref="#/components/schemas/ItemDetail"
 *       )
 * )
 * @OA\Schema (
 *     schema="ItemDetail",
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="logo",
 *         type="string",
 *         default="https://example.com/path/image.jpg"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="level",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="point",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="hours_work",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="phone",
 *         type="string",
 *         nullable="true"
 *     ),
 *     @OA\Property(
 *         property="website",
 *         type="string",
 *         nullable="true"
 *     ),
 *     @OA\Property(
 *          property="category",
 *          ref="#/components/schemas/CategorySmall"
 *     ),
 *     @OA\Property(
 *         property="meta_title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="meta_keywords",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="meta_description",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="images",
 *         type="array",
 *         @OA\Items(
 *           ref="#/components/schemas/EntityImage"
 *         )
 *     )
 * )
 *
 * @OA\Schema (
 *     schema="EntityImage",
 *     @OA\Property(
 *         property="id",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="path",
 *         type="string",
 *         default="https://example.com/path/image.jpg"
 *     ),
 * )
 *
 * @OA\Schema(
 *      schema="NewsListResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            type="array",
 *            @OA\Items(
 *              ref="#/components/schemas/NewsListPaginate"
 *            )
 *       )
 * )
 * @OA\Schema (
 *     schema="NewsListPaginate",
 *     @OA\Property(
 *         property="current_page",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(
 *             ref="#/components/schemas/NewsList"
 *         ),
 *     ),
 *     @OA\Property(
 *         property="first_page_url",
 *         type="string"
 *     ),
 *      @OA\Property(
 *         property="from",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="next_page_url",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="path",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="per_page",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="prev_page_url",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="to",
 *         type="integer"
 *     )
 * )
 * @OA\Schema (
 *     schema="NewsList",
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="main_img",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="text",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="views_count",
 *         type="integer"
 *     ),
 * )
 * @OA\Schema(
 *      schema="PostResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            ref="#/components/schemas/PostDetail"
 *       )
 * )
 * @OA\Schema (
 *     schema="PostDetail",
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="main_img",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="text",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         default="2021-09-08T19:12:40.000000Z"
 *     ),
 *     @OA\Property(
 *         property="meta_title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="meta_keywords",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="meta_description",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="views_count",
 *         type="integer"
 *     )
 * )
 *
 * @OA\Schema(
 *      schema="HomePageResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            ref="#/components/schemas/HomePage"
 *       )
 * )
 * @OA\Schema (
 *     schema="HomePage",
 *     @OA\Property(
 *         property="banners",
 *         type="array",
 *         @OA\Items(
 *             ref="#/components/schemas/BannerMain"
 *         ),
 *     ),
 *     @OA\Property(
 *         property="shops",
 *         type="array",
 *         @OA\Items(
 *             ref="#/components/schemas/ShopMain"
 *         ),
 *     ),
 *     @OA\Property(
 *         property="news",
 *         type="array",
 *         @OA\Items(
 *             ref="#/components/schemas/NewsMain"
 *         ),
 *     ),
 * )
 * @OA\Schema (
 *     schema="BannerMain",
 *     @OA\Property(
 *         property="path",
 *         type="string",
 *         default="https://example.com/banners/image.jpg"
 *     )
 * )
 * @OA\Schema (
 *     schema="ShopMain",
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="logo",
 *         type="string",
 *         default="https://example.com/path/image.jpg"
 *     ),
 *     @OA\Property(
 *         property="level",
 *         type="integer"
 *     ),
 *     @OA\Property(
 *         property="point",
 *         type="string"
 *     ),
 *     @OA\Property(
 *          property="category",
 *          ref="#/components/schemas/CategorySmall"
 *     )
 * )
 * @OA\Schema (
 *     schema="NewsMain",
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="main_img",
 *         type="string"
 *     )
 * )
 */
