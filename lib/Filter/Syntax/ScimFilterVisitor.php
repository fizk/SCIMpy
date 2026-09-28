<?php

/*
 * Generated from ./lib/Filter/Grammar/ScimFilter.g4 by ANTLR 4.13.2
 */

namespace Scimpy\Filter\Syntax;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see ScimFilterParser}.
 */
interface ScimFilterVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see ScimFilterParser::filter()}.
	 *
	 * @param Context\FilterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFilter(Context\FilterContext $context);

	/**
	 * Visit a parse tree produced by {@see ScimFilterParser::logExpr()}.
	 *
	 * @param Context\LogExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogExpr(Context\LogExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScimFilterParser::attrExp()}.
	 *
	 * @param Context\AttrExpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAttrExp(Context\AttrExpContext $context);

	/**
	 * Visit a parse tree produced by {@see ScimFilterParser::valuePath()}.
	 *
	 * @param Context\ValuePathContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValuePath(Context\ValuePathContext $context);

	/**
	 * Visit a parse tree produced by {@see ScimFilterParser::valFilter()}.
	 *
	 * @param Context\ValFilterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValFilter(Context\ValFilterContext $context);

	/**
	 * Visit a parse tree produced by {@see ScimFilterParser::attrPath()}.
	 *
	 * @param Context\AttrPathContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAttrPath(Context\AttrPathContext $context);

	/**
	 * Visit a parse tree produced by {@see ScimFilterParser::compValue()}.
	 *
	 * @param Context\CompValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCompValue(Context\CompValueContext $context);

	/**
	 * Visit a parse tree produced by {@see ScimFilterParser::compareOp()}.
	 *
	 * @param Context\CompareOpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCompareOp(Context\CompareOpContext $context);
}