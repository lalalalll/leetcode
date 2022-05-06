package src.ArrayString;

public class a3寻找数组的中心索引 {
    //给定一个整数类型的数组 nums，请编写一个能够返回数组“中心索引”的方法。
    //
    //我们是这样定义数组中心索引的：数组中心索引的左侧所有元素相加的和等于右侧所有元素相加的和。
    //
    //如果数组不存在中心索引，那么我们应该返回 -1。如果数组有多个中心索引，那么我们应该返回最靠近左边的那一个。
    //
    //示例 1:
    //
    //输入:
    //nums = [1, 7, 3, 6, 5, 6]
    //输出: 3
    //解释:
    //索引3 (nums[3] = 6) 的左侧数之和(1 + 7 + 3 = 11)，与右侧数之和(5 + 6 = 11)相等。
    //同时, 3 也是第一个符合要求的中心索引。
    //示例 2:
    //
    //输入:
    //nums = [1, 2, 3]
    //输出: -1
    //解释:
    //数组中不存在满足此条件的中心索引。
    //说明:
    //
    //nums 的长度范围为 [0, 10000]。
    //任何一个 nums[i] 将会是一个范围在 [-1000, 1000]的整数。

    public static int pivotIndex(int[] nums) {

        // sum: 数组总和, leftSum: 中心数组左半边的和
        int sum = 0, leftSum = 0;

        // 求出数组的总和
        for (int num : nums) {

            sum += num;
        }


        for (int i = 0; i < nums.length; i++) {

            // 根据题意，数组总和：sum，中间索引：i，左侧数值总和：leftSum，右侧数值总和：rightSum
            //          再有中心索引的情况下：leftSum = rightSum
            //                              leftsum = sum - nums[i] - leftSum
            //                            2*leftSum = sum - nums[i]
            if (2 * leftSum == sum - nums[i]) {

                return i;
            }

            leftSum += nums[i];
        }

        return -1;
    }

    public static void main(String[] args) {

        int[] nums = {1, 7, 3, 6, 5, 6};

        int i = pivotIndex(nums);

        System.out.println(i);
    }
}
