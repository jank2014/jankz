/**
 * 资源
 * @authors Jank zwq (979890264@qq.com)
 * @date    2015-06-16 20:22:55
 * @version $Id$
 */
	$(function () {
    var colors = Highcharts.getOptions().colors,
        categories = ['资源总量', '我可分享', '新增', '删除', '我的贡献'],
        name = 'Jank 资源分享',
        data = [{
                y: 20000,
                color: colors[0],
                drilldown: {
                    name: '全部资源',
                    categories: ['视频', '文档', '图片', '书籍'],
                    data: [10000, 2000, 5000, 3000],
                    color: colors[0]
                }
            }, {
                y: 10000,
                color: colors[1],
                drilldown: {
                    name: '我可分享',
                   categories: ['视频', '文档', '图片', '书籍'],
                    data: [8000, 1000, 600, 400],
                    color: colors[1]
                }
            }, {
                y: 8000,
                color: colors[2],
                drilldown: {
                    name: '新增',
                   categories: ['视频', '文档', '图片', '书籍'],
                    data: [ 3800, 1600, 1400, 1200],
                    color: colors[2]
                }
            }, {
                y: 4000,
                color: colors[3],
                drilldown: {
                    name: '删除',
                    categories: ['视频', '文档', '图片', '书籍'],
                    data: [ 2800, 600, 400, 200],
                    color: colors[3]
                }
            }, {
                y: 4000,
                color: colors[4],
                drilldown: {
                    name: '我的贡献',
                    categories: ['视频', '文档', '图片', '书籍'],
                    data: [ 2800, 600, 400, 200],
                    color: colors[4]
                }
            }];

    function setChart(name, categories, data, color) {
	chart.xAxis[0].setCategories(categories, false);
	chart.series[0].remove(false);
	chart.addSeries({
		name: name,
		data: data,
		color: color || 'white'
	}, false);
	chart.redraw();
    }

    var chart = $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'JANKZ分享资源, 2015'
        },
        subtitle: {
            text: '点击查看资源详细. 再次点击返回.'
        },
        xAxis: {
            categories: categories
        },
        yAxis: {
            title: {
                text: '资源数量/GB'
            }
        },
        plotOptions: {
            column: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function() {
                            var drilldown = this.drilldown;
                            if (drilldown) { // drill down
                                setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                            } else { // restore
                                setChart(name, categories, data);
                            }
                        }
                    }
                },
                dataLabels: {
                    enabled: true,
                    color: colors[1],
                    style: {
                        fontWeight: 'bold'
                    },
                    formatter: function() {
                        return this.y +' GB';
                    }
                }
            }
        },
        tooltip: {
            formatter: function() {
                var point = this.point,
                    s = this.x +':<b>'+ this.y +'GB jankz share</b><br/>';
                if (point.drilldown) {
                    s += '点击查看 '+ point.category +' 资源';
                } else {
                    s += '点击数据返回jank share';
                }
                return s;
            }
        },
        series: [{
            name: name,
            data: data,
            color: 'white'
        }],
        exporting: {
            enabled: false
        }
    })
    .highcharts(); // return chart
});